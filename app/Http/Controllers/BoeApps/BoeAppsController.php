<?php
namespace App\Http\Controllers\BoeApps;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Session;

class BoeAppsController extends Controller {

	protected $result;
	protected $tmp;

	public function __construct() {
		$this->result = null;
		$this->tmp = null;
		return true;
	}

	protected function appGroup() {
		$this->result = DB::table('apps_group')->get();
		return $this->result;
	}

	protected function apps($app_id=array()) {
		if (count($app_id) <= 0) {
			$this->result = DB::table('apps')->get();
		} else {
			$this->result = DB::table('apps')->whereIn('id', $app_id)->get();
		}
		return $this->result;
	}

	protected function file_upload($apps_ref=array()) {
		if (count($apps_ref <= 0)) {
			$this->result = DB::table('downloads')->get();
		} else {
			$this->result = DB::table('downloads')->whereIn('apps_ref', $apps_ref)->get();
		}
		return $this->result;
	}

	protected function selectFile($file_id=0) {
		$this->result = DB::table('downloads')
			->where('id', $file_id)
			->get();
		return $this->result;
	}

	protected function updateCounterDownloadFile($file_id=0, $count_value=0) {
		DB::table('downloads')
			->where('id', $file_id)
			->update(['download' => $count_value]);
		return true;
	}


}
