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
    public function Login_data(Request $request)
    {
        // dd($request->all());
        $username = $request['username'];
        $password = $request['password'];
        return view('Pages.Login_data', compact('username', 'password'));
    }

    public function Register()
    {
        return view('Pages.Register');
    }
    public function Register_data(Request $request)
    {
        // dd($_POST);
        // dd($request->all());
        $username = $request["username"];
        $fullname = $request["fullname"];
        $emailaddress = $request["emailaddress"];
        $password = $request["password"];
        return view('Pages.Register_data', compact('username', 'fullname', 'emailaddress', 'password'));
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
    public function Checkout_data(Request $request)
    {
        // dd($request->all());
        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $number = $request['number'];
        $country_name = $request['country_name'];
        $province = $request['province'];
        $address1 = $request['address1'];
        $address2 = $request['address2'];
        $Postal = $request['Postal'];
        $company_name = $request['company_name'];

        return view('Shop.Checkout_data', compact('fname', 'lname', 'email', 'number', 'country_name', 'province', 'address1', 'address2', 'Postal', 'company_name'));
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
    public function Contact_data(Request $request)
    {
        // dd($request->all());
        // dd($request['email']);
        $name = $request['name'];

        $email = $request['email'];


        $subject = $request['subject'];


        $message = $request['message'];
        return view('Contact_data', compact('name', 'email', 'subject', 'message'));
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




    public function subscribe_data(Request $request)
    {
        $email = $request['email'];
        // dd($email);
        return view('subscribe_data', compact('email'));
    }
}
