<?php

namespace App\Controllers\Api;

class Likes
{
	/**
	 * @params optional
	 */
	public function postIndex()
	{
		return '{
		 "code": 201,
		 "message": "Post successfully liked"
		}';
	}


	/**
	 * @params optional
	 */
	public function getIndex()
	{
		return '[
		 {
		  "id": 10,
		  "post": 13,
		  "owner": {
		   "id": 10,
		   "name": "Pranjal Pandey",
		   "username": "physcocoede",
		   "image": "example.com/physcocode/profile.png"
		  },
		  "created_at": "2017-07-21T17:32:28Z"
		 },
		 {
		  "id": 13,
		  "post": 13,
		  "owner": {
		   "id": 12,
		   "name": "Ellie D",
		   "username": "its_ellie",
		   "image": "example.com/ellie/profile.png"
		  },
		  "created_at": "2017-07-21T17:32:28Z"
		 },
		 {
		  "id": 23,
		  "post": 13,
		  "owner": {
		   "id": 15,
		   "name": "Vineet Singh",
		   "username": "vineed",
		   "image": "example.com/vineed/profile.png"
		  },
		  "created_at": "2017-07-21T17:32:28Z"
		 }
		]';
	}


	/**
	 * @params optional
	 */
	public function deleteIndex()
	{
		return '{
		 "code": 200,
		 "message": "Post successfully unliked"
		}';
	}
}
