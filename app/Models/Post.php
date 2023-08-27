<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image_url',
        'date',
        'auth_send_user',
        'user_id',
    ];

    public function getPaginateByLimit(int $limit_count = 10)
    {
        //自分のidで絞りこみ
        // updated_atで降順に並べたあと、limitで件数制限をかける
        $user_id = \Auth::user()->id;
        return $this::where("auth_send_user", $user_id)->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post(){
        return $this->hasOne(Receiver::class);
    }

}
