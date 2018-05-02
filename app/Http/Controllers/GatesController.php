<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use Illuminate\Support\Facades\Auth;

class GatesController extends Controller
{
    public function EditQuestions(User $user, Question $question)
    {
        return (Auth::user()-> id == $question -> user_id);


    }
}
