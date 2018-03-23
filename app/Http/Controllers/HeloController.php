<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaravelList;

class HeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$id = $request->id;
		$data = LaravelList::where('id', $id)->get();
		return view('helo', ['message' => 'MyTable List','data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = "you typed: " . $request->input('str');
        return view('helo', ['message' => $res]);
    }
	
	public function getNew(Request $request)
    {
		return view('new', ['message' => 'MyTable Create']);
    }
	
	public function postNew(Request $request)
    {
		$name = $request->input('name');
		$mail = $request->input('mail');
		$age = $request->input('age');
		$data = array(
			'name' => $name,
			'mail' => $mail,
			'age' => $age
		);
		LaravelList::create($data);
		return redirect()->action('HeloController@index');
    }
	
	public function getUpdate(Request $request)
    {
		$id = $request->id;
		$data = LaravelList::find($id);
		$msg = 'MyTable Update [id = ' . $id . ']';
		return view('update', ['message' => $msg,'data' => $data]);
    }
	
	public function postUpdate(Request $request)
    {
		$id = $request->input('id');
		$data = LaravelList::find($id);
		$data->name = $request->input('name');
		$data->mail = $request->input('mail');
		$data->age = $request->input('age');
		$data->save();
		return redirect()->action('HeloController@index',['id' => $id]);
    }
}
