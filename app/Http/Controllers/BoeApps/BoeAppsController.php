<?php
namespace App\Http\Controllers\BoeApps;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class BoeAppsController extends Controller {

	protected $result;
	protected $tmp;

	public function __construct() {
		$this->result = null;
		$this->tmp = null;
		return true;
	}

	protected function appsGroup() {
		$this->result = DB::table('apps_group')->get();
		return $this->result;
	}

	protected function apps($app_id=array()) {
		if (count($app_id) > 0) {
			$this->result = DB::table('apps')->get();
		} else {
			$this->result = DB::table('apps')->whereIn('id', $app_id)->get();
		}
		return $this->result;
	}
}
