<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone_number' => 'required|min:11',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:4',
            'role' => 'required',
        ]);

        $user = new User;
        $user->name = $req->name;
        $user->address = $req->address;
        $user->phone_number = $req->phone_number;
        $user->email = $req->email;
        $user->password = Hash::make($req->get('password'));
        $user->role = 'user';
        $user->save();

        return response()->json(['data'=>$user]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $user = User::where('name','LIKE','%'.$keyword.'%')->get();
        return view('admin.data-user', compact('user'));
        // dd($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        return view ('admin.add-user', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->address = $req->address;
        $user->phone_number = $req->phone_number;
        $user->email = $req->email;
        $user->password = Hash::make($req->get('password'));
        $user->role = $req->role;
        $user->save();
        
        if ($user) {
            return redirect('users');
        } else {
            return redirect()->back()->with('message', 'Gagal membuat akun, masukkan data dengan lengkap!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.edit-user', compact('user'));
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
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->no_hp = $request->no_hp;
        $user->gender = $request->gender;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->level = $request->level;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if ($user) {
            return redirect('users');
        } else {
            return redirect()->back()->with('message', 'Gagal membuat akun, masukkan data dengan lengkap!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::where('id', $id)->delete();
        return redirect('users');
    }
}
