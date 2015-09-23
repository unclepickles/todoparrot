<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function todolist()
    {
        return $this->belongsTo('todoparrot\Todolist');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeDone($query)
    {
        return $query->where('done',1);
    }
}
