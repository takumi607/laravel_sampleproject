<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
  use softDeletes;
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
