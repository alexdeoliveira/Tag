<?php

namespace TrezeVel\Tag\Models;

use Illuminate\Database\Eloquent\Model;

/**
* Model de tags
*/
class Tag extends Model
{

    protected $table = 'trezevel_tags';

    protected $fillable = [
        'name'
    ];

    public function taggable()
    {
        return $this->morphTo();
    }
}
