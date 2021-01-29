<?php

namespace App\Controllers\Api;

class Users
{
    /**
     * @params optional
     */
    public function getIndex($id)
    {
        if ($id) {
            $user = app()->db()->get('user', $id);
            $user->meta = json_decode($user->meta, true);
            return json_encode($user);
        }

        $users = app()->db()->get('user');
        foreach ($users as $user) {
            $user->meta = \json_decode($user->meta, true);
        }
        return $users;
    }

    public function putIndex($id)
    {
        if ($id) {
            $user = app()->db()->get('user', $id);
            $user = app()->db()->BindRequest($user);
            $user->meta = \json_encode($user->meta);
            app()->db()->save($user);
            $user->meta = \json_decode($user->meta);

            return json_encode($user);
        }
    }

    public function deleteIndex($id)
    {
        if ($id) {
            $user = app()->db()->get('user', $id);
            app()->db()->delete($user);
            return '{
		 "code": 200,
		 "message": "user successfully deleted"
		}';
        }
    }

    /**
     * @params optional
     */
    public function postIndex()
    {
        $user = app()->db()->bindRequest('user');
        $user->meta = \json_encode($user->meta);
        $id = app()->db()->save($user);

        return '{
		 "code": 201,
		 "message": "user successfully created"
		}';
    }
}
