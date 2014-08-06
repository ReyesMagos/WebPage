<?php

class IndexController extends Controller {

	public function getIndex(){

		return View::make("prueba");

	}


		public function postSendComment(){


			return Redirect::back()->with('status', 'ok');
	    }
}
