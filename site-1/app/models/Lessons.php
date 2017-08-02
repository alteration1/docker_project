<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lessons
 *
 * @author Росана
 */
class Lessons extends Eloquent {
protected $fillable = array('name','text');
    protected $table = 'lessons';
}
