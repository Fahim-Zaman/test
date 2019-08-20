<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idea_review extends Model
{
    protected $table = "idea_review";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
