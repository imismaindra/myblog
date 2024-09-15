<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    public function category():BelongsTo{
        return $this->belongsTo(category::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id',
        'user_id',
        'status',
    ];

    public function getPhotoUrlAttribue(){
        return $this->image ? asset($this->image):null;
    }
}
