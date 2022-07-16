<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'model','brand' ,'power' ,'year' ,'finishing' ,'short_description' ,'main_photo' ,'sale_price' 
     ];
}
