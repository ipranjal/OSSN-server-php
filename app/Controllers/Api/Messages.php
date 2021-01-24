<?php

namespace App\Controllers\Api;

class Messages
{
	/**
	 * @params optional
	 */
	public function postIndex()
	{
		return '{
		 "code": 200,
		 "message": "Message Successfully sent"
		}';
	}


	/**
	 * @params optional
	 */
	public function postRooms()
	{
		return '{
		 "code": 200,
		 "message": "Room successfully created"
		}';
	}


	/**
	 * @params optional
	 */
	public function deleteRooms()
	{
		return '{
		 "code": 200,
		 "message": "Successfully deleted room"
		}';
	}


	/**
	 * @params optional
	 */
	public function getIndex()
	{
		return '[
		 {
		  "id": 13,
		  "room": 1,
		  "owner": 12,
		  "created_at": "2017-07-21T17:32:28Z",
		  "message": "Hi"
		 },
		 {
		  "id": 16,
		  "room": 1,
		  "owner": 13,
		  "created_at": "2017-07-21T17:32:28Z",
		  "message": "Hey, wassup?"
		 },
		 {
		  "id": 18,
		  "room": 1,
		  "owner": 12,
		  "created_at": "2017-07-21T17:32:28Z",
		  "message": "I am good"
		 }
		]';
	}


	/**
	 * @params optional
	 */
	public function deleteIndex($id)
	{
		if($id){

		return '{
		 "code": 200,
		 "message": "Successfully deleted message"
		}';
		}

		return '{
		 "code": 200,
		 "message": "Successfully deleted message"
		}';
	}
}
