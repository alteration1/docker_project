<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Questions
 *
 * @author Росана
 */
class Questions extends Eloquent {
protected $fillable = array('quest1','quest2','quest3');
    protected $table = 'questions';
}
