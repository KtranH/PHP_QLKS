<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Phong extends Model
{
    use HasFactory;
    protected $table = 'phong';
    protected $primaryKey = 'MAPHONG';
    public $timestamps = false;
    protected $fillable = [
        'MAPHONG',
        'TENPHONG',
        'VITRI',
        'GIATHUE',
        'TRANGTHAI',
        'MALP',
        'ANHPHONG'
    ];
}
