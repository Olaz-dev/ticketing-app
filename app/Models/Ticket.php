<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable =['title','text_description',];
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function labels(){
        return $this->belongsToMany(Label::class);
    }
    
}
