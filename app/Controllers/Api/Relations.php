<?php

namespace App\Controllers\Api;

class Relations
{
    /**
     * @params optional
     */
    public function postIndex()
    {
        $relation = app()->db()->bindRequest('relation');
        $relation->meta = \json_encode($relation->meta);
        $id = app()->db()->save($relation);

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
        $relations = app()->db()->find('relation', 'WHERE owner = ?', [request()->user_id]);
        foreach ($relations as $relation) {
            $relation->meta = \json_decode($relation->meta, true);
        }
        return $relations;
    }

    /**
     * @params optional
     */
    public function deleteIndex()
    {
        $relations = app()->db()->find('relation', 'WHERE owner = ? AND user =? ', [request()->owner_id, request()->user_id]);
        app()->db()->deleteAll($relations);

        return '{
		 "code": 200,
		 "message": "Relation successfully removed "
		}';
    }
}
