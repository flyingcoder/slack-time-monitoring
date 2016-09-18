<?php

namespace FlyingCoder\Http\Controllers;

use Illuminate\Http\Request;

use FlyingCoder\Http\Requests;

use SlackUser;

class SlackController extends Controller
{

    public function index()
    {
    	dd(SlackUser::lists());
    }

    public function grabInfo(Request $request)
    {
    	dd($request);
    }
}
