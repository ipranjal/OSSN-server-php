<?php

namespace App\Controllers\Api;

class Users
{
	/**
	 * @params optional
	 */
	public function getIndex($id)
	{
		if($id){

		return '{
		 "id": 10,
		 "name": "Pranjal Pandey",
		 "username": "physcocode",
		 "email": "pranjal@corpusvision.com",
		 "img": "exapmle.com/physcocode/profile.png",
		 "meta": {
		  "gender": "Male",
		  "city": "Mumbai",
		  "country": "India"
		 }
		}';
		}

		return '[
		 {
		  "id": 21,
		  "name": "Ellie D",
		  "username": "its_ellie",
		  "email": "ellie@gmail.com",
		  "img": "exapmle.com/ellie/profile.png",
		  "meta": {
		   "gender": "Female",
		   "city": "New York",
		   "country": "USA"
		  }
		 },
		 {
		  "id": 10,
		  "name": "Pranjal Pandey",
		  "username": "physcocode",
		  "email": "pranjal@corpusvision.com",
		  "img": "exapmle.com/physcocode/profile.png",
		  "meta": {
		   "gender": "Male",
		   "city": "Mumbai",
		   "country": "India"
		  }
		 },
		 {
		  "id": 10,
		  "name": "Vineet Singh",
		  "username": "Veneed",
		  "email": "vineet@corpusvision.com",
		  "img": "exapmle.com/veneed/profile.png",
		  "meta": {
		   "gender": "Male",
		   "city": "Mumbai",
		   "country": "India"
		  }
		 }
		]';
	}


	public function putIndex($id)
	{
		if($id){

		return '{
		 "id": 10,
		 "name": "Pranjal P",
		 "username": "physcocode",
		 "email": "pranjal@corpusvision.com",
		 "img": "exapmle.com/physcocode/profile.png",
		 "meta": {
		  "gender": "Male",
		  "city": "Mumbai",
		  "country": "India"
		 }
		}';
		}
	}


	public function deleteIndex($id)
	{
		if($id){

		return '{
		 "code": 200,
		 "message": "user successfully deleted"
		}';
		}
	}


	/**
	 * @params optional
	 */
	public function postIndex()
	{
		return '{
		 "code": 201,
		 "message": "user successfully created"
		}';
	}
}
