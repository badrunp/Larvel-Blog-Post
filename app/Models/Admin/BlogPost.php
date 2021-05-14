<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug', 'body', 'tag', 'image', 'status', 'user_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}