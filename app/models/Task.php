<?php

class Task extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'task';

	/**
	 * Override default primary key 'id'
	 * 
	 * @var string
	 */
	protected $primaryKey = 'tsk_id';

}