<?php

namespace App\Controllers\Api;

class Feeds
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
	public function getIndex()
	{
		return '[
		 {
		  "id": 12,
		  "owner": {
		   "id": 10,
		   "name": "Pranjal Pandey",
		   "username": "physcocode"
		  },
		  "action": "liked",
		  "object": {
		   "id": 10,
		   "type": "Image",
		   "owner": {
		    "id": 10,
		    "name": "Pranjal Pandey",
		    "username": "physcocoede",
		    "image": "example.com/physcocode/profile.png"
		   },
		   "created_at": "2017-07-21T17:32:28Z",
		   "visibility": "public",
		   "meta": {
		    "status": "I am a example status update with image",
		    "image": "example.com/image.png"
		   },
		   "like_count": 9,
		   "comment_count": 12
		  },
		  "type": "like"
		 },
		 {
		  "id": 13,
		  "owner": {
		   "id": 10,
		   "name": "Pranjal Pandey",
		   "username": "physcocode"
		  },
		  "action": "followed",
		  "object": {
		   "id": 12,
		   "name": "Vineet Singh",
		   "username": "vineed"
		  },
		  "type": "follow"
		 }
		]';
	}


	public function deleteIndex($id)
	{
		if($id){

		return '{
		 "code": 200,
		 "message": "Successfully deleted activity from feed"
		}';
		}
	}
}
