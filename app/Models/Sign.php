<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    use HasFactory;
    protected $table = 'sings';
    protected $fillable = ['id', 'flag_header', 'flag_footer', 'flag_sign'];
    protected $guarded = ['id'];
    public $timestamps = false;

}
