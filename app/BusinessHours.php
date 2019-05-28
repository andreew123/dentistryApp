<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessHours extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'business_hours';

    /**
     * Get the day record.
     */
    public function day()
    {
        return $this->hasOne('App\Days', 'id', 'day_id');
    }

    /**
     * Get the frequency record.
     */
    public function frequency()
    {
        return $this->hasOne('App\Frequencies', 'id', 'frequency_id');
    }
}
