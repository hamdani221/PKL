<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class KegMandiri extends Model
{
    use HasFactory;
    //protected $fillable = ['nim','nama'] <== digunakan untuk memperbolehkan data-data yang akan diisi
    protected $table = "keg_mandiris";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nim',
        'nama',
        'kategori_kegiatan',
        'capaian_prestasi',
        'tanggal_mulai',
        'tanggal_selesai',
        'sertifikat',
        'url_kegiatan',
        'foto_penghargaan',
        'surat_tugas'
    ];
    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
    parent::boot();
    self::creating(function ($model) {
        $model->id= IdGenerator::generate(['table' => 'keg_mandiris', 'length' => 11, 'prefix' =>'PMandiri']);
    });
    }
}
