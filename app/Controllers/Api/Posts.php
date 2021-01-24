<?php

namespace App\Controllers\Api;

class Posts
{
    /**
     * @params optional
     */
    public function getIndex($id)
    {
        if (false) {

            return '{
		 "id": 13,
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
		}';
        }

        return '[
		 {
		  "id": 13,
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
		 {
		  "id": 19,
		  "type": "Text",
		  "owner": {
		   "id": 10,
		   "name": "Pranjal Pandey",
		   "username": "physcocoede",
		   "image": "example.com/physcocode/profile.png"
		  },
		  "created_at": "2017-07-21T17:32:28Z",
		  "visibility": "public",
		  "meta": {
		   "status": "I am a example of text status update !"
		  },
		  "like_count": 22,
		  "comment_count": 4
		 },
		 {
		  "id": 33,
		  "type": "Video",
		  "owner": {
		   "id": 12,
		   "name": "Vineet Singh",
		   "username": "vineed",
		   "image": "example.com/vineed/profile.png"
		  },
		  "created_at": "2017-07-21T17:32:28Z",
		  "visibility": "public",
		  "meta": {
		   "status": "I am a example of text status update !",
		   "video": "example.com/video.mp4"
		  },
		  "like_count": 22,
		  "comment_count": 4
		 },
		 {
		  "id": 23,
		  "type": "Slideshow",
		  "owner": {
		   "id": 12,
		   "name": "Vineet Singh",
		   "username": "vineed",
		   "image": "example.com/vineed/profile.png"
		  },
		  "created_at": "2017-07-21T17:32:28Z",
		  "visibility": "public",
		  "meta": {
		   "status": "I am a example of slideshow update !",
		   "image": [
		    "example.com/image1.png",
		    "example.com/image2.png",
		    "example.com/image3.png"
		   ]
		  },
		  "like_count": 28,
		  "comment_count": 9
		 }
		]';
    }

    public function deleteIndex($id)
    {
        if ($id) {

            return '{
		 "code": 200,
		 "message": "post successfully deleted"
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
		 "message": "post successfully created"
		}';
    }
}
