<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    public function showComments($id)
    {
        $comments = User::find($id)->comments;

        return view('customer.showComments', ['comments' => $comments]);
        //return $comments;
        
    }
}
