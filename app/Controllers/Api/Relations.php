<?php

namespace App\Controllers\Api;

class Relations
{
	/**
	 * @params optional
	 */
	public function postIndex()
	{
		return '{
		 "code": 201,
		 "message": "Relation successfully created"
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
		  "owner": 10,
		  "user": {
		   "id": 14,
		   "name": "Pranjal Pandey",
		   "username": "physcocoede",
		   "image": "example.com/physcocode/profile.png"
		  },
		  "type": "follow",
		  "bidirectional": false,
		  "created_at": "2017-07-21T17:32:28Z",
		  "meta": {}
		 },
		 {
		  "id": 13,
		  "owner": 10,
		  "user": {
		   "id": 12,
		   "name": "Ellie D",
		   "username": "its_ellie",
		   "image": "example.com/ellie/profile.png"
		  },
		  "type": "follow",
		  "bidirectional": false,
		  "created_at": "2017-07-21T17:32:28Z",
		  "meta": {}
		 },
		 {
		  "id": 23,
		  "owner": 10,
		  "user": {
		   "id": 15,
		   "name": "Vineet Singh",
		   "username": "vineed",
		   "image": "example.com/vineed/profile.png"
		  },
		  "type": "follow",
		  "bidirectional": false,
		  "created_at": "2017-07-21T17:32:28Z",
		  "meta": {}
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
		 "message": "Relation successfully removed "
		}';
	}
}
