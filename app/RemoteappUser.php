<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemoteappUser extends Model
{
	public function genderName()
	{
		if ($this->gender) {
			return $this->gender == 'M' ? 'Man' : 'Woman';
		}

		return '-';
	}
}
