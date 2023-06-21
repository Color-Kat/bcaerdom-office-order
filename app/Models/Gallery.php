<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable = ['id_gallery', 'id_premises', 'image'];
    protected $guarded = ['id_gallery'];
    public $timestamps = false;
}
