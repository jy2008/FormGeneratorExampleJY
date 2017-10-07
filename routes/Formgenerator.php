<?php
/**
 * FormGenerator Example (https://github.com/lcharette/UF_FormGeneratorExample)
 *
 * @author Louis Charette
 * @link https://github.com/lcharette
 */

$app->group('/formgenerator', function () {
    /* LIST */
    $this->get('', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:main');
    /* VIEW */
    $this->get('/{project_id:[0-9]+}', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:viewForm');
    /* CREATE */
    $this->get('/new', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:createForm');
    $this->get('/magic/new', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:createForm1');
    $this->post('', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:create');


    /* EDIT */
    $this->get('/{project_id:[0-9]+}/edit', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:editForm');
    $this->put('/{project_id:[0-9]+}', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:update');
    /* DELETE */
    $this->delete('/{project_id:[0-9]+}', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:delete');

});

$app->group('/api', function () {
    /* LIST */
    $this->get('', 'UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller\FormGeneratorExampleJYController:getProjects');
});