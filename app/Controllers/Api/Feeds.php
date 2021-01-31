<?php

namespace App\Controllers\Api;

class Feeds
{
    /**
     * @params optional
     */
    public function postIndex()
    {
        $feed = app()->db()->saveRequest('feed');
        return '{
		 "code": 200,
		 "message": " New activity successfully added"
		}';
    }

    /**
     * @params optional
     */
    public function getIndex()
    {
        $feeds = app()->db()->get('feed');
        foreach ($feeds as $feed) {
            $owner = app()->db()->get('user', $feed->owner);
            unset($owner->meta);
            $feed->owner = $owner;
            if ($feed->type == 'like') {
                $object = app()->db()->get('post', $feed->object);
                $object->meta = json_decode($object->meta);
                $feed->object = $object;
            }
        }
        return $feeds;
    }

    public function deleteIndex($id)
    {
        if ($id) {
            $feed = app()->db()->get('feed', $id);
            app()->db()->delete($feed);
            return '{
		 "code": 200,
		 "message": "Successfully deleted activity from feed"
		}';
        }
    }
}
