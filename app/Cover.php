<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
  protected $fillable = [
    'album_id',
    'url',
  ];

  public function album() {
    return $this->belongsTo('App\Album');
  }
}
