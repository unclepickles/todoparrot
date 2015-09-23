<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todolist extends Model
{
    protected $fillable = ['name', 'description', 'updated_at'];
    /**
     * @var array
     * for validation
     */
    protected $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    protected $dates = ['deleted_at'];
    /**
     * @return string
     */
    public function getUsername()
    {
        return strtolower($this->username);
    }

    public function isDueToday()
    {
        $now = Carbon::now();
        if($this->created_at->diff($now->days == 0))
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function validate()
    {
        $v = \Validator::make($this->attributes, $this->rules);
        if($v->passes()) return true;
        $this->errors = $v->message();
        return false;
    }

    /**
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsTo('todoparrot\Category')->withTimestamps();
    }

    public function comments()
    {
        return $this->morphMany('\todoparrot\Comment', 'commentable');
    }
}
