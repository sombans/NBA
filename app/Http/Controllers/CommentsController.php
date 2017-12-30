<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CommandRecieved;
use App\Team;
use App\Comment;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function store($teamId)
    {

        $team = Team::find($teamId);

        $this->validate(request(), Comment::STORE_RULES);
        $comment = new Comment();
        $comment->content = request('content');
        $comment->team_id = $teamId;
        $comment->user_id = auth()->user()->id;
        $comment->save();


        return redirect()->route('single-team', ['id' => $teamId]);
    }
}
