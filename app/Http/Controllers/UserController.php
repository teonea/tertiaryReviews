<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct() {

		$this->middleware('auth');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$page = 'Admin Control';
		$description = 'Admin Control over Tertiary Reviews NZ website.';
		$keywords = 'reviews';

		return view('user.index', compact('user', 'page', 'description', 'keywords'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$page = 'Register';
		$description = 'Register another admin user.';
		$keywords = 'register Tertiary reviews';

		return view('auth/register', compact('page', 'description', 'keywords'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		User::create($request->all());

		return redirect('user');
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

		$page = 'Edit Details';
		$description = 'Edit admin user details.';
		$keywords = 'edit user details, tertiary reviews';

		$user = User::findOrFail($id);

		return view('user.edit', compact('user', 'page', 'description', 'keywords'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id , UserRequest $request)
	{
		$user = User::findOrFail($id);

		$user->update($request->all());

		session()->flash('flash_message', 'Profile successfully edited!');
		return redirect('user');
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
