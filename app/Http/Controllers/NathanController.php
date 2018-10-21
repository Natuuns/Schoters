<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';


use App\User;
use App\Http\Controllers\Controller;

use GuzzleHttp;

class NathanController extends Controller
{
    private $apiResult;

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __construct() {
        $client = new GuzzleHttp\Client();
		$res = $client->get('https://private-90552-schoterspersonal.apiary-mock.com/categories');
		
        $array = json_decode( $res->getBody(), true);
        $this->apiResult = $array;
    }

    public function index(){
    	

    	return view('nathan');

        // return $this->apiResult;
        // return view('nathan')->with(['data' => $array ]);
        // return view('nathan')->with(['data' => $res->getBody()]);
    }

    public function show($id){
    	// return $id;
    	// return $this->apiResult[0]['id'][$id];
    	$temp = array();
    	foreach($this->apiResult as $api){
    		if($api['id'] == $id){
    			$temp = array(
    				"id" => $api['id'],
			        "name" => $api['name'],
			        "slug" => $api['slug'],
			        "description_eng" => $api['description_eng'],
			        "description_id" => $api['description_id'],
			        "created_at" => $api['created_at'],
			        "updated_at" => $api['updated_at'],
			        "published_at" => $api['published_at'],
			        "image_url" => $api['image_url']
    			);
    			// exit('a');
    		}else{
    			$temp = '';
    		}
    	}

    	return $temp;
    }
}