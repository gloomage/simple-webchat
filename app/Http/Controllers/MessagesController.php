<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Chat;

class MessagesController extends Controller
{
    public function index(Request $request)
    {
        event(new Chat(
            $request->input('username'),
            $request->input('message'),
        ));

        return true;
    }
}
