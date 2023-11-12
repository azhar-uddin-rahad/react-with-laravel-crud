<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class UserPostController extends Controller
{
    public function index(){
       $students = Post :: all();
       if($students-> count() > 0){
        return response()->json([
            'status'=> "200",
            'msg' => $students
        ],200);
       }
    }

    public function create(request $request){
      
        $validator=Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required'
        ]);
        if($validator ->fails()){
            return response()->json([
                'status' => '422',
                'error' => $validator->errors()

            ]);
        }
        else{
            $model= new Post();
            $model ->title =$request -> title;
            $model -> description=$request->description;
            $model ->create([
                'title'=> $request -> title,
                'description' => $request-> description

            ]);
            return response()->json([
                'status'=> "200",
                'msg' => "Post Added Successful"
            ]);
        }


    }
    public function show($id){
        $student = Post::find($id);
        if($student){
            return response()->json([
                'status'=> "200",
                'msg' => $student
            ],200);
        }
        else{
            return response()->json([
                'status'=> "404",
                'msg' => "No Student Found"
            ],404);
        }
    }
}
