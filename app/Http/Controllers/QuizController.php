<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        return view('index');
    }
    

    public function categories(){
        return view('quiz-categories');
    }

    public function show($categoryId){
        return view('quiz',['categoryId'=>$categoryId]);
    }
}

