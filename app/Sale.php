<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sale';
    public $timestamps = false;

//    public function index()
//    {
//        $questions = Question::all();
//
//        return view('questions.index', ['questions' => $questions]);
//    }
}
