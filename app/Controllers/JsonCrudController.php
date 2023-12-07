<?php

namespace App\Controllers;

use CodeIgniter\Log\Logger;

class JsonCrudController extends BaseController {
	public function index(): string {
		return view('admin/d1/index');
	}
	
	function show() {
		try{
			return self::success("Ok", [1]);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
	
	function create(){
		try{
			return self::success("created", [1]);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
	
	function update() {
		try{
			return self::success("updated", [1]);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
	
	function delete() {
		try{
			return self::success("delete", [1]);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
}
