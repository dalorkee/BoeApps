<?php
namespace App\Http\Controllers\BoeApps;

use Illuminate\Http\Request;

class indexController extends BoeAppsController {
	/**
	* Display a listing of the resource.
	* @return \Illuminate\Http\Response
	*/
	public function index() {
		$appsGroup = $this->getAppsGroup();
		return view(
			'frontend.index',
			[
				'appsGroup'=>$appsGroup
			]
		);
	}

	private function getAppsGroup() {
		$this->result = parent::appsGroup();
		return $this->result;
	}

	/**
	* Show the form for creating a new resource.
	* @return \Illuminate\Http\Response
	*/
	public function create() {
		//
	}

	/**
	* Store a newly created resource in storage.
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request) {
		//
	}

	/**
	* Display the specified resource.
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function show($id) {
		//
	}

	/**
	* Show the form for editing the specified resource.
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id) {
		//
	}

	/**
	* Update the specified resource in storage.
	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id) {
		//
	}

	/**
	* Remove the specified resource from storage.
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id) {
		//
	}
}
