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
	    
	    	$calendar2 = Calendar2::where('user_id', $currentUser->id)->first();
		$gm1Num2 = Calendar2::all()->sum('c1am_gm');
		$player1Num2 = Calendar2::all()->sum('c1am_player');
		$gm1Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num2 = Calendar2::all()->sum('c2am_gm');
		$player2Num2 = Calendar2::all()->sum('c2am_player');
		$gm2Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num2 = Calendar2::all()->sum('c3am_gm');
		$player3Num2 = Calendar2::all()->sum('c3am_player');
		$gm3Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num2 = Calendar2::all()->sum('c4am_gm');
		$player4Num2 = Calendar2::all()->sum('c4am_player');
		$gm4Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num2 = Calendar2::all()->sum('c5am_gm');
		$player5Num2 = Calendar2::all()->sum('c5am_player');
		$gm5Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num2 = Calendar2::all()->sum('c6am_gm');
		$player6Num2 = Calendar2::all()->sum('c6am_player');
		$gm6Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num2 = Calendar2::all()->sum('c7am_gm');
		$player7Num2 = Calendar2::all()->sum('c7am_player');
		$gm7Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num2 = Calendar2::all()->sum('c8am_gm');
		$player8Num2 = Calendar2::all()->sum('c8am_player');
		$gm8Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num2 = Calendar2::all()->sum('c9am_gm');
		$player9Num2 = Calendar2::all()->sum('c9am_player');
		$gm9Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num2 = Calendar2::all()->sum('c10am_gm');
		$player10Num2 = Calendar2::all()->sum('c10am_player');
		$gm10Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num2 = Calendar2::all()->sum('c11am_gm');
		$player11Num2 = Calendar2::all()->sum('c11am_player');
		$gm11Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num2 = Calendar2::all()->sum('c12pm_gm');
		$player12Num2 = Calendar2::all()->sum('c12pm_player');
		$gm12Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num2 = Calendar2::all()->sum('c1pm_gm');
		$player13Num2 = Calendar2::all()->sum('c1pm_player');
		$gm13Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num2 = Calendar2::all()->sum('c2pm_gm');
		$player14Num2 = Calendar2::all()->sum('c2pm_player');
		$gm14Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num2 = Calendar2::all()->sum('c3pm_gm');
		$player15Num2 = Calendar2::all()->sum('c3pm_player');
		$gm15Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num2 = Calendar2::all()->sum('c4pm_gm');
		$player16Num2 = Calendar2::all()->sum('c4pm_player');
		$gm16Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num2 = Calendar2::all()->sum('c5pm_gm');
		$player17Num2 = Calendar2::all()->sum('c5pm_player');
		$gm17Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num2 = Calendar2::all()->sum('c6pm_gm');
		$player18Num2 = Calendar2::all()->sum('c6pm_player');
		$gm18Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num2 = Calendar2::all()->sum('c7pm_gm');
		$player19Num2 = Calendar2::all()->sum('c7pm_player');
		$gm19Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num2 = Calendar2::all()->sum('c8pm_gm');
		$player20Num2 = Calendar2::all()->sum('c8pm_player');
		$gm20Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num2 = Calendar2::all()->sum('c9pm_gm');
		$player21Num2 = Calendar2::all()->sum('c9pm_player');
		$gm21Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num2 = Calendar2::all()->sum('c10pm_gm');
		$player22Num2 = Calendar2::all()->sum('c10pm_player');
		$gm22Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num2 = Calendar2::all()->sum('c11pm_gm');
		$player23Num2 = Calendar2::all()->sum('c11pm_player');
		$gm23Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num2 = Calendar2::all()->sum('c0pm_gm');
		$player24Num2 = Calendar2::all()->sum('c0pm_player');
		$gm24Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self2 = Calendar2::where([
			 ['user_id', $currentUser->id],
			 ['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		
	    	$calendar3 = Calendar3::where('user_id', $currentUser->id)->first();
		$gm1Num3 = Calendar3::all()->sum('c1am_gm');
		$player1Num3 = Calendar3::all()->sum('c1am_player');
		$gm1Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num3 = Calendar3::all()->sum('c2am_gm');
		$player2Num3 = Calendar3::all()->sum('c2am_player');
		$gm2Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num3 = Calendar3::all()->sum('c3am_gm');
		$player3Num3 = Calendar3::all()->sum('c3am_player');
		$gm3Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num3 = Calendar3::all()->sum('c4am_gm');
		$player4Num3 = Calendar3::all()->sum('c4am_player');
		$gm4Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num3 = Calendar3::all()->sum('c5am_gm');
		$player5Num3 = Calendar3::all()->sum('c5am_player');
		$gm5Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num3 = Calendar3::all()->sum('c6am_gm');
		$player6Num3 = Calendar3::all()->sum('c6am_player');
		$gm6Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num3 = Calendar3::all()->sum('c7am_gm');
		$player7Num3 = Calendar3::all()->sum('c7am_player');
		$gm7Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num3 = Calendar3::all()->sum('c8am_gm');
		$player8Num3 = Calendar3::all()->sum('c8am_player');
		$gm8Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num3 = Calendar3::all()->sum('c9am_gm');
		$player9Num3 = Calendar3::all()->sum('c9am_player');
		$gm9Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num3 = Calendar3::all()->sum('c10am_gm');
		$player10Num3 = Calendar3::all()->sum('c10am_player');
		$gm10Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num3 = Calendar3::all()->sum('c11am_gm');
		$player11Num3 = Calendar3::all()->sum('c11am_player');
		$gm11Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num3 = Calendar3::all()->sum('c12pm_gm');
		$player12Num3 = Calendar3::all()->sum('c12pm_player');
		$gm12Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num3 = Calendar3::all()->sum('c1pm_gm');
		$player13Num3 = Calendar3::all()->sum('c1pm_player');
		$gm13Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num3 = Calendar3::all()->sum('c2pm_gm');
		$player14Num3 = Calendar3::all()->sum('c2pm_player');
		$gm14Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num3 = Calendar3::all()->sum('c3pm_gm');
		$player15Num3 = Calendar3::all()->sum('c3pm_player');
		$gm15Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num3 = Calendar3::all()->sum('c4pm_gm');
		$player16Num3 = Calendar3::all()->sum('c4pm_player');
		$gm16Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num3 = Calendar3::all()->sum('c5pm_gm');
		$player17Num3 = Calendar3::all()->sum('c5pm_player');
		$gm17Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num3 = Calendar3::all()->sum('c6pm_gm');
		$player18Num3 = Calendar3::all()->sum('c6pm_player');
		$gm18Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num3 = Calendar3::all()->sum('c7pm_gm');
		$player19Num3 = Calendar3::all()->sum('c7pm_player');
		$gm19Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num3 = Calendar3::all()->sum('c8pm_gm');
		$player20Num3 = Calendar3::all()->sum('c8pm_player');
		$gm20Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num3 = Calendar3::all()->sum('c9pm_gm');
		$player21Num3 = Calendar3::all()->sum('c9pm_player');
		$gm21Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num3 = Calendar3::all()->sum('c10pm_gm');
		$player22Num3 = Calendar3::all()->sum('c10pm_player');
		$gm22Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num3 = Calendar3::all()->sum('c11pm_gm');
		$player23Num3 = Calendar3::all()->sum('c11pm_player');
		$gm23Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num3 = Calendar3::all()->sum('c0pm_gm');
		$player24Num3 = Calendar3::all()->sum('c0pm_player');
		$gm24Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self3 = Calendar3::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar4 = Calendar4::where('user_id', $currentUser->id)->first();
		$gm1Num4 = Calendar4::all()->sum('c1am_gm');
		$player1Num4 = Calendar4::all()->sum('c1am_player');
		$gm1Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num4 = Calendar4::all()->sum('c2am_gm');
		$player2Num4 = Calendar4::all()->sum('c2am_player');
		$gm2Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num4 = Calendar4::all()->sum('c3am_gm');
		$player3Num4 = Calendar4::all()->sum('c3am_player');
		$gm3Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num4 = Calendar4::all()->sum('c4am_gm');
		$player4Num4 = Calendar4::all()->sum('c4am_player');
		$gm4Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num4 = Calendar4::all()->sum('c5am_gm');
		$player5Num4 = Calendar4::all()->sum('c5am_player');
		$gm5Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num4 = Calendar4::all()->sum('c6am_gm');
		$player6Num4 = Calendar4::all()->sum('c6am_player');
		$gm6Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num4 = Calendar4::all()->sum('c7am_gm');
		$player7Num4 = Calendar4::all()->sum('c7am_player');
		$gm7Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num4 = Calendar4::all()->sum('c8am_gm');
		$player8Num4 = Calendar4::all()->sum('c8am_player');
		$gm8Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num4 = Calendar4::all()->sum('c9am_gm');
		$player9Num4 = Calendar4::all()->sum('c9am_player');
		$gm9Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num4 = Calendar4::all()->sum('c10am_gm');
		$player10Num4 = Calendar4::all()->sum('c10am_player');
		$gm10Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num4 = Calendar4::all()->sum('c11am_gm');
		$player11Num4 = Calendar4::all()->sum('c11am_player');
		$gm11Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num4 = Calendar4::all()->sum('c12pm_gm');
		$player12Num4 = Calendar4::all()->sum('c12pm_player');
		$gm12Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num4 = Calendar4::all()->sum('c1pm_gm');
		$player13Num4 = Calendar4::all()->sum('c1pm_player');
		$gm13Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num4 = Calendar4::all()->sum('c2pm_gm');
		$player14Num4 = Calendar4::all()->sum('c2pm_player');
		$gm14Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num4 = Calendar4::all()->sum('c3pm_gm');
		$player15Num4 = Calendar4::all()->sum('c3pm_player');
		$gm15Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num4 = Calendar4::all()->sum('c4pm_gm');
		$player16Num4 = Calendar4::all()->sum('c4pm_player');
		$gm16Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num4 = Calendar4::all()->sum('c5pm_gm');
		$player17Num4 = Calendar4::all()->sum('c5pm_player');
		$gm17Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num4 = Calendar4::all()->sum('c6pm_gm');
		$player18Num4 = Calendar4::all()->sum('c6pm_player');
		$gm18Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num4 = Calendar4::all()->sum('c7pm_gm');
		$player19Num4 = Calendar4::all()->sum('c7pm_player');
		$gm19Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num4 = Calendar4::all()->sum('c8pm_gm');
		$player20Num4 = Calendar4::all()->sum('c8pm_player');
		$gm20Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num4 = Calendar4::all()->sum('c9pm_gm');
		$player21Num4 = Calendar4::all()->sum('c9pm_player');
		$gm21Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num4 = Calendar4::all()->sum('c10pm_gm');
		$player22Num4 = Calendar4::all()->sum('c10pm_player');
		$gm22Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num4 = Calendar4::all()->sum('c11pm_gm');
		$player23Num4 = Calendar4::all()->sum('c11pm_player');
		$gm23Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num4 = Calendar4::all()->sum('c0pm_gm');
		$player24Num4 = Calendar4::all()->sum('c0pm_player');
		$gm24Self4 = Calendar4::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self4 = Calendar4::where([
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
		   "player24Self1" => $player24Self1,
	      	   "calendar2" => $calendar2,	
           	   "gm1Num2" => $gm1Num2,
		   "player1Num2" => $player1Num2,
		   "gm1Self2" => $gm1Self2,
		   "player1Self2" => $player1Self2,
		   "gm2Num2" => $gm2Num2,
		   "player2Num2" => $player2Num2,
		   "gm2Self2" => $gm2Self2,
		   "player2Self2" => $player2Self2,
		   "gm3Num2" => $gm3Num2,
		   "player3Num2" => $player3Num2,
		   "gm3Self2" => $gm3Self2,
		   "player3Self2" => $player3Self2,
		   "gm4Num2" => $gm4Num2,
		   "player4Num2" => $player4Num2,
		   "gm4Self2" => $gm4Self2,
		   "player4Self2" => $player4Self2,
		   "gm5Num2" => $gm5Num2,
		   "player5Num2" => $player5Num2,
		   "gm5Self2" => $gm5Self2,
		   "player5Self2" => $player5Self2,
		   "gm6Num2" => $gm6Num2,
		   "player6Num2" => $player6Num2,
		   "gm6Self2" => $gm6Self2,
		   "player6Self2" => $player6Self2,
		   "gm7Num2" => $gm7Num2,
		   "player7Num2" => $player7Num2,
		   "gm7Self2" => $gm7Self2,
		   "player7Self2" => $player7Self2,
		   "gm8Num2" => $gm8Num2,
		   "player8Num2" => $player8Num2,
		   "gm8Self2" => $gm8Self2,
		   "player8Self2" => $player8Self2,
		   "gm9Num2" => $gm9Num2,
		   "player9Num2" => $player9Num2,
		   "gm9Self2" => $gm9Self2,
		   "player9Self2" => $player9Self2,
		   "gm10Num2" => $gm10Num2,
		   "player10Num2" => $player10Num2,
		   "gm10Self2" => $gm10Self2,
		   "player10Self2" => $player10Self2,
		   "gm11Num2" => $gm11Num2,
		   "player11Num2" => $player11Num2,
		   "gm11Self2" => $gm11Self2,
		   "player11Self2" => $player11Self2,
		   "gm12Num2" => $gm12Num2,
		   "player12Num2" => $player12Num2,
		   "gm12Self2" => $gm12Self2,
		   "player12Self2" => $player12Self2,
		   "gm13Num2" => $gm13Num2,
		   "player13Num2" => $player13Num2,
		   "gm13Self2" => $gm13Self2,
		   "player13Self2" => $player13Self2,
		   "gm14Num2" => $gm14Num2,
		   "player14Num2" => $player14Num2,
		   "gm14Self2" => $gm14Self2,
		   "player14Self2" => $player14Self2,
		   "gm15Num2" => $gm15Num2,
		   "player15Num2" => $player15Num2,
		   "gm15Self2" => $gm15Self2,
		   "player15Self2" => $player15Self2,
		   "gm16Num2" => $gm16Num2,
		   "player16Num2" => $player16Num2,
		   "gm16Self2" => $gm16Self2,
		   "player16Self2" => $player16Self2,
		   "gm17Num2" => $gm17Num2,
		   "player17Num2" => $player17Num2,
		   "gm17Self2" => $gm17Self2,
		   "player17Self2" => $player17Self2,
		   "gm18Num2" => $gm18Num2,
		   "player18Num2" => $player18Num2,
		   "gm18Self2" => $gm18Self2,
		   "player18Self2" => $player18Self2,
		   "gm19Num2" => $gm19Num2,
		   "player19Num2" => $player19Num2,
		   "gm19Self2" => $gm19Self2,
		   "player19Self2" => $player19Self2,
		   "gm20Num2" => $gm20Num2,
		   "player20Num2" => $player20Num2,
		   "gm20Self2" => $gm20Self2,
		   "player20Self2" => $player20Self2,
		   "gm21Num2" => $gm21Num2,
		   "player21Num2" => $player21Num2,
		   "gm21Self2" => $gm21Self2,
		   "player21Self2" => $player21Self2,
		   "gm22Num2" => $gm22Num2,
		   "player22Num2" => $player22Num2,
		   "gm22Self2" => $gm22Self2,
		   "player22Self2" => $player22Self2,
		   "gm23Num2" => $gm23Num2,
		   "player23Num2" => $player23Num2,
		   "gm23Self2" => $gm23Self2,
		   "player23Self2" => $player23Self2,
		   "gm24Num2" => $gm24Num2,
		   "player24Num2" => $player24Num2,
		   "gm24Self2" => $gm24Self2,
		   "player24Self2" => $player24Self2,
		   "calendar3" => $calendar3, 
			"gm1Num3" => $gm1Num3,
			"player1Num3" => $player1Num3,
			"gm1Self3" => $gm1Self3,
			"player1Self3" => $player1Self3,
			"gm2Num3" => $gm2Num3,
			"player2Num3" => $player2Num3,
			"gm2Self3" => $gm2Self3,
			"player2Self3" => $player2Self3,
			"gm3Num3" => $gm3Num3,
			"player3Num3" => $player3Num3,
			"gm3Self3" => $gm3Self3,
			"player3Self3" => $player3Self3,
			"gm4Num3" => $gm4Num3,
			"player4Num3" => $player4Num3,
			"gm4Self3" => $gm4Self3,
			"player4Self3" => $player4Self3,
			"gm5Num3" => $gm5Num3,
			"player5Num3" => $player5Num3,
			"gm5Self3" => $gm5Self3,
			"player5Self3" => $player5Self3,
			"gm6Num3" => $gm6Num3,
			"player6Num3" => $player6Num3,
			"gm6Self3" => $gm6Self3,
			"player6Self3" => $player6Self3,
			"gm7Num3" => $gm7Num3,
			"player7Num3" => $player7Num3,
			"gm7Self3" => $gm7Self3,
			"player7Self3" => $player7Self3,
			"gm8Num3" => $gm8Num3,
			"player8Num3" => $player8Num3,
			"gm8Self3" => $gm8Self3,
			"player8Self3" => $player8Self3,
			"gm9Num3" => $gm9Num3,
			"player9Num3" => $player9Num3,
			"gm9Self3" => $gm9Self3,
			"player9Self3" => $player9Self3,
			"gm10Num3" => $gm10Num3,
			"player10Num3" => $player10Num3,
			"gm10Self3" => $gm10Self3,
			"player10Self3" => $player10Self3,
			"gm11Num3" => $gm11Num3,
			"player11Num3" => $player11Num3,
			"gm11Self3" => $gm11Self3,
			"player11Self3" => $player11Self3,
			"gm12Num3" => $gm12Num3,
			"player12Num3" => $player12Num3,
			"gm12Self3" => $gm12Self3,
			"player12Self3" => $player12Self3,
			"gm13Num3" => $gm13Num3,
			"player13Num3" => $player13Num3,
			"gm13Self3" => $gm13Self3,
			"player13Self3" => $player13Self3,
			"gm14Num3" => $gm14Num3,
			"player14Num3" => $player14Num3,
			"gm14Self3" => $gm14Self3,
			"player14Self3" => $player14Self3,
			"gm15Num3" => $gm15Num3,
			"player15Num3" => $player15Num3,
			"gm15Self3" => $gm15Self3,
			"player15Self3" => $player15Self3,
			"gm16Num3" => $gm16Num3,
			"player16Num3" => $player16Num3,
			"gm16Self3" => $gm16Self3,
			"player16Self3" => $player16Self3,
			"gm17Num3" => $gm17Num3,
			"player17Num3" => $player17Num3,
			"gm17Self3" => $gm17Self3,
			"player17Self3" => $player17Self3,
			"gm18Num3" => $gm18Num3,
			"player18Num3" => $player18Num3,
			"gm18Self3" => $gm18Self3,
			"player18Self3" => $player18Self3,
			"gm19Num3" => $gm19Num3,
			"player19Num3" => $player19Num3,
			"gm19Self3" => $gm19Self3,
			"player19Self3" => $player19Self3,
			"gm20Num3" => $gm20Num3,
			"player20Num3" => $player20Num3,
			"gm20Self3" => $gm20Self3,
			"player20Self3" => $player20Self3,
			"gm21Num3" => $gm21Num3,
			"player21Num3" => $player21Num3,
			"gm21Self3" => $gm21Self3,
			"player21Self3" => $player21Self3,
			"gm22Num3" => $gm22Num3,
			"player22Num3" => $player22Num3,
			"gm22Self3" => $gm22Self3,
			"player22Self3" => $player22Self3,
			"gm23Num3" => $gm23Num3,
			"player23Num3" => $player23Num3,
			"gm23Self3" => $gm23Self3,
			"player23Self3" => $player23Self3,
			"gm24Num3" => $gm24Num3,
			"player24Num3" => $player24Num3,
			"gm24Self3" => $gm24Self3,
			"player24Self3" => $player24Self3,
			"calendar4" => $calendar4, 
			"gm1Num4" => $gm1Num4,
			"player1Num4" => $player1Num4,
			"gm1Self4" => $gm1Self4,
			"player1Self4" => $player1Self4,
			"gm2Num4" => $gm2Num4,
			"player2Num4" => $player2Num4,
			"gm2Self4" => $gm2Self4,
			"player2Self4" => $player2Self4,
			"gm3Num4" => $gm3Num4,
			"player3Num4" => $player3Num4,
			"gm3Self4" => $gm3Self4,
			"player3Self4" => $player3Self4,
			"gm4Num4" => $gm4Num4,
			"player4Num4" => $player4Num4,
			"gm4Self4" => $gm4Self4,
			"player4Self4" => $player4Self4,
			"gm5Num4" => $gm5Num4,
			"player5Num4" => $player5Num4,
			"gm5Self4" => $gm5Self4,
			"player5Self4" => $player5Self4,
			"gm6Num4" => $gm6Num4,
			"player6Num4" => $player6Num4,
			"gm6Self4" => $gm6Self4,
			"player6Self4" => $player6Self4,
			"gm7Num4" => $gm7Num4,
			"player7Num4" => $player7Num4,
			"gm7Self4" => $gm7Self4,
			"player7Self4" => $player7Self4,
			"gm8Num4" => $gm8Num4,
			"player8Num4" => $player8Num4,
			"gm8Self4" => $gm8Self4,
			"player8Self4" => $player8Self4,
			"gm9Num4" => $gm9Num4,
			"player9Num4" => $player9Num4,
			"gm9Self4" => $gm9Self4,
			"player9Self4" => $player9Self4,
			"gm10Num4" => $gm10Num4,
			"player10Num4" => $player10Num4,
			"gm10Self4" => $gm10Self4,
			"player10Self4" => $player10Self4,
			"gm11Num4" => $gm11Num4,
			"player11Num4" => $player11Num4,
			"gm11Self4" => $gm11Self4,
			"player11Self4" => $player11Self4,
			"gm12Num4" => $gm12Num4,
			"player12Num4" => $player12Num4,
			"gm12Self4" => $gm12Self4,
			"player12Self4" => $player12Self4,
			"gm13Num4" => $gm13Num4,
			"player13Num4" => $player13Num4,
			"gm13Self4" => $gm13Self4,
			"player13Self4" => $player13Self4,
			"gm14Num4" => $gm14Num4,
			"player14Num4" => $player14Num4,
			"gm14Self4" => $gm14Self4,
			"player14Self4" => $player14Self4,
			"gm15Num4" => $gm15Num4,
			"player15Num4" => $player15Num4,
			"gm15Self4" => $gm15Self4,
			"player15Self4" => $player15Self4,
			"gm16Num4" => $gm16Num4,
			"player16Num4" => $player16Num4,
			"gm16Self4" => $gm16Self4,
			"player16Self4" => $player16Self4,
			"gm17Num4" => $gm17Num4,
			"player17Num4" => $player17Num4,
			"gm17Self4" => $gm17Self4,
			"player17Self4" => $player17Self4,
			"gm18Num4" => $gm18Num4,
			"player18Num4" => $player18Num4,
			"gm18Self4" => $gm18Self4,
			"player18Self4" => $player18Self4,
			"gm19Num4" => $gm19Num4,
			"player19Num4" => $player19Num4,
			"gm19Self4" => $gm19Self4,
			"player19Self4" => $player19Self4,
			"gm20Num4" => $gm20Num4,
			"player20Num4" => $player20Num4,
			"gm20Self4" => $gm20Self4,
			"player20Self4" => $player20Self4,
			"gm21Num4" => $gm21Num4,
			"player21Num4" => $player21Num4,
			"gm21Self4" => $gm21Self4,
			"player21Self4" => $player21Self4,
			"gm22Num4" => $gm22Num4,
			"player22Num4" => $player22Num4,
			"gm22Self4" => $gm22Self4,
			"player22Self4" => $player22Self4,
			"gm23Num4" => $gm23Num4,
			"player23Num4" => $player23Num4,
			"gm23Self4" => $gm23Self4,
			"player23Self4" => $player23Self4,
			"gm24Num4" => $gm24Num4,
			"player24Num4" => $player24Num4,
			"gm24Self4" => $gm24Self4,
			"player24Self4" => $player24Self4
	
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
