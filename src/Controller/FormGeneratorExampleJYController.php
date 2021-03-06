<?php
/**
 * FormGenerator Example (https://github.com/lcharette/UF_FormGeneratorExample)
 *
 * @author Louis Charette
 * @link https://github.com/lcharette
 */
namespace UserFrosting\Sprinkle\FormGeneratorExampleJY\Controller;

use Interop\Container\ContainerInterface;
use UserFrosting\Fortress\RequestDataTransformer;
use UserFrosting\Fortress\RequestSchema;
use UserFrosting\Fortress\ServerSideValidator;
use UserFrosting\Fortress\Adapter\JqueryValidationAdapter;
use UserFrosting\Sprinkle\FormGeneratorJY\Form;
use UserFrosting\Support\Repository\Loader\YamlFileLoader;
use UserFrosting\Fortress\RequestSchema\RequestSchemaRepository;
use UserFrosting\Sprinkle\FormGeneratorExampleJY\Database\Models\Project;
use UserFrosting\Sprinkle\FormGeneratorExampleJY\Sprunje\FgClientSprunje;






/**
 * ProjectController Class
 *
 * Controller class for /formgenerator/* URLs.
 */
class FormGeneratorExampleJYController {

    /**
     * @var ContainerInterface The global container object, which holds all your services.
     */
    protected $ci;

    protected $projects;

    /**
     * Create a new ProjectController object.
     *
     * @param ContainerInterface $ci The main UserFrosting app.
     */
    public function __construct(ContainerInterface $ci) {
        $this->ci = $ci;

        // For demo purpose
        $this->projects = collect([
            [
                "id" => 1,
                "name" => "Foo project",
                "owner" => "Foo",
                "description" => "The foo project is awesome, but not available.",
                "status" => 0,
                "completion" => 100,
                "active" => false
            ],
            [
                "id" => 2,
                "name" => "Bar project",
                "owner" => "",
                "description" => "The bar project is less awesome, but at least it's open.",
                "status" => 1,
                "hiddenString" => "The Bar secret code is...",
                "completion" => 12,
                "active" => true
            ]
        ]);
    }

    /**
     * mainList function.
     * Used to display a list of all the projects this user have access to or can manage
     *
     * @access public
     * @param mixed $request
     * @param mixed $response
     * @param mixed $args
     * @return void
     */
    public function main($request, $response, $args){

        //$projects = Project::all();
        //$projects = $this->projects;

        $currentUser = $this->ci->currentUser;
        $projects = Project::where('user_id', $currentUser->id)->get();          
        $this->ci->view->render($response, 'pages/formgenerator.html.twig', [
           "projects" => $projects
        ]);
        
    }
    
    public function getProjects($request, $response, $args){
        // GET parameters
        $params = $request->getQueryParams();

        /** @var UserFrosting\Sprinkle\Core\Util\ClassMapper $classMapper */
        $classMapper = $this->ci->classMapper;

        $sprunje = new FgClientSprunje($classMapper, $params);

        $sprunje->extendQuery(function ($query) {
            return $query->where('user_id',$this->ci->currentUser->id);
        });

        return $sprunje->toResponse($response);
    }

    /**
     * viewForm function.
     */

    public function viewForm($request, $response, $args){

		    // Get the alert message stream
        $ms = $this->ci->alerts;

        // Request GET data
        $get = $request->getQueryParams();

        // Get the project to edit
        // This will typically be a databse query. We hardcode it here for demo purposes
        $project_id = $args['project_id'];
        $project = Project::find($project_id);

        // Load validator rules
        $schema = new RequestSchema("schema://forms/formgenerator.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);

        // Generate the form
        $form = new Form($schema, $project);        

        // Render the template / form
        $this->ci->view->render($response, "FormGeneratorJY/infoForm.html.twig", [
            "projects" => $project,
            "form_action" => "/formgenerator/".$args['project_id'],
            "form_method" => "PUT", //Send form using PUT instead of "POST"
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)

        ]);

    }




    /**
     * createForm function.
     * Renders the form for creating a new project.
     *
     * This does NOT render a complete page.  Instead, it renders the HTML for the form, which can be embedded in other pages.
     * The form is rendered in "modal" (for popup) or "panel" mode, depending on the template used
     *
     * @access public
     * @param mixed $request
     * @param mixed $response
     * @param mixed $args
     * @return void
     */
    public function createForm($request, $response, $args){

        // Get the alert message stream
        $ms = $this->ci->alerts;

        // Request GET data
        $get = $request->getQueryParams();

        // Load validator rules
        $schema = new RequestSchema("schema://forms/formgenerator.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);

        // Generate the form
        $form = new Form($schema);
        $form->setInputArgument("active", "checked", "checked"); 
        // Using custom form here to add the javascript we need fo Typeahead.
        $this->ci->view->render($response, "FormGeneratorJY/Calx.html.twig", [
            "box_id" => $get['box_id'],
            "box_title" => "Create project",
            "submit_button" => "Create",
            "form_action" => "/formgenerator",
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)
        ]);

    }

