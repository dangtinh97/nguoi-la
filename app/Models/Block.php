<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'blocks';
    protected $fillable = ['name','data','deleted_at'];
    const BLOCK_DEFINED = "DEFINED";
}