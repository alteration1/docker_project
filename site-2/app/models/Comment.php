<?php


 
 

class Comment extends Eloquent {
    protected $fillable = array('comment','fileId','userId', 'username');
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comment';
}
