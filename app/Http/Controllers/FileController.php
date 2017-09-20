<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\rake;
use App\Http\Controllers\Controller;
use App\File;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use Redirect;

class FileController extends Controller
{
	public function index($request)
	{
		

		//return view('home');
	}
	public function save(Request $request)
	{
    	/*$this->validate($request, [
    	'file_path' => 'required|mimes:txt']);*/

    	$file= $request->file('file_path');
    	$extension = $request->file('file_path')->getClientOriginalExtension();
        //return $extension;

    	if($file = $request->hasFile('file_path')) {
    		$file = $request->file('file_path') ;
    		$fileName = $file->getClientOriginalName() ;
    		$destinationPath = public_path().'/files/' ;
    		$file->move($destinationPath,$fileName);
    	}
    	$file = new File;
    	$file->file_path = $fileName;
    	$file->save();
    	$file_id=$file->id;
    	$rake = new Rake('stoplist_smart.txt');
		$text = "Criteria of compatibility of a system of linear Diophantine equations, strict inequations, and nonstrict inequations are considered. Upper bounds for components of a minimal set of solutions and algorithms of construction of minimal generating sets of solutions for all types of systems are given.";
		$phrases = $rake->extract($text);
		//print_r($phrases);
		return view('result', compact('phrases'));
		//return $phrases;
    	/*return redirect()->action('FileController@index', ['id' => $file_id]);*/
    }
}
