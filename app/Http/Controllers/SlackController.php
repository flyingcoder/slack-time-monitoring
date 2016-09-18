<?php

namespace FlyingCoder\Http\Controllers;

use Illuminate\Http\Request;

use FlyingCoder\Http\Requests;

use SlackUser;

use App\Team;

class SlackController extends Controller
{

    public function index()
    {
    	dd(SlackUser::lists());
    }

    public function grabInfo(Request $request)
    {
    	$client = new \GuzzleHttp\Client();
    	$requests = $client->request('GET', "https://slack.com/api/oauth.access?client_id=".env('CLIENT_ID')."&client_secret=".env('CLIENT_SECRET')."&code=".$request->code);
    	$result = $requests->getBody();
    	$result = json_decode((string)$result);
    	
    }

    public function checkAuth(Request $request)
    {
    	dd($request);
    }
}
