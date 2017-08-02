<?php
class AdminController extends BaseController{
    
    public function lessonView(){
        return View::make('admin.lesson');
    }
    
   public function postFile(){
        $validator = Validator::make(Input::all(),
                array(
                    'file'  => 'required|max:2000|mimes:doc,pdf,txt,docx',
                    'description' => 'required|min:3|max:300'
                    )
                );
        
        if($validator->fails()){
            return Redirect::route('lessons')
                    ->withErrors($validator)
                    ->withInput();
        }else{
	
		$file = Input::file('file'); // your file upload input field in the form should be named 'file'
                $description = Input::get('description');
      		$username = Auth::user()->username;
                $destinationPath = 'uploads/admin';
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
		 $filePath = $destinationPath.'/'.$filename;
                 
		if( $uploadSuccess ) {
                    $files = new Lessons;
                    $files->lesson = $filePath;
                    $files->admin = $username;
                    $files->description = $description;
                    $files->save();
                   //$getFiles = $files->where('admin', '=', $username)->get();
                       return Redirect::route('lessons')
                       ->with('global',trans('home.successfully')); // or do a redirect with some message that file was uploaded
                                    
		} else {
		   return Redirect::route('lessons')
                       ->with('global',trans('home.unable'));
		}
	}
    }
    
    
    public function downloadLesson($id){
        
        $lesson = Lessons::where('id','=', $id)->first();
            $files_path = $lesson->lesson;
             if (file_exists($files_path)) {
                 
             
        return Response::download($files_path, basename($files_path));
        
      }
       else{
        return Redirect::route('lessons')
                       ->with('global',trans('home.unable_download'));
      }
    }
    
    public function deleteLesson($id){
        $lesson = Lessons::find($id);
            return View::make('admin.dellesson', array('id' =>$id));
    }

        public function handleDeleteLesson($id){
               $lesson = Lessons::find($id);
               if(Auth::check()){
               if(Auth::user()->role){
               File::delete($lesson->lesson);
               $lesson->delete();
               if(File::exists($lesson->lesson)){
                   return Redirect::route('lessons')
                       ->with('global',trans('home.unable_delete'));
               }else{
                  return Redirect::route('lessons')
                       ->with('global',trans('home.deleted')); 
               }
           }  else{
               return Redirect::route('lessons')
                       ->with('global',trans('home.only_administrator'));
           } 
               }else{
           return Redirect::route('lessons')
                       ->with('global',trans('home.only_administrator'));
               }
    }
    
}
