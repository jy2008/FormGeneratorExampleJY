<?php

namespace UserFrosting\Sprinkle\FormGeneratorExampleJY\Database\Models;

use UserFrosting\Sprinkle\Core\Database\Models\Model;

class Project extends Model {


     //* @var string The name of the table for the current model.

    protected $table = "project";

    protected $fillable = [

        "id",
        "user_id",
        "name",
        "type",
        "owner",
        "description",
        "status",
        "completion",
        "active",
        "type1",
        "cs1",
        "cs11",
        "type2",
        "cs2",
        "cs21"
    ];


   //  * Directly joins the related user, so we can do things like sort, search, paginate, etc.

    public function scopeJoinUser($query)
    {
        $query = $query->select('project.*');

        $query = $query->leftJoin('users', 'project.user_id', '=', 'users.id');

        return $query;
    }


    // * Get the user associated with this owler.

    public function user()
    {
        //** @var UserFrosting\Sprinkle\Core\Util\ClassMapper $classMapper
        $classMapper = static::$ci->classMapper;

        return $this->belongsTo($classMapper->getClassMapping('user'), 'user_id');
    }
}
