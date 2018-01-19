<?php

namespace App\DocumentModels;

use Illuminate\Database\Eloquent\Model;

class DocumentTag extends Model
{
    public function documents(){
        return $this->belongsToMany(Document::class);
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
