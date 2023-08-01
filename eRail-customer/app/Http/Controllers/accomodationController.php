<?php

namespace App\Http\Controllers;
use app\Models\accomodaton;
use Illuminate\Http\Request;

class accomodationController extends Controller
{
    public function serachPlace(Request $request){
      $search = $request-> search;

      $posts = Post::where(function($query) use ($search){

        $query->where('station','like',"%$search%");
        
      });
    }


    public function searchL(Request $request)
    {
        if($request ->isMethod('post'))
        {
            $name=$request->get('search');
            $lesson=accomodaton::where('Distance from railway station', 'LIKE', '%'. $name .'%');
            //->where('subject','Math');
            //$file=Lesson::where( 'grade','LIKE', '%', '$name', '%')->paginate(5);
           
        }
        return view('filterAccomodation', compact('lesson'));  
    }


    

}
