<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $sliderdata=Book::limit(7)->get();
        $categorydata=Category::limit(8)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'categorydata'=>$categorydata

        ]);
    }
    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function aboutus()
    {
        return view('home.about');
    }
    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        //return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "id number:",$id;
        echo "<br>Name:",$name;*/
    }


}
