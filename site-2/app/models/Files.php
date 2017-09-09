<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of File
 *
 * @author Rosana
 */
class Files extends Eloquent {
    protected $fillable = array('filename','userId');
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'files';
}