    /**
     * create function.
     * Processes the request to create a new project.
     *
     * @access public
     * @param mixed $request
     * @param mixed $response
     * @param mixed $args
     * @return void
     */
    public function create($request, $response, $args){

        // Get the alert message stream
        $ms = $this->ci->alerts;


        // Request POST data
        $post = $request->getParsedBody();

        // Load the request schema
        $schema = new RequestSchema("schema://forms/formgenerator.json");

        // Whitelist and set parameter defaults
        $transformer = new RequestDataTransformer($schema);
        $data = $transformer->transform($post);

        // Validate, and halt on validation errors.
        $validator = new ServerSideValidator($schema, $this->ci->translator);
        if (!$validator->validate($data)) {
            $ms->addValidationErrors($validator);
            return $response->withStatus(400);
        }

        // Create the item.
        // This is where the project would be saved to the database
        $currentUser = $this->ci->currentUser;
        $project = new Project($data);
        $project->user_id = $currentUser->id;
		$project->save();

        // Success message
        $ms->addMessageTranslated("success", "Project successfully created (or not)");
        $ms->addMessageTranslated("info", "The form data: <br />" . print_r($data, true));
        return $response->withStatus(200);

        \UserFrosting\Sprinkle\Core\Facades\Debug::debug("Owls found:", $post);
    }

    /**
     * editForm function.
     * Renders the form for editing an existing project.
     *
     * This does NOT render a complete page.  Instead, it renders the HTML for the form, which can be embedded in other pages.
     * The form is rendered in "modal" (for popup) or "panel" mode, depending on the template used
     *
     * @access public
     * @param mixed $request
     * @param mixed $response
     * @param mixed $args
     * @return void
     */
    public function editForm($request, $response, $args){

        // Get the alert message stream
        $ms = $this->ci->alerts;

        // Request GET data
        $get = $request->getQueryParams();

        // Get the project to edit
        // This will typically be a databse query. We hardcode it here for demo purposes
        //$project = $this->projects[$args['project_id'] - 1];
        $project_id = $args['project_id'];
        $project = Project::find($project_id);


        // Load validator rules
        $schema = new RequestSchema("schema://forms/formgenerator.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);

        // Generate the form
        $form = new Form($schema, $project);

        // Render the template / form
        $this->ci->view->render($response, "FormGeneratorJY/Calx.html.twig", [
            "box_id" => $get['box_id'],
            "box_title" => "Edit project",
            "submit_button" => "Edit",
            "form_action" => "/formgenerator/".$args['project_id'],
            "form_method" => "PUT", //Send form using PUT instead of "POST"
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)
        ]);
    }

    /**
     * update function.
     * Processes the request to update an existing project's details.
     *
     * @access public
     * @param mixed $request
     * @param mixed $response
     * @param mixed $args
     * @return void
     */
    public function update($request, $response, $args){

        // Get the alert message stream
        $ms = $this->ci->alerts;

        // Get the target object
        $project_id = $args['project_id'];
        $project = Project::find($project_id);
        //$project = $this->projects[$project_id];

        // Request POST data
        $post = $request->getParsedBody();

        // Load the request schema
        $schema = new RequestSchema("schema://forms/formgenerator.json");

        // Whitelist and set parameter defaults
        $transformer = new RequestDataTransformer($schema);
        $data = $transformer->transform($post);

        // Validate, and halt on validation errors.
        $validator = new ServerSideValidator($schema, $this->ci->translator);
        if (!$validator->validate($data)) {
            $ms->addValidationErrors($validator);
            return $response->withStatus(400);
        }

        // Update the project
        // This is where you would save the changes to the database...
        $project->fill($data);
		$project->save();

        //Success message!
        $ms->addMessageTranslated("success", "Project successfully updated (or not)");
        $ms->addMessageTranslated("info", "The form data: <br />" . print_r($data, true));
        return $response->withStatus(200);
    }


    /**
     * delete function.
     * Processes the request to delete an existing project.
     *
     * @access public
     * @param mixed $request
     * @param mixed $response
     * @param mixed $args
     * @return void
     */
    public function delete($request, $response, $args){

        // Get the alert message stream
        $ms = $this->ci->alerts;

        // Delete the project
        // This is where you would delete the project from the database
        $project_id = $args['project_id'];
        $project = Project::find($project_id);
        $project->delete();
        // Nice and simple message
        $ms->addMessageTranslated("success", "Project successfully deleted (or not)");
        return $response->withStatus(200);
    }
}
