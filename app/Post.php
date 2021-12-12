<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = [
    'title',
    'body',
    'category_id'
    ];
    
public function getByLimit(int $limit_count = 10)
{
 return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}
 
 public function category()
{
    return $this->belongsTo('App\Category');
}

}

