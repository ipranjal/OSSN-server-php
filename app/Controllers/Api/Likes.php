<?php

namespace App\Controllers\Api;

class Likes
{
    /**
     * @params optional
     */
    public function postIndex()
    {
        $like = app()->db()->saveRequest('like');
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
        $post_id = request()->post_id;
        $likes = app()->db()->find('like', 'WHERE post = ?', [$post_id]);
        foreach ($likes as $like) {
            $owner = app()->db()->get('user', $like->owner);
            unset($owner->meta);
            $like->owner = $owner;
        }
        return $like;

    }

    /**
     * @params optional
     */
    public function deleteIndex()
    {
        $post_id = request()->post_id;
        $user_id = request()->user_id;
        $likes = app()->db()->find('like', 'WHERE post = ? AND user=?', [$post_id, $user_id]);
        app()->db()->deleteAll($likes);
        return '{
		 "code": 200,
		 "message": "Post successfully unliked"
		}';
    }
}
