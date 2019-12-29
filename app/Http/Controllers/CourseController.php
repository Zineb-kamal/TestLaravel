<?php

namespace App\Http\Controllers;
use App\Http\Requests\courseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=DB::table('courses')->paginate(10);
        return view('Course.index',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('Course.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(courseRequest $request)
    {
        $course=Course::create($request->only(['category_id','name','description','slug']));
        $images= explode(",",$request->get('image'));
         //Upload Image
        $request->file('image')->store('images');
        foreach($images as $image)
        { Image::create([
                'imageable_type'=>'App\Course',
                'imageable_id'=>$course->id,
                'file_name'=>$image
           ]);
        }    
        return redirect('/Courses')->with('success','Course à été bien enregister');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Course::find($id);
        return view('Course.show',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::find($id);
        return view('Course.edit',['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category_id'=>'required|integer',
            'name'=>'required|Max:150',
            'slug'=>'required|Max:255'   
        ]);
    $course=Course::find($id);
    $course->category_id=$request->input('category_id');
    $course->name=$request->input('name');
    $course->description=$request->input('description');
    $course->slug=$request->input('slug');
    $course->save();
    return redirect('/Courses')->with('success','Course à été bien  Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course= Course::find($id);
        $course->delete();
        $image=new Image();
        $image->where('imageable_id',$id)->delete();
        return redirect('/Courses')->with('success','la suppression avec succée');
    }
}
