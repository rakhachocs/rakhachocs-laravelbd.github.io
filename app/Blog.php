<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Blog extends Model
{
	use softDeletes;
    protected $table = 'blog';
    protected $fillable = ['title','content','category'];
}
