<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Request;


class Project extends Model
{
    
    use Sluggable;


    public $fillable = ['title'];


    public function sluggable()

    {

        return [

            'slug' => [

                'source' => 'title'

            ]

        ];

    }

}

