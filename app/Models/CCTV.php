<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CCTV extends Model
{
    use HasFactory;

    protected $table = 'cctvs';
    protected $fillable = [
        'cctv_owner',
        'cctv_name',
        'cctv_ip',
        'status',
    ];
    protected $guarded = ['id'];
}
