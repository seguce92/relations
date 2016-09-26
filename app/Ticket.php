<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';

    protected $fillable = [
    	'description', 'category_id'
    ];

    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
