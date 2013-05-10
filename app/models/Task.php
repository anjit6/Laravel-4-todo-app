<?php

class Task extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	// protected $table = 'tasks';

	/**
	 * Override default primary key 'id'
	 * 
	 * @var string
	 */
	protected $primaryKey = 'tsk_id';

	protected $fillable = array('description_tsk', 'status_tsk', 'url_tsk');

}