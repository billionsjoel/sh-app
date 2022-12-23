<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\Comments;
use App\Models\subscriptions;

class GuestController extends Controller
{
    public function subscribe(Request $request)
    {
        $subscribe = new subscriptions();

        $subscribe->email = request()->email;

        $subscribe->save();

        session()->flash('message', 'Your Email subscription is successfull! ✅ ');

        return redirect('/');
    }

    public function getMessages(Request $request)
    {
        $message            = new Messages();

        $message->name      = request()->name;
        $message->email     = request()->email;
        $message->phone     = request()->phone;
        $message->message   = request()->message;

        $message->save();



        return redirect('/');
    }

    public function postComment(Request $request, $id)
    {
        $comment = new Comments();

        $comment->bid = $id;

        $comment->username = request()->username;
        $comment->comment = request()->comment;

        $comment->save();

        return redirect()->back()->with('message', 'Comment posted! ✅ ');
    }
}
