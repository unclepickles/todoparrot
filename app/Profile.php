<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('todoparrot\User');
    }
}
