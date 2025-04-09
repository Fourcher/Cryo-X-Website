<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\ContactForm;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{


    public function users()
    {
        return view('admin.users');
    }

    public function orders()
    {
        return view('admin.orders');
    }


    public function blogs()
    {
        $blogs = Blog::all();
        return view('admin.blogs' , compact('blogs'));
    }   

    public function blog($blog)
    {

        $blog = Blog::find($blog);

        return view('admin.blog', compact('blog'));
    }

    public function createBlog()
    {
        return view('admin.create-blog');
    }

    public function order(Order $order)
    {
        return view('admin.order', compact('order'));
    }

    public function admins()
    {
        return view('admin.admins');
    }   

    public function contactUs()
    {
        // ContactForm
        $contactUs = ContactForm::all();
        return view("admin.contact-us", compact('contactUs'));

    }

        // Display the login form
        public function login()
        {
            return view('admin.login');
        }
    
        // Authenticate and redirect
        public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                // Check if user has administrator role
                if (Auth::user()->hasRole('administrator')) {
                    return redirect()->route('admin.users');
                } else {
                    Auth::logout();
                    return redirect()->route('admin.login')->withErrors(['Unauthorized.']);
                }
            }
    
            return redirect()->route('admin.login')->withErrors(['Login failed.']);
        }
    


}
