<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answers\Answers;
use App\Models\Questions\Questions;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count =  Answers::where('question_id', $request->question_id)->count();
        if($count <= 3) {
            $answer = new Answers();
            $answer->question_id = $request->question_id;
            $answer->answer = $request->answer;
            $answer->save();

            return response()->json([
                'answer' => $answer,
                'question' => $count
            ]);
        } else {
            return response()->json([
                'message' => "qua so cau tra loi",
                'count'=> $count
            ]);
        }
             
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
