<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



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
    	
    	$arr_cat = array(
    		array('name' => 'S1/Bachelor', 'slug'=>'s1-bachelor'),
    		array('name' => 'S2/Master', 'slug'=>'s2-master'),
    		array('name' => 'S3/Ph. D', 'slug'=>'s3-phd'),
    		array('name' => 'Short Courses', 'slug'=>'short-courses'),
    		array('name' => 'Degree', 'slug'=>'degree-scho'),
    		array('name' => 'Non-Degree', 'slug'=>'non-degree-scho'),
    		array('name' => 'Medical Degree', 'slug'=>'medical-degree'),
    		array('name' => 'Post Doctoral', 'slug'=>'post-doctoral'),
    		array('name' => 'Research', 'slug'=>'research'),
    		array('name' => 'Technology', 'slug'=>'technology'),
    		array('name' => 'Cv Writing', 'slug'=>'cv-writing'),
    		array('name' => 'Consultation', 'slug'=>'consultation'),
    		array('name' => 'Motivation Letter', 'slug'=>'motivation-letter'),
    		array('name' => 'Personalized Mentor', 'slug'=>'personalized-mentor'),
    		array('name' => 'Professional', 'slug'=>'professional'),
    		array('name' => 'IELTS Test', 'slug'=>'ielts-test'),
    		array('name' => 'TOEFL Test', 'slug'=>'toefl-test')
    	);

    	// return $arr_cat;
    	return view('page1')->with('category',$arr_cat);


        // return $this->apiResult;
        // return view('nathan')->with(['data' => $array ]);
        // return view('nathan')->with(['data' => $res->getBody()]);
    }

    public function show(Request $request){
    	$arr=explode(",",$request['selectedCat']);
    	// print_r($arr[0]);
    	// return $this->apiResult[0]['id'][$id];
    	$temp = array();
    	$n = count($arr);

    	for($i = 0;$i<$n;$i++){
	    	foreach($this->apiResult as $api){
	    		if($api['slug'] == $arr[$i]){
	    			// $asd .= $api['slug'];
	    			$push = array(
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
	    			// $temp[] = $push;
	    			array_push($temp, $push);
	    			// print_r($push);exit('a');
	    		}else{
	    			// $temp = '';
	    		}
	    	}
	    }	

    	return view('page2')->with('temp',$temp);
    }
}