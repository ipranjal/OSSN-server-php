<?php

namespace App\Controllers\Api;

class Comments
{
    public function deleteIndex($id)
    {
        if ($id) {
            $comment = app()->db()->get('comment', $id);
            app()->db()->delete($comment);
            return '{
		 "code": 200,
		 "message": "comment Successfuly Deleted"
		}';
        }
    }

    public function putIndex($id)
    {
        if ($id) {
            $comment = app()->db()->get('comment', $id);
            app()->db()->saveRequest($comment);
            $owner = app()->db()->get('user', $comment->owner);
            unset($owner->meta);
            $comment->owner = $owner;
            return $comment;
        }
    }

    /**
     * @params optional
     */
    public function postIndex()
    {
        app()->db()->saveRequest('comment');
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
        $post_id = request()->post_id;
        $comments = app()->db()->find('comment', 'WHERE post = ?', [$post_id]);
        foreach ($comments as $comment) {
            $owner = app()->db()->get('user', $comment->owner);
            unset($owner->meta);
            $comment->owner = $owner;
        }
        return $comments;

    }
}
