<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamhsft extends Model
{
    protected $table = "datamhs";
    protected $primaryKey = "nim";
    protected $fillable = ['nama','prodi','gender','agama','tempat','tanggal_lahir','status','nohp','dosenPA'];
}
