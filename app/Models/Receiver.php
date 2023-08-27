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
        'receive_user',
        'user_id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        //自分のidで絞りこみ
        // updated_atで降順に並べたあと、limitで件数制限をかける
        $user_id = \Auth::user()->id;
        return $this::where("receive_user", $user_id)->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
