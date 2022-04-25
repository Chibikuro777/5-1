<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    protected $guarded = array('id');

    protected $fillable = [
        'body',
    ];

    public static $rules = [
        'comment' => 'required',
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function getList()
    {
        $items = DB::table('posts')
            ->select('posts.*')
            ->orderBy('posts.created_at', 'DESC')
            ->paginate(20);
        return $items;
    }
}
