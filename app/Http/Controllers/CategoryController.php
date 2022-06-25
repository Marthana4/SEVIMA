<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $category = DB::table('categories')
                    ->leftJoin('users', 'categories.id', '=', 'users.id')
                    ->leftJoin('courses', 'categories.id_course', '=', 'courses.id_course')
                    ->select('*')
                    ->where('name','LIKE','%'.$keyword.'%')
                    ->where('course_title','LIKE','%'.$keyword.'%')
                    ->where('status','LIKE','%'.$keyword.'%')
                    ->get();

        return view('admin.data-category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category;
        $users= User::where('role','user')->get();
        $courses= Course::get();
        return view ('admin.add-category', compact('category','users','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Category;
        $model->id = $request->name;
        $model->id_course = $request->course_title;
        $model->save();

        return redirect('categories');
        // dd($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Category::find($id);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Category::where('id_category', $id)->delete();

        return redirect('categories');
    }
}
