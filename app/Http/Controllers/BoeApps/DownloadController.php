<?php

namespace App\Http\Controllers\BoeApps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Download;

class DownloadController extends BoeAppsController
{
	/*
	Display a listing of the resource.
	@return \Illuminate\Http\Response
	*/
	public function index(Request $request) {
		$file_icons = $this->fileIcons();
		$file_upload = $this->getFiles();
		$data = [
			'bannerId' => $request->id,
			'file_icons' => $file_icons,
			'file_upload' => $file_upload
		];
		return view('frontend.download', $data);
	}

	private function getFiles() {
		$files = parent::file_upload();
		$file_upload = $files->keyBy('id');
		$file_upload->all();
		return $file_upload;
	}

	public function downloadFile($file_id=null) {
		$collect = parent::selectFile($file_id);
		$filtered = $collect->where('id', $file_id);
		$currentCount = $filtered[0]->download;
		$countDownload = ((int)$currentCount+1);
		parent::updateCounterDownloadFile($file_id, $countDownload);
		$file_name = $filtered[0]->file_name;
		$path = 'public/file_upload/'.$file_name;
		return response()->download($path, $file_name);
	}

	private function fileIcons() {
		$icons = [
			'file'=>'fa fa-file-o',
			'code' => 'fa fa-file-code-o',
			'video' => 'fa fa-file-video-o',
			'audio' => 'fa fa-file-audio-o',
			'archive' => 'fa fa-archive-o',
			'image' => 'fa fa-image-o',
			'powerpoint' => 'fa fa-file-powerpoint-o',
			'excel' => 'fa fa-file-excel-o',
			'word' => 'fa fa-file-word-o',
			'pdf' => 'fa fa-file-pdf-o',
			'text' => 'fa fa-file-text-o'
		];
		return $icons;
	}

	/*
	Show the form for creating a new resource.
	@return \Illuminate\Http\Response
	*/
	public function create() {
		//
	}

	/*
	Store a newly created resource in storage.
	@param  \Illuminate\Http\Request  $request
	@return \Illuminate\Http\Response
	*/
	public function store(Request $request) {
		//
	}

	/*
	Display the specified resource.
	@param  int  $id
	@return \Illuminate\Http\Response
	*/
	public function show($id) {
		//
	}

	/*
	Show the form for editing the specified resource.
	@param  int  $id
	@return \Illuminate\Http\Response
	*/
	public function edit($id) {
		//
	}

	/*
	Update the specified resource in storage.
	@param  \Illuminate\Http\Request  $request
	@param  int  $id
	@return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id) {
		//
	}

	/*
	Remove the specified resource from storage.
	@param  int  $id
	@return \Illuminate\Http\Response
	*/
	public function destroy($id) {
		//
	}
}
