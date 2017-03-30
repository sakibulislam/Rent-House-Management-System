<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\House;
use Illuminate\Http\Request;
use Input;

class HouseController extends Controller {

	
	public function index()
	{
		$data= House::all();
		return view('house')->with('data',$data);
		
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
	public function store()
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
			return redirect()->back();  
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data= House::find($id);
		return view('house_edit')->with('data',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
