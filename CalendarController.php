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
use UserFrosting\Sprinkle\FormGeneratorExampleJY\Database\Models\Calendar1;
use UserFrosting\Sprinkle\FormGeneratorExampleJY\Database\Models\Calendar2;
use UserFrosting\Support\Exception\ForbiddenException;




/**
 * ProjectController Class
 *
 * Controller class for /formgenerator/* URLs.
 */
class CalendarController {

    /**
     * @var ContainerInterface The global container object, which holds all your services.
     */
    protected $ci;

    public function __construct(ContainerInterface $ci) {
        $this->ci = $ci;
        // For demo purpose
        
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

        $currentUser = $this->ci->currentUser;
		
		$calendar1 = Calendar1::where('user_id', $currentUser->id)->first();
		$gm1Num1 = Calendar1::all()->sum('c1am_gm');
		$player1Num1 = Calendar1::all()->sum('c1am_player');
		$gm1Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num1 = Calendar1::all()->sum('c2am_gm');
		$player2Num1 = Calendar1::all()->sum('c2am_player');
		$gm2Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num1 = Calendar1::all()->sum('c3am_gm');
		$player3Num1 = Calendar1::all()->sum('c3am_player');
		$gm3Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num1 = Calendar1::all()->sum('c4am_gm');
		$player4Num1 = Calendar1::all()->sum('c4am_player');
		$gm4Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num1 = Calendar1::all()->sum('c5am_gm');
		$player5Num1 = Calendar1::all()->sum('c5am_player');
		$gm5Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num1 = Calendar1::all()->sum('c6am_gm');
		$player6Num1 = Calendar1::all()->sum('c6am_player');
		$gm6Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num1 = Calendar1::all()->sum('c7am_gm');
		$player7Num1 = Calendar1::all()->sum('c7am_player');
		$gm7Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num1 = Calendar1::all()->sum('c8am_gm');
		$player8Num1 = Calendar1::all()->sum('c8am_player');
		$gm8Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num1 = Calendar1::all()->sum('c9am_gm');
		$player9Num1 = Calendar1::all()->sum('c9am_player');
		$gm9Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num1 = Calendar1::all()->sum('c10am_gm');
		$player10Num1 = Calendar1::all()->sum('c10am_player');
		$gm10Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num1 = Calendar1::all()->sum('c11am_gm');
		$player11Num1 = Calendar1::all()->sum('c11am_player');
		$gm11Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num1 = Calendar1::all()->sum('c12pm_gm');
		$player12Num1 = Calendar1::all()->sum('c12pm_player');
		$gm12Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num1 = Calendar1::all()->sum('c1pm_gm');
		$player13Num1 = Calendar1::all()->sum('c1pm_player');
		$gm13Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num1 = Calendar1::all()->sum('c2pm_gm');
		$player14Num1 = Calendar1::all()->sum('c2pm_player');
		$gm14Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num1 = Calendar1::all()->sum('c3pm_gm');
		$player15Num1 = Calendar1::all()->sum('c3pm_player');
		$gm15Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num1 = Calendar1::all()->sum('c4pm_gm');
		$player16Num1 = Calendar1::all()->sum('c4pm_player');
		$gm16Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num1 = Calendar1::all()->sum('c5pm_gm');
		$player17Num1 = Calendar1::all()->sum('c5pm_player');
		$gm17Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num1 = Calendar1::all()->sum('c6pm_gm');
		$player18Num1 = Calendar1::all()->sum('c6pm_player');
		$gm18Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num1 = Calendar1::all()->sum('c7pm_gm');
		$player19Num1 = Calendar1::all()->sum('c7pm_player');
		$gm19Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num1 = Calendar1::all()->sum('c8pm_gm');
		$player20Num1 = Calendar1::all()->sum('c8pm_player');
		$gm20Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num1 = Calendar1::all()->sum('c9pm_gm');
		$player21Num1 = Calendar1::all()->sum('c9pm_player');
		$gm21Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num1 = Calendar1::all()->sum('c10pm_gm');
		$player22Num1 = Calendar1::all()->sum('c10pm_player');
		$gm22Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num1 = Calendar1::all()->sum('c11pm_gm');
		$player23Num1 = Calendar1::all()->sum('c11pm_player');
		$gm23Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num1 = Calendar1::all()->sum('c0pm_gm');
		$player24Num1 = Calendar1::all()->sum('c0pm_player');
		$gm24Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self1 = Calendar1::where([
			 ['user_id', $currentUser->id],
			 ['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		
        $this->ci->view->render($response, 'pages/calendar.html.twig', [
		   "calendar1" => $calendar1,	
           "gm1Num1" => $gm1Num1,
		   "player1Num1" => $player1Num1,
		   "gm1Self1" => $gm1Self1,
		   "player1Self1" => $player1Self1,
		   "gm2Num1" => $gm2Num1,
		   "player2Num1" => $player2Num1,
		   "gm2Self1" => $gm2Self1,
		   "player2Self1" => $player2Self1,
		   "gm3Num1" => $gm3Num1,
		   "player3Num1" => $player3Num1,
		   "gm3Self1" => $gm3Self1,
		   "player3Self1" => $player3Self1,
		   "gm4Num1" => $gm4Num1,
		   "player4Num1" => $player4Num1,
		   "gm4Self1" => $gm4Self1,
		   "player4Self1" => $player4Self1,
		   "gm5Num1" => $gm5Num1,
		   "player5Num1" => $player5Num1,
		   "gm5Self1" => $gm5Self1,
		   "player5Self1" => $player5Self1,
		   "gm6Num1" => $gm6Num1,
		   "player6Num1" => $player6Num1,
		   "gm6Self1" => $gm6Self1,
		   "player6Self1" => $player6Self1,
		   "gm7Num1" => $gm7Num1,
		   "player7Num1" => $player7Num1,
		   "gm7Self1" => $gm7Self1,
		   "player7Self1" => $player7Self1,
		   "gm8Num1" => $gm8Num1,
		   "player8Num1" => $player8Num1,
		   "gm8Self1" => $gm8Self1,
		   "player8Self1" => $player8Self1,
		   "gm9Num1" => $gm9Num1,
		   "player9Num1" => $player9Num1,
		   "gm9Self1" => $gm9Self1,
		   "player9Self1" => $player9Self1,
		   "gm10Num1" => $gm10Num1,
		   "player10Num1" => $player10Num1,
		   "gm10Self1" => $gm10Self1,
		   "player10Self1" => $player10Self1,
		   "gm11Num1" => $gm11Num1,
		   "player11Num1" => $player11Num1,
		   "gm11Self1" => $gm11Self1,
		   "player11Self1" => $player11Self1,
		   "gm12Num1" => $gm12Num1,
		   "player12Num1" => $player12Num1,
		   "gm12Self1" => $gm12Self1,
		   "player12Self1" => $player12Self1,
		   "gm13Num1" => $gm13Num1,
		   "player13Num1" => $player13Num1,
		   "gm13Self1" => $gm13Self1,
		   "player13Self1" => $player13Self1,
		   "gm14Num1" => $gm14Num1,
		   "player14Num1" => $player14Num1,
		   "gm14Self1" => $gm14Self1,
		   "player14Self1" => $player14Self1,
		   "gm15Num1" => $gm15Num1,
		   "player15Num1" => $player15Num1,
		   "gm15Self1" => $gm15Self1,
		   "player15Self1" => $player15Self1,
		   "gm16Num1" => $gm16Num1,
		   "player16Num1" => $player16Num1,
		   "gm16Self1" => $gm16Self1,
		   "player16Self1" => $player16Self1,
		   "gm17Num1" => $gm17Num1,
		   "player17Num1" => $player17Num1,
		   "gm17Self1" => $gm17Self1,
		   "player17Self1" => $player17Self1,
		   "gm18Num1" => $gm18Num1,
		   "player18Num1" => $player18Num1,
		   "gm18Self1" => $gm18Self1,
		   "player18Self1" => $player18Self1,
		   "gm19Num1" => $gm19Num1,
		   "player19Num1" => $player19Num1,
		   "gm19Self1" => $gm19Self1,
		   "player19Self1" => $player19Self1,
		   "gm20Num1" => $gm20Num1,
		   "player20Num1" => $player20Num1,
		   "gm20Self1" => $gm20Self1,
		   "player20Self1" => $player20Self1,
		   "gm21Num1" => $gm21Num1,
		   "player21Num1" => $player21Num1,
		   "gm21Self1" => $gm21Self1,
		   "player21Self1" => $player21Self1,
		   "gm22Num1" => $gm22Num1,
		   "player22Num1" => $player22Num1,
		   "gm22Self1" => $gm22Self1,
		   "player22Self1" => $player22Self1,
		   "gm23Num1" => $gm23Num1,
		   "player23Num1" => $player23Num1,
		   "gm23Self1" => $gm23Self1,
		   "player23Self1" => $player23Self1,
		   "gm24Num1" => $gm24Num1,
		   "player24Num1" => $player24Num1,
		   "gm24Self1" => $gm24Self1,
		   "player24Self1" => $player24Self1
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
        $ms = $this->ci->alerts;
		$currentUser = $this->ci->currentUser;
		$calendar1 = Calendar1::where('user_id', $currentUser->id)->first();
		if ($calendar1 != NULL) {
			$ms->addMessageTranslated("warning", "Already joined");
			return $response->withStatus(400);
        }
        $get = $request->getQueryParams();
        $schema = new RequestSchema("schema://forms/calendar.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);
        $form = new Form($schema);
		
        $this->ci->view->render($response, "FormGeneratorJY/CalxUpdate.html.twig", [
            "box_id" => $get['box_id'],
            "box_title" => "Join Game Session",
            "submit_button" => "Join",
            "form_action" => "/calendar",
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)
        ]);        
    }

    public function create($request, $response, $args){
        $ms = $this->ci->alerts;
        $post = $request->getParsedBody();
        $schema = new RequestSchema("schema://forms/calendar.json");
        $transformer = new RequestDataTransformer($schema);
        $data = $transformer->transform($post);
        $validator = new ServerSideValidator($schema, $this->ci->translator);
        if (!$validator->validate($data)) {
            $ms->addValidationErrors($validator);
            return $response->withStatus(400);
        }
        $currentUser = $this->ci->currentUser;
		
        $calendar1 = new Calendar1($data);
        $calendar1->user_id = $currentUser->id;
		$calendar1->save();

        $ms->addMessageTranslated("success", "Successfully joined");
        return $response->withStatus(200);        
    }
	
    public function editForm($request, $response, $args){
        $ms = $this->ci->alerts;
        $get = $request->getQueryParams();
		$currentUser = $this->ci->currentUser;       
        $calendar1 = Calendar1::where('user_id', $currentUser->id)->first();
		$calendar1_id = $args['calendar1_id'];
        $schema = new RequestSchema("schema://forms/calendar.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);
      
        $form = new Form($schema, $calendar1);

        $this->ci->view->render($response, "FormGeneratorJY/CalxUpdate.html.twig", [
            "box_id" => $get['box_id'],
            "box_title" => "Change",
            "submit_button" => "Change",
            "form_action" => "/calendar/".$args['calendar1_id'],
            "form_method" => "PUT", //Send form using PUT instead of "POST"
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)
        ]);       
    }
	     
    public function update($request, $response, $args){
        $ms = $this->ci->alerts;
		$currentUser = $this->ci->currentUser;
        $calendar1_id = $args['calendar1_id'];
        $calendar1 = Calendar1::where('user_id', $currentUser->id)->first();

        $post = $request->getParsedBody();
        $schema = new RequestSchema("schema://forms/calendar.json");
        $transformer = new RequestDataTransformer($schema);
        $data = $transformer->transform($post);
        $validator = new ServerSideValidator($schema, $this->ci->translator);
        if (!$validator->validate($data)) {
            $ms->addValidationErrors($validator);
            return $response->withStatus(400);
        }

        $calendar1->fill($data);
		$calendar1->save();

        $ms->addMessageTranslated("success", "Successfully updated");
        return $response->withStatus(200);
    }

    public function delete($request, $response, $args){
        $ms = $this->ci->alerts;
		$currentUser = $this->ci->currentUser;
        $calendar1_id = $args['calendar1_id'];
        $calendar1 = Calendar1::where('user_id', $currentUser->id)->first();
        $calendar1->delete();

        $ms->addMessageTranslated("success", "Successfully cancelled");
        return $response->withStatus(200);
    }
	
	public function createForm2($request, $response, $args){
        $ms = $this->ci->alerts;
        $get = $request->getQueryParams();
        $schema = new RequestSchema("schema://forms/calendar.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);
        $form = new Form($schema);
		
        $this->ci->view->render($response, "FormGeneratorJY/CalxUpdate.html.twig", [
            "box_id" => $get['box_id'],
            "box_title" => "Join Game Session",
            "submit_button" => "Join",
            "form_action" => "/calendar/2/new",
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)
        ]);        
    }

    public function create2($request, $response, $args){
        $ms = $this->ci->alerts;
        $post = $request->getParsedBody();
        $schema = new RequestSchema("schema://forms/calendar.json");
        $transformer = new RequestDataTransformer($schema);
        $data = $transformer->transform($post);
        $validator = new ServerSideValidator($schema, $this->ci->translator);
        if (!$validator->validate($data)) {
            $ms->addValidationErrors($validator);
            return $response->withStatus(400);
        }
        $currentUser = $this->ci->currentUser;
		
        $calendar2 = new Calendar2($data);
        $calendar2->user_id = $currentUser->id;
		$calendar2->save();

        $ms->addMessageTranslated("success", "Successfully joined");
        return $response->withStatus(200);        
    }
	
    public function editForm2($request, $response, $args){
        $ms = $this->ci->alerts;
        $get = $request->getQueryParams();
		
        $calendar2_id = $args['calendar2_id'];
        $calendar2 = Calendar1::find($calendar2_id);
		
        $schema = new RequestSchema("schema://forms/calendar.json");
        $validator = new JqueryValidationAdapter($schema, $this->ci->translator);
      
        $form = new Form($schema, $calendar2);

        $this->ci->view->render($response, "FormGeneratorJY/CalxUpdate.html.twig", [
            "box_id" => $get['box_id'],
            "box_title" => "Change",
            "submit_button" => "Change",
            "form_action" => "/calendar/2/".$args['calendar2_id'],
            "form_method" => "PUT", //Send form using PUT instead of "POST"
            "fields" => $form->generate(),
            "validators" => $validator->rules('json', true)
        ]);       
    }
	     
    public function update2($request, $response, $args){
        $ms = $this->ci->alerts;

        $calendar2_id = $args['calendar2_id'];
        $calendar2 = Calendar2::find($calendar2_id);

        $post = $request->getParsedBody();
        $schema = new RequestSchema("schema://forms/calendar.json");
        $transformer = new RequestDataTransformer($schema);
        $data = $transformer->transform($post);
        $validator = new ServerSideValidator($schema, $this->ci->translator);
        if (!$validator->validate($data)) {
            $ms->addValidationErrors($validator);
            return $response->withStatus(400);
        }

        $calendar2->fill($data);
		$calendar2->save();

        $ms->addMessageTranslated("success", "Successfully updated");
        return $response->withStatus(200);
    }

    public function delete2($request, $response, $args){
        $ms = $this->ci->alerts;

        $calendar2_id = $args['calendar2_id'];
        $calendar2 = Calendar2::find($calendar2_id);
        $calendar2->delete();

        $ms->addMessageTranslated("success", "Successfully cancelled");
        return $response->withStatus(200);
    }

	
	
	
	
	
}
