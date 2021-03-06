<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('APP\User');
    }
    
    protected $fillable = [
        'title',
        'comment',
        'user_id',
        'lat',
        'lng',
    ];
    
    public function getPaginateByLimit(int $limit_count= 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
