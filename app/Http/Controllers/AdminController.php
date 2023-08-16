<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }


    public function add_post(Request $request)
    {

        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;


        $post = new Suggestion;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';

        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

        $post->save();

        return redirect()->back()->with('message', 'Suggestion added successfully');
    }


    public function show_post()
    {
        $post = Suggestion::all();

        return view('admin.show_post', compact('post'));
    }


    public function delete_post($id)
    {
        $post = Suggestion::find($id);

        $post->delete();

        return redirect()->back()->with('message', 'post deleted successfully');
    }

    public function accept_post($id)
    {
        $data = Suggestion::find($id);
        $data->post_status = 'active';
        $data->save();
        return redirect()->back();
    }

    public function reject_post($id)
    {
        $data = Suggestion::find($id);
        $data->post_status = 'rejected';
        $data->save();
        return redirect()->back();
    }
}
