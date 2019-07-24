<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    Protected $fillable =['name'];

    public function patients(){
        return $this->hasMany(Patient::class);
    } 
    
}
