<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function create_post($title,$body){
        $this->title=$title;
        $this->body=$body;
        $this->save();
}
}
