<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    Protected $fillable =[
        'first_name',
        'last_name',
        'dob',
        'division_id'];

        public function division(){
            return $this->belongsTo(Division::class);
        }

        public function treatments(){
            return $this->hasMany(Treatment::class);
        }
}
