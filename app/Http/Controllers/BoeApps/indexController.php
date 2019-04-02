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
		$apps = $this->getApps();
		$boeApps = $this->appsRating($apps);
		Session::put('boeAppGroup', $boeAppGroup);
		return view(
			'frontend.index',
			[
				'page' => 'home',
				'boeApps' => $boeApps,
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
		$apps = App::find($request->id);
		$new_clicked = ((int)$apps->clicked+1);
		parent::updateAppClicked($request->id, $new_clicked);
		return redirect()->away($apps->app_link);
	}

	private function sumAppsClicked($boeApps=null) {
		$collect = $boeApps->map(function($item, $key) {
			return $item->clicked;
		});
		return $collect->sum();
	}



	private function appsRating($boeApps=null, $star=5) {
		$max = $boeApps->max('clicked');
		foreach($boeApps as $key=>$item) {
			$ratePercent = (($item->clicked*100)/$max);
			if ($ratePercent <= 30) {
				$rating = 1;
			} elseif ($ratePercent > 30 && $ratePercent <= 49) {
				$rating = 2;
			} elseif ($ratePercent > 49 && $ratePercent <= 69) {
				$rating = 3;
			} elseif ($ratePercent > 69 && $ratePercent <= 89) {
				$rating = 4;
			} elseif ($ratePercent >= 90) {
				$rating = 5;
			} else {
				$rating = 0;
			}
			$item->percent = $ratePercent;
			$item->rating = $rating;
		};
		return $boeApps;
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
