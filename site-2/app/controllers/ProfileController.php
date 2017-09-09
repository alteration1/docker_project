<?php

class ProfileController extends BaseController{
    
    public function user(){
       $email = Auth::user()->email ;
        $user = User::where('email', '=', $email);
        
        if($user->count()){
            $user = $user->first();
            return View::make('profile.user')
                    ->with('user',$user);
        }
        return App::abort(404);
    }
    
    
    public function postFile(){
       $validator = Validator::make(Input::all(),
                array(
                    'filename'  => 'required|max:2000|unique:files|mimes:doc,pdf,txt,docx'
                    )
                );
        
        if($validator->fails()){
            return Redirect::route('profile-user')
                    ->withErrors($validator)
                    ->withInput();
        }else{
	
		$file = Input::file('filename'); // your file upload input field in the form should be named 'file'

      		$username = Auth::user()->username ;
                $destinationPath = 'uploads/'.$username;
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('filename')->move($destinationPath, $filename);
		 $filePath = $destinationPath.'/'.$filename;
                 
		if( $uploadSuccess ) {
                    $files = new Files;
                    if(Files::where('filename', '=', $filePath)->count()){
                      return Redirect::route('profile-user')
                       ->with('global','The file already exist.');
                    }else{
                    $files->filename = $filePath;
                    $files->userId = Auth::user()->id;
                    $files->save();
                   //$getFiles = $files->where('username', '=', $username)->get();
                       return Redirect::route('profile-user')
                       ->with('global','The file was successfully uploaded.'); // or do a redirect with some message that file was uploaded
                    }              
		} else {
		   return Redirect::route('profile-user')
                       ->with('global','Unable to upload the file.');
		}
	    }
       }
        
        public function deleteFile($fileid){
            return View::make('profile.delete', array('fileid'=>$fileid));
               
               }
              
               
           public function handleDelete($fileid){
               
               $files = Files::find($fileid);
            
               File::delete($files->id);
               $files->delete();
               if(File::exists($files->id)){
                   return Redirect::route('profile-user')
                       ->with('global','Unable to delete the file.');
               }else{
                  return Redirect::route('profile-user')
                       ->with('global','The file is deleted.'); 
                  
               }
                          
       }
    
        public function fileComment(){
            return View::make('profile.filecomment');
        }
      
        public function postComment($fileid){
            $validator = Validator::make(Input::all(),
                array(
                    'comment'  => 'required|min:3|max:300'
                    )
                );
        
        if($validator->fails()){
            return Redirect::to('/filecomment/'.$fileid)
                    ->withErrors($validator)
                    ->withInput();
        }else{
            $files = Files::where('id','=', $fileid)->first();
            $comment = Input::get('comment');
            $userId = Auth::user()->id ;
            $fileId = $files->id;
            
            $comment = Comment::create(array(
                'comment' => $comment,
                'userId' => $userId,
                'fileId' => $fileId,
                'username' => Auth::user()->username
              ));
            return Redirect::to('/filecomment/'.$fileid)
                     ->with('global', 'Your comment has been successfully published.');
        } 
     }
     
     public function usersView(){
          return View::make('profile.users');
     }
     
    /* public function downloadView($fileid){
         return View::make('profile.download', array('fileid'=>$fileid));
     }*/

     public function downloadFile($fileid){
            
                $files = Files::where('id','=', $fileid)->first();
            $files_path = $files->filename;
            
             if (file_exists($files_path)) {
                 
             
        return Response::download($files_path, basename($files_path));
        
      }
       else{
        return Redirect::to('/filecomment/'.$fileid)
                     ->with('global', 'Unable to download this file.');
      }
          
      return Redirect::to('/filecomment/'.$fileid)
                     ->with('global', 'Unable to download this file.');
        }
        
        public function commentDelete($id){
            $comment = Comment::find($id);
            $files = Files::where('id','=', $comment->fileId)->first();
            return View::make('profile.delcomment', array('id' =>$id, 'fileid'=>$files->id));
        }
            
        public function commentDeleteHandle($id){
            $comment = Comment::find($id);
            $files = Files::where('id','=', $comment->fileId)->first();
            if(Auth::user()->id == $comment->userId){
                $comment->delete();
                return Redirect::to('/filecomment/'.$files->id)
                       ->with('global','The comment is deleted.'); 
            }else{
                   return Redirect::to('/filecomment/'.$files->id)
                       ->with('global','You can delete only your own comments.');
               }
        }
}   
