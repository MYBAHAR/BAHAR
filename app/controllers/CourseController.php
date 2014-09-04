<?php

class CourseController extends Controller {

	/**
	 * This is the class for course creating functionalities, adding chapters,
	 * adding tests, mainting courses and chapters and etc.
	 *
	 * @return void
	 */
	
	public function __construct(){
		$this->beforeFilter('auth', array('only' => array('getCourses')));
	}

	public function getCourses(){
		
	}

}
