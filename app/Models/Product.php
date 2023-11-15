<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function establishment() {
        //return $this->belongsTo(establishment::Class); 
    }
    public function category() {
        // **importar los modelos** 
        // esta funcion es para
        // relacionar los datos foraneos
        //return $this->belongsTo(Category::Class);
    }
}
