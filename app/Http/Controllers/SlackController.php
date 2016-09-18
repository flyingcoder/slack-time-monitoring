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
    	$client = new \GuzzleHttp\Client();
    	return $client->request('GET', 'https://slack.com/api/oauth.access', [
    		'client_id' => env('CLIENT_ID'),
    		'client_secret' => env('CLIENT_SECRET'),
    		'code' => $request->code,
    		'redirect_uri' => 'http://stm.vm/check-auth',
    		]);
    	
    }

    public function checkAuth(Request $request)
    {
    	
    }
}
