<?php

namespace App\DocumentModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function documents(){
        return $this->hasMany(Document::class);
    }
}
