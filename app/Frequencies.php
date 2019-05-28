<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequencies extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'frequencies';

    /**
     * Disable auto created_at, updated_at
     */
    public $timestamps = false;
    
}
