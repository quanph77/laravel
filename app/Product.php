<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Product extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_number', 'dob', 'image'
    ];
}