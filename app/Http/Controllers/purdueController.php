<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purdueController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index2');
    }


    public function About()
    {
        return view('About');
    }

    public function Course($id)
    {
        return view('Course' . $id)->with('id', $id);
    }

    // public function Course1(){
    //     view('Course1');
    // }

    // public function Course2(){
    //     view('Course2');
    // }



    // public function Course3(){
    //     view('Course3');
    // }

    public function Instractors($id = null)
    {
        if (is_null($id)) {
            return view('Pages.Instractors');
        } else {
            return view('Pages.Instractors_Single')->with('id', $id);
        }
    }

    public function Events($id = null)
    {
        if (is_null($id)) {
            return view('Pages.Events');
        } else {
            return view('Pages.Events_Single')->with('id', $id);
        }
    }

    public function Pricing()
    {
        return view('Pages.Pricing');
    }


    public function FAQ()
    {
        return view('Pages.FAQ');
    }



    public function Login()
    {
        return view('Pages.Login');
    }

    public function Register()
    {
        return view('Pages.Register');
    }

    public function Shop($id = null)
    {
        if (is_null($id)) {
            return view('Shop.Shop');
        } else {
            return view('Shop.Shop_Single')->with('id', $id);
        }
    }

    public function Cart()
    {
        return view('Shop.Cart');
    }
    public function Checkout()
    {
        return view('Shop.Checkout');
    }

    public function Blog($id = null)
    {
        if (is_null($id)) {
            return view('Blog.Blog');
        } else {
            return view('Blog.Blog_Single')->with('id', $id);
        }
    }
    public function Contact()
    {
        return view('Contact');
    }




    public function Courses1($id = null)
    {
        if (is_null($id)) {
            return view('Courses.Courses1');
        } else {
            return view('Courses.Courses_Single')->with('id', $id);
        }
    }
    public function Courses2($id = null)
    {
        if (is_null($id)) {
            return view('Courses.Courses2');
        } else {
            return view('Courses.Courses_Single')->with('id', $id);
        }
    }
    public function Courses3($id = null)
    {
        if (is_null($id)) {
            return view('Courses.Courses3');
        } else {
            return view('Courses.Courses_Single')->with('id', $id);
        }
    }
}
