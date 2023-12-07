<?php

namespace App\Controllers;

use CodeIgniter\Log\Logger;

class D1Controller extends JsonCrudController{
	public function index(): string {
		return view('admin/d1/index');
	}

	function create(){
		try{
			$x = 1/0;
			return self::success("created", [$x]);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
}
