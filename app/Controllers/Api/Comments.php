<?php

namespace App\Controllers\Api;

class Comments
{
	public function deleteIndex($id)
	{
		if($id){

		return '{
		 "code": 200,
		 "message": "comment Successfuly Deleted"
		}';
		}
	}


	public function putIndex($id)
	{
		if($id){

		return '{
		 "id": 23,
		 "post": 32,
		 "owner": 10,
		 "body": "The updated comment",
		 "created_at": "2017-07-21T17:32:28Z"
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
		 "message": "comment Successfuly Added"
		}';
	}


	/**
	 * @params optional
	 */
	public function getIndex()
	{
		return '[
		 {
		  "id": 23,
		  "post": 32,
		  "owner": {
		      "id":10,
		      "name": "Pranjal Pandey",
		      "username": "physcocode",
		      "img": "example.com/physcocode/profile.png"

		  },
		  "body": "I like this post",
		  "created_at": "2017-07-21T17:32:28Z"
		 },
		 {
		  "id": 24,
		  "post": 32,
		  "owner": {
		      "id":14,
		      "name": "Vineet Singh",
		      "username": "vineed",
		      "img": "example.com/vineed/profile.png"

		  },
		  "body": "This post seems great",
		  "created_at": "2017-07-21T17:32:28Z"
		 },
		 {
		  "id": 25,
		  "post": 32,
		  "owner":{
		      "id":12,
		      "name": "Ellie D",
		      "username": "its_ellie",
		      "img": "example.com/ellie/profile.png"

		  },
		  "body": "Hahah this is funny",
		  "created_at": "2017-07-21T17:32:28Z"
		 }
		]';
	}
}
