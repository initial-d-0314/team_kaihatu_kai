<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'image_url',
        'date',
        'post_id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
