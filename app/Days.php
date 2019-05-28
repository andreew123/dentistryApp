<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'days';

    /**
     * Disable auto created_at, updated_at
     */
    public $timestamps = false;
}
