<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller

{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public function index()
    {
        $sliderdata=Book::limit(7)->get();
        $categorydata=Category::limit(8)->get();
        $categoryList=Category::all();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'categorydata'=>$categorydata,
            'categoryList'=>$categoryList
        ]);



    }

    public function book($id)
    {

        $data = Book::find($id);
        $images=DB::table('images')->where('book_id',$id)->get();


        return view('home.book', [
            'data' => $data,
            'images'=>$images

        ]);


    }
    public function book_category($id){
        $bookList=Book::where('category_id',$id)->get();
        return view('home.book.booklist',['bookList'=>$bookList]);
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
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
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
