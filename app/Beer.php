<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['name', 'typology', 'color', 'alcohol_content', 'nation', 'producer', 'image'];
}
