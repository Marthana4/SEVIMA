<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $course = Course::where('course_title','LIKE','%'.$keyword.'%')->get();
        return view('admin.data-course', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new Course;
        return view ('admin.add-course', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $resorce       = $req->file('image');
        
        $namefile =  $resorce->getClientOriginalName();
            
        $model = new Course;
        $model->course_title = $req->course_title;
        $model->course_image = $namefile;
        $model->subject = $req->subject;
        $model->course_video = $req->course_video;
        $model->save();
        $resorce->move(\base_path() ."/public/images", $namefile);

        return redirect('courses');
        // dd($req->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Course::find($id);
        return Response()->json($model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Course::where('id_course', $id)->first();
        return view('admin.edit-course', compact('model'));
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
        $update=Course::find($id);
        $update->subject = $req->subject;
        $update->save();
        
        return redirect('courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Course::where('id_course', $id)->delete();

        return redirect('food-courses');
    }
}
