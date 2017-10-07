<?php
namespace UserFrosting\Sprinkle\FormGeneratorExampleJY\Sprunje;

use UserFrosting\Sprinkle\Core\Facades\Debug;
use UserFrosting\Sprinkle\Core\Sprunje\Sprunje;

use UserFrosting\Sprinkle\FormGeneratorExampleJY\Database\Models\Project;

class FgClientSprunje extends Sprunje
{
    protected $name = 'projects';

    protected $sortable = [
        'name',
        'completion'
    ];

    protected $filterable = [
        'name',
        'completion'
    ];

    /**
     * Set the initial query used by your Sprunje.
     */
    protected function baseQuery()
    {
        $instance = new Project();

        // Alternatively, if you have defined a class mapping, you can use the classMapper:
        // $instance = $this->classMapper->createInstance('owl');

        return $instance->newQuery();
    }

}
