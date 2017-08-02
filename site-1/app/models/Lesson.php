<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lesson
 *
 * @author Росана
 */
class Lesson extends Eloquent {
   protected $fillable = array('lesson_id','name','text');
    protected $table = 'lesson';
}
