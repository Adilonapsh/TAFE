<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectss extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'project_owner',
        'project_name',
        'project_body',
        'status',
        'due',
    ];
    protected $guarded = ['id'];
}
