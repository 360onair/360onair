<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function scopeShowProject($query) // Show projects at overview page
    	{
    		return $query->where('visible', 1);
    	}
}

