<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
