<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Росана
 */
class AdminController extends BaseController{
    
    public function usinfo(){
        $username = Auth::user()->username;
         $user = User::where('username', '=', $username);
        
        if($user->count()){
            $users = User::all();
             return View::make('info.usinfo');
        }else{
                return Redirect::route('home');
            }
    }
    
}
