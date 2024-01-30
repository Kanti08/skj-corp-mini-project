<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $fillable = ['commenter_name', 'comment','Blog_Post_id'];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class,'post_id');
    }
}