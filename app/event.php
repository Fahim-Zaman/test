<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table = "event";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
