<?php
namespace App\Http\Controllers\BoeApps;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\App;
use Session;

class indexController extends BoeAppsController {
	/**
	* Display a listing of the resource.
	* @return \Illuminate\Http\Response
	*/
	public function index() {
		$boeAppGroup = $this->getAppGroup();
		$boeApps = $this->getApps();
		//$file_upload = $this->getFiles();
		Session::put('boeAppGroup', $boeAppGroup);
		return view(
			'frontend.index',
			[
				'page' => 'home',
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

	private function getApps() {
		return $this->result = parent::apps();
	}

	public function launchApp(Request $request) {
		$x = array('x');
		dd($x);
		$apps = App::find($request->id);
		dd($apps);
		return redirect()->away($apps->app_link);
		//return redirect($apps->app_link);
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
