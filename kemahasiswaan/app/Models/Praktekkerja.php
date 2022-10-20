<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktekkerja extends Model
{
    use HasFactory;
    protected $table = "praktek_kerja";
    protected $primary_Key = "id";
    protected $fillable = [
        'id',
        'nim',
        'nama',
        'nama_program',
        'jumlah_mahasiswa',
        'tahun_kegiatan',
        'surat_tugas'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
    parent::boot();
    self::creating(function ($model) {
        $model->id= IdGenerator::generate(['table' => 'praktek_kerja', 'length' => 5, 'prefix' =>'PK']);
    });
    }
}
