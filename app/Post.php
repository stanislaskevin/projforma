<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Post extends Model

{
    use Searchable;


    protected $fillable = [
        'title'
    ];

    //Table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    public $type = 'post_type';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\user');
    }

    public function categories(){
        return $this->belongsToMany(Categorie::class);
    }

    public function picture(){
        return $this->hasOne(Picture::class);
    }
}
