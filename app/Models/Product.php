<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $Table = "Products";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'Qty', 'Price'];
    protected $hidden = ['created_at', 'updated_at'];
}