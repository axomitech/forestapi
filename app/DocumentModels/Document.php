<?php

namespace App\DocumentModels;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function office(){
        return $this->belongsTo(Office::class);
    }

}
