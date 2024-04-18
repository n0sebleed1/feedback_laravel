<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|min:8',
            'email' => 'required|string|email',
            'product' => 'required|string',
            'rating' => 'required|string',
            'text' => 'required|string|min:8'
        ]);

        $feedback = Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'product' => $request->product,
            'rating' => $request->rating,
            'text' => $request->text
        ]);

        return redirect('/');
    }

    public function allData(){
        $feedback = new Feedback;
        return view('welcome', ['data' => $feedback -> orderBy('id', 'desc') -> get()]);
    }
}
