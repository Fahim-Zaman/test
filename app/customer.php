<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    
    
    protected $table = "customer";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

}
