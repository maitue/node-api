<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = [
            "event1, 2020-12-31 00:00:00, 2021-01-01 23:59:59",
            "event2, 2021-02-10 00:00:00, 2021-02-01 23:59:59",
            "event3, 2021-02-11 00:00:00, 2021-02-16 10:00:00",
            "event4, 2020-02-14 00:00:00, 2021-02-14 23:59:59",
            "event5, 2020-02-15 00:00:00, 2021-02-01 23:59:59",
        ];
        $now = "2021-02-14 10:00:00";
        $even = [];
        foreach ($arr as $key => $value) {
            $time = explode(',', $value);
            $op_time = trim($time[1]);
            $cl_time = trim($time[2]);
            $d = date($op_time);
            if (date($op_time) < date(date($now)) && date($now) < date($cl_time)) {
                array_push($even, $time[0]);
            }
        }
        var_dump($even);
        return ($arr);
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
        //
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
