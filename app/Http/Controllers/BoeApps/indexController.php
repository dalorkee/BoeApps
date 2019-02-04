<?php
namespace App\Http\Controllers\BoeApps;

use Illuminate\Http\Request;

class indexController extends BoeAppsController {
	/**
	* Display a listing of the resource.
	* @return \Illuminate\Http\Response
	*/
	public function index() {
		$boeAppGroup = $this->getAppGroup();
		$boeApps = parent::apps();
		return view(
			'frontend.index',
			[
				'boeAppGroup' => $boeAppGroup,
				'boeApps' => $boeApps
			]
		);
	}

	private function getAppGroup() {
		$appGroup = parent::appGroup();
		$boeAppGroup = $appGroup->keyBy('id');
		$boeAppGroup->all();
		return $boeAppGroup;
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
