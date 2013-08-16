<?php

class DashboardController extends Controller {
	
	public function showWelcome()
	{
		return View::make('Dashboard');
	}

}