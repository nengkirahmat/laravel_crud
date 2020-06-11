<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama_lengkap','jk','tgl_lahir','email','username','password'];
    use SoftDeletes;
}
