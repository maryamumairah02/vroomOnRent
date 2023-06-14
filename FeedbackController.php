<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    function getData()
    {   
      return Feedback::all();
    }

    public function feedback_form(Request $request)
    {
        $feedbacks = new Feedback();
        $feedbacks->ratings = $request->input('ratings');
        $feedbacks->comments = $request->input('comments');
        $feedbacks->save();

        return redirect()->back()->with('success', 'Feedback sent.');
    }
}
