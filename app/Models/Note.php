<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table ='notes';
    protected $primaryKey = 'id';
    
    function category()
    {
        return $this->belongsTo(Category::class);
    }
}