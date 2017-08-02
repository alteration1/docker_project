<?php


 
 

class Comment extends Eloquent {
    protected $fillable = array('comment','filename','username');
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comment';
}
