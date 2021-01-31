<?php

namespace App\Controllers\Api;

class Messages
{
    /**
     * @params optional
     */
    public function postIndex()
    {
        $message = app()->db()->saveRequest('message');
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
        $room = app()->db()->saveRequest('messageroom');
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
        $rooms = app()->db()->find('messageroom', 'WHERE id = ?', [request()->id]);
        app()->db()->deleteAll($rooms);
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
        $messages = app()->db()->find('message', 'WHERE room = ?', [request()->room_id]);
        return $messages;
    }

    /**
     * @params optional
     */
    public function deleteIndex($id)
    {
        if ($id) {
            $message = app()->db()->get('message', $id);
            app()->db()->delete($message);

            return '{
		 "code": 200,
		 "message": "Successfully deleted message"
		}';
        }
        $messages = app()->db()->find('message', 'WHERE room = ?', [request()->room_id]);
        app()->db()->deleteAll($messages);

        return '{
		 "code": 200,
		 "message": "Successfully deleted message"
		}';
    }
}
