<?php

namespace Samankhdev\LaraComment\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Comment extends Model
{
    use HasFactory, SearchableTrait;
    protected $searchable = [
        'columns' => [
            'text' => 10
        ]
    ];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function answers()
    {
        return $this->hasMany(Comment::class, "answer_id", 'id')->where('answer_id', "!=", 0)->where("status", 1);
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}
