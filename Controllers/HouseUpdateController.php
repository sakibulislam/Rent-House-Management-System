<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateHouseRequest;
use Illuminate\Support\Facades\Input; 
use Illuminate\Http\Request;
use App\House;
use App\User;


class HouseUpdateController extends Controller
{
     public function index(){

    	$data= House::all();
		return view('house_update')->with('data',$data);
    }

    public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateHouseRequest $request)
	{
		$data=[
			   'house_id'=>Input::get('house_id'),
			   'house_type'=>Input::get('house_type'),
			   'house_status'=>'available',
			   'address'=>Input::get('address'),
			   'city'=>Input::get('city'),
			   'area'=>Input::get('area'),
			   'cost'=>Input::get('cost'),
			   'flat_number'=>Input::get('flat_number'),
			   ];
		$response=House::create($data);
		if ($response) 
		{
			return redirect()->back()->with('success', 'House stored successfully');  
		}
	}

	
	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		$data= House::find($id);
		return view('house_edit')->with('data',$data);
	}

	
	public function update(CreateHouseRequest $request, $id )
	{
		$data=[
			   'house_id'=>Input::get('house_id'),
			   'house_type'=>Input::get('house_type'),
			   'house_status'=>Input::get('status'),
			   'address'=>Input::get('address'),
			   'city'=>Input::get('city'),
			   'area'=>Input::get('area'),
			   'cost'=>Input::get('cost'),
			   'flat_number'=>Input::get('flat_number'),
			   ];
		$response=House::find($id)->update($data );
		if ($response) 
		{
			return redirect('/updatehouse');  
		}
	}

	
	public function destroy( $id)
	{

		$response=House::find($id)->delete();
		if($response){

			return redirect('/updatehouse');
		}
	}

}
