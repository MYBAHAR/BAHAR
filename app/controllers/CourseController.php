<?php

class CourseController extends \BaseController {

	// Constructor
	public function __construct(){
		$this->beforeFilter('auth', array('only' => array('index', 'create', 'edit', 'update', 'destroy', 'show', 'store')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Retrieve and show all courses in the system
		$courses = Course::all();

		// Load the view and pass the courses
		return View::make('teach.courses.index')->with('courses', $courses);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Load the view to create a new course
		return View::make('teach.courses.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate and store the new course into DB
		$rules = array(
			'title' => 'required|max:255',
			'description' => 'required|max:1024',
			'image' => 'max:10000',
			'fee' => 'numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// Check for the image type
		$mimes = array('image/gif', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp');
		$uploadedMime = Input::file('image')->getMimeType();

		if(!in_array($uploadedMime, $mimes)){
			return Redirect::to('teach/courses/create')
				->withErrors('The image must be a file of type: jpg, jpeg, png, gif, bmp');
		}
		// Implement the validation
		if($validator->fails()){
			return Redirect::to('teach/courses/create')
				->withErrors($validator);
		} else {
			// Store
			$course = new Course;
			$course->author_id = Input::get('author_id');
			$course->title = Input::get('title');
			$course->description = Input::get('description');
			$course->fee = Input::get('fee');
			$course->image = Input::get('image');

			$saved = $course->save();

			if($saved){
				if(Input::hasFile('image')){
					$file 					= Input::file('image');
					$path 					= public_path() . '/img/courses/';
					$filename 			= str_random(6) . '_' . $file->getClientOriginalName();
					$uploadSuccess	= $file->move($path, $filename);
				}
			} else {
				Session::flash('message', 'Course creating failed');
				return Redirect::to('/teach/courses');
			}

			// Redirect with success message
			Session::flash('message', 'Course created successfully');
			return Redirect::to('/teach/courses');
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
