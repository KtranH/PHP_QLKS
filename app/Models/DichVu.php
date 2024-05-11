<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = "dichvu";
    protected $primaryKey = "MADV";
    public $timestamps = false;
    protected $fillable = [
        'TENDV',
        'GIA',
        'HinhAnh',
    ];

    public static function loadChiTietDichVu($dv)
    {
        return self::where('MADV', $dv)->first();
    }
    
}
