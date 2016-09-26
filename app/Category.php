<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'name', 'description'
    ];

    public function ticket(){
    	return $this->hasOne(Ticket::class);
    }
}
