<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    protected $fillable =  ['name', 'avatar','description'];
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
