<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typedeal extends Model
{
    use HasFactory;
    protected $table = 'typedeal';
    protected $fillable = ['id_typedeal', 'name_typedeal'];
    protected $guarded = ['id_typedeal'];
}
