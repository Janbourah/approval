<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Suggestion;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            $post = Suggestion::where('post_status', '=', 'active')->get();


            if ($usertype == 'user') {
                return view('home.homepage', compact('post'));
            } else if ($usertype == 'admin') {
                return view('admin.post_page');
            } else {
                return redirect()->back();
            }
        }
    }


    public function homepage()
    {

        $post = Suggestion::where('post_status', '=', 'active')->get();

        return view('home.homepage', compact('post'));
    }

    public function post_details($id)
    {

        $post = Suggestion::find($id);


        return view('home.post_details', compact('post'));
    }


    public function create_post()
    {
        return view('home.create_post');
    }


    public function user_post(Request $request)
    {

        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;


        $post = new Suggestion;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;
        $post->post_status = 'pending';
        $post->save();

        return redirect()->back();
    }
}
