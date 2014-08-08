<?php

class IndexController extends Controller {

	public function getIndex(){

		return View::make("index");

	}


		public function postSendComment(){


			return Redirect::back()->with('status', 'ok');
	    }
}
