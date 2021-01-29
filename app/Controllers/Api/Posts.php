<?php

namespace App\Controllers\Api;

class Posts
{
    /**
     * @params optional
     */
    public function getIndex($id)
    {
        if ($id) {
            $post = app()->db()->get('post', $id);
            $post->meta = json_decode($post->meta, true);
            $owner = app()->db()->get('user', $post->owner);
            unset($owner->meta);
            $post->owner = $owner;
            return json_encode($post);

        }

        $posts = app()->db()->get('post');
        foreach ($posts as $post) {
            $post->meta = json_decode($post->meta, true);
            $owner = app()->db()->get('user', $post->owner);
            unset($owner->meta);
            $post->owner = $owner;
        }

        return $posts;
    }

    public function deleteIndex($id)
    {
        if ($id) {
            $post = app()->db()->get('post', $id);
            app()->db()->delete($post);

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
        $post = app()->db()->bindRequest('post');
        $post->meta = \json_encode($post->meta);
        $id = app()->db()->save($post);

        return '{
		 "code": 201,
		 "message": "post successfully created"
		}';
    }
}
