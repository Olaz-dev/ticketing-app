<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['title','text_description','ticket_image','priority','status','user_id','agent_comment','ticket_attended_to_by'];


    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function labels(){
        return $this->belongsToMany(Label::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }

}