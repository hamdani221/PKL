<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertukaranmhs extends Model
{
    use HasFactory;
    protected $table = "pertukaranmhs";
    protected $primaryKey = "id";
    protected $fillable = ['id','nim','nama','nama_program','level','statusi','jumlah_mahasiswa','tahun_kegiatan','surat_tugas'];

    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
    parent::boot();
    self::creating(function ($model) {
        $model->id= IdGenerator::generate(['table' => 'pertukaranmhs', 'length' => 5, 'prefix' =>'PM']);
    });
    }
}
