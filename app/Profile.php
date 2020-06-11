<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  public function profileImage()
  {
    return ($this->image) ? '/storage/' . $this->image : '/img/logo.png';
  }

  public function followers()
  {
    return $this->belongsToMany(User::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
