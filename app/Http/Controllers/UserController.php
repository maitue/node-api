<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\AccessToken;

class UserController extends Controller
{
    public function create_access_token(Request $request){
        $access_token = new AccessToken();
        $access_token->user_id = $request->user_id;
        $access_token->access_token =$request->access_token;
        $access_token->save();
        return response()->json([ 'access_token'=> $access_token]);
    }
}
