<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promises extends Model
{
    use HasFactory;
    protected $table = 'premises';
    protected $fillable = ['id', 'areaMin', 'areaMax', 'isActive', 'crmId', 'type_id', 'floor', 'price', 'pricecur', 'id_typedeal', 'id_tax', 'isready', 'readydate',   'explcur', 'explprice',   'layout',  'lastsynctime'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
