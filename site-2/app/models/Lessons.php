<?php


 
 

class Lessons extends Eloquent {
    protected $fillable = array('lesson','description','admin');
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lesson';
}