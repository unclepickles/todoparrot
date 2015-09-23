<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function todolists()
    {
        return $this->belongsToMany('todoparrot\Todolist')->withTimestamps();
    }
}
