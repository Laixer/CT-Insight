<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemoteappProject extends Model
{
	public function hourRateForHumans()
	{
		return '&euro; ' . number_format($this->hour_rate, 2);
	}

    public function location()
    {
        return $this->address_street . ' ' . $this->address_number . ', ' . $this->address_city;
    }

    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo('App\RemoteappUser', 'user_id', 'id');
    }
}
