<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
      'content'
    ];
    public function subject(){
      return $this->belongsTo(Subject::class);
    }
    public function tags(){
      return $this -> belongsToMany(Tag::class);
    }
}
