<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Television extends Model
{
    use HasFactory;
        
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'size',
        'type_id'
    ];

            
            //return $this->belongsTo(Type::class, 'type_id');
 }

