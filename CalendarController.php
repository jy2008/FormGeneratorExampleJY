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
	    	$calendar5 = Calendar5::where('user_id', $currentUser->id)->first();
		$gm1Num5 = Calendar5::all()->sum('c1am_gm');
		$player1Num5 = Calendar5::all()->sum('c1am_player');
		$gm1Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num5 = Calendar5::all()->sum('c2am_gm');
		$player2Num5 = Calendar5::all()->sum('c2am_player');
		$gm2Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num5 = Calendar5::all()->sum('c3am_gm');
		$player3Num5 = Calendar5::all()->sum('c3am_player');
		$gm3Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num5 = Calendar5::all()->sum('c4am_gm');
		$player4Num5 = Calendar5::all()->sum('c4am_player');
		$gm4Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num5 = Calendar5::all()->sum('c5am_gm');
		$player5Num5 = Calendar5::all()->sum('c5am_player');
		$gm5Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num5 = Calendar5::all()->sum('c6am_gm');
		$player6Num5 = Calendar5::all()->sum('c6am_player');
		$gm6Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num5 = Calendar5::all()->sum('c7am_gm');
		$player7Num5 = Calendar5::all()->sum('c7am_player');
		$gm7Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num5 = Calendar5::all()->sum('c8am_gm');
		$player8Num5 = Calendar5::all()->sum('c8am_player');
		$gm8Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num5 = Calendar5::all()->sum('c9am_gm');
		$player9Num5 = Calendar5::all()->sum('c9am_player');
		$gm9Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num5 = Calendar5::all()->sum('c10am_gm');
		$player10Num5 = Calendar5::all()->sum('c10am_player');
		$gm10Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num5 = Calendar5::all()->sum('c11am_gm');
		$player11Num5 = Calendar5::all()->sum('c11am_player');
		$gm11Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num5 = Calendar5::all()->sum('c12pm_gm');
		$player12Num5 = Calendar5::all()->sum('c12pm_player');
		$gm12Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num5 = Calendar5::all()->sum('c1pm_gm');
		$player13Num5 = Calendar5::all()->sum('c1pm_player');
		$gm13Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num5 = Calendar5::all()->sum('c2pm_gm');
		$player14Num5 = Calendar5::all()->sum('c2pm_player');
		$gm14Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num5 = Calendar5::all()->sum('c3pm_gm');
		$player15Num5 = Calendar5::all()->sum('c3pm_player');
		$gm15Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num5 = Calendar5::all()->sum('c4pm_gm');
		$player16Num5 = Calendar5::all()->sum('c4pm_player');
		$gm16Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num5 = Calendar5::all()->sum('c5pm_gm');
		$player17Num5 = Calendar5::all()->sum('c5pm_player');
		$gm17Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num5 = Calendar5::all()->sum('c6pm_gm');
		$player18Num5 = Calendar5::all()->sum('c6pm_player');
		$gm18Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num5 = Calendar5::all()->sum('c7pm_gm');
		$player19Num5 = Calendar5::all()->sum('c7pm_player');
		$gm19Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num5 = Calendar5::all()->sum('c8pm_gm');
		$player20Num5 = Calendar5::all()->sum('c8pm_player');
		$gm20Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num5 = Calendar5::all()->sum('c9pm_gm');
		$player21Num5 = Calendar5::all()->sum('c9pm_player');
		$gm21Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num5 = Calendar5::all()->sum('c10pm_gm');
		$player22Num5 = Calendar5::all()->sum('c10pm_player');
		$gm22Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num5 = Calendar5::all()->sum('c11pm_gm');
		$player23Num5 = Calendar5::all()->sum('c11pm_player');
		$gm23Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num5 = Calendar5::all()->sum('c0pm_gm');
		$player24Num5 = Calendar5::all()->sum('c0pm_player');
		$gm24Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self5 = Calendar5::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar6 = Calendar6::where('user_id', $currentUser->id)->first();
		$gm1Num6 = Calendar6::all()->sum('c1am_gm');
		$player1Num6 = Calendar6::all()->sum('c1am_player');
		$gm1Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num6 = Calendar6::all()->sum('c2am_gm');
		$player2Num6 = Calendar6::all()->sum('c2am_player');
		$gm2Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num6 = Calendar6::all()->sum('c3am_gm');
		$player3Num6 = Calendar6::all()->sum('c3am_player');
		$gm3Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num6 = Calendar6::all()->sum('c4am_gm');
		$player4Num6 = Calendar6::all()->sum('c4am_player');
		$gm4Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num6 = Calendar6::all()->sum('c5am_gm');
		$player5Num6 = Calendar6::all()->sum('c5am_player');
		$gm5Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num6 = Calendar6::all()->sum('c6am_gm');
		$player6Num6 = Calendar6::all()->sum('c6am_player');
		$gm6Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num6 = Calendar6::all()->sum('c7am_gm');
		$player7Num6 = Calendar6::all()->sum('c7am_player');
		$gm7Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num6 = Calendar6::all()->sum('c8am_gm');
		$player8Num6 = Calendar6::all()->sum('c8am_player');
		$gm8Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num6 = Calendar6::all()->sum('c9am_gm');
		$player9Num6 = Calendar6::all()->sum('c9am_player');
		$gm9Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num6 = Calendar6::all()->sum('c10am_gm');
		$player10Num6 = Calendar6::all()->sum('c10am_player');
		$gm10Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num6 = Calendar6::all()->sum('c11am_gm');
		$player11Num6 = Calendar6::all()->sum('c11am_player');
		$gm11Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num6 = Calendar6::all()->sum('c12pm_gm');
		$player12Num6 = Calendar6::all()->sum('c12pm_player');
		$gm12Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num6 = Calendar6::all()->sum('c1pm_gm');
		$player13Num6 = Calendar6::all()->sum('c1pm_player');
		$gm13Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num6 = Calendar6::all()->sum('c2pm_gm');
		$player14Num6 = Calendar6::all()->sum('c2pm_player');
		$gm14Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num6 = Calendar6::all()->sum('c3pm_gm');
		$player15Num6 = Calendar6::all()->sum('c3pm_player');
		$gm15Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num6 = Calendar6::all()->sum('c4pm_gm');
		$player16Num6 = Calendar6::all()->sum('c4pm_player');
		$gm16Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num6 = Calendar6::all()->sum('c5pm_gm');
		$player17Num6 = Calendar6::all()->sum('c5pm_player');
		$gm17Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num6 = Calendar6::all()->sum('c6pm_gm');
		$player18Num6 = Calendar6::all()->sum('c6pm_player');
		$gm18Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num6 = Calendar6::all()->sum('c7pm_gm');
		$player19Num6 = Calendar6::all()->sum('c7pm_player');
		$gm19Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num6 = Calendar6::all()->sum('c8pm_gm');
		$player20Num6 = Calendar6::all()->sum('c8pm_player');
		$gm20Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num6 = Calendar6::all()->sum('c9pm_gm');
		$player21Num6 = Calendar6::all()->sum('c9pm_player');
		$gm21Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num6 = Calendar6::all()->sum('c10pm_gm');
		$player22Num6 = Calendar6::all()->sum('c10pm_player');
		$gm22Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num6 = Calendar6::all()->sum('c11pm_gm');
		$player23Num6 = Calendar6::all()->sum('c11pm_player');
		$gm23Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num6 = Calendar6::all()->sum('c0pm_gm');
		$player24Num6 = Calendar6::all()->sum('c0pm_player');
		$gm24Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self6 = Calendar6::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar7 = Calendar7::where('user_id', $currentUser->id)->first();
		$gm1Num7 = Calendar7::all()->sum('c1am_gm');
		$player1Num7 = Calendar7::all()->sum('c1am_player');
		$gm1Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num7 = Calendar7::all()->sum('c2am_gm');
		$player2Num7 = Calendar7::all()->sum('c2am_player');
		$gm2Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num7 = Calendar7::all()->sum('c3am_gm');
		$player3Num7 = Calendar7::all()->sum('c3am_player');
		$gm3Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num7 = Calendar7::all()->sum('c4am_gm');
		$player4Num7 = Calendar7::all()->sum('c4am_player');
		$gm4Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num7 = Calendar7::all()->sum('c5am_gm');
		$player5Num7 = Calendar7::all()->sum('c5am_player');
		$gm5Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num7 = Calendar7::all()->sum('c6am_gm');
		$player6Num7 = Calendar7::all()->sum('c6am_player');
		$gm6Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num7 = Calendar7::all()->sum('c7am_gm');
		$player7Num7 = Calendar7::all()->sum('c7am_player');
		$gm7Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num7 = Calendar7::all()->sum('c8am_gm');
		$player8Num7 = Calendar7::all()->sum('c8am_player');
		$gm8Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num7 = Calendar7::all()->sum('c9am_gm');
		$player9Num7 = Calendar7::all()->sum('c9am_player');
		$gm9Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num7 = Calendar7::all()->sum('c10am_gm');
		$player10Num7 = Calendar7::all()->sum('c10am_player');
		$gm10Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num7 = Calendar7::all()->sum('c11am_gm');
		$player11Num7 = Calendar7::all()->sum('c11am_player');
		$gm11Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num7 = Calendar7::all()->sum('c12pm_gm');
		$player12Num7 = Calendar7::all()->sum('c12pm_player');
		$gm12Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num7 = Calendar7::all()->sum('c1pm_gm');
		$player13Num7 = Calendar7::all()->sum('c1pm_player');
		$gm13Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num7 = Calendar7::all()->sum('c2pm_gm');
		$player14Num7 = Calendar7::all()->sum('c2pm_player');
		$gm14Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num7 = Calendar7::all()->sum('c3pm_gm');
		$player15Num7 = Calendar7::all()->sum('c3pm_player');
		$gm15Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num7 = Calendar7::all()->sum('c4pm_gm');
		$player16Num7 = Calendar7::all()->sum('c4pm_player');
		$gm16Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num7 = Calendar7::all()->sum('c5pm_gm');
		$player17Num7 = Calendar7::all()->sum('c5pm_player');
		$gm17Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num7 = Calendar7::all()->sum('c6pm_gm');
		$player18Num7 = Calendar7::all()->sum('c6pm_player');
		$gm18Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num7 = Calendar7::all()->sum('c7pm_gm');
		$player19Num7 = Calendar7::all()->sum('c7pm_player');
		$gm19Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num7 = Calendar7::all()->sum('c8pm_gm');
		$player20Num7 = Calendar7::all()->sum('c8pm_player');
		$gm20Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num7 = Calendar7::all()->sum('c9pm_gm');
		$player21Num7 = Calendar7::all()->sum('c9pm_player');
		$gm21Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num7 = Calendar7::all()->sum('c10pm_gm');
		$player22Num7 = Calendar7::all()->sum('c10pm_player');
		$gm22Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num7 = Calendar7::all()->sum('c11pm_gm');
		$player23Num7 = Calendar7::all()->sum('c11pm_player');
		$gm23Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num7 = Calendar7::all()->sum('c0pm_gm');
		$player24Num7 = Calendar7::all()->sum('c0pm_player');
		$gm24Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self7 = Calendar7::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar8 = Calendar8::where('user_id', $currentUser->id)->first();
		$gm1Num8 = Calendar8::all()->sum('c1am_gm');
		$player1Num8 = Calendar8::all()->sum('c1am_player');
		$gm1Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num8 = Calendar8::all()->sum('c2am_gm');
		$player2Num8 = Calendar8::all()->sum('c2am_player');
		$gm2Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num8 = Calendar8::all()->sum('c3am_gm');
		$player3Num8 = Calendar8::all()->sum('c3am_player');
		$gm3Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num8 = Calendar8::all()->sum('c4am_gm');
		$player4Num8 = Calendar8::all()->sum('c4am_player');
		$gm4Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num8 = Calendar8::all()->sum('c5am_gm');
		$player5Num8 = Calendar8::all()->sum('c5am_player');
		$gm5Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num8 = Calendar8::all()->sum('c6am_gm');
		$player6Num8 = Calendar8::all()->sum('c6am_player');
		$gm6Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num8 = Calendar8::all()->sum('c7am_gm');
		$player7Num8 = Calendar8::all()->sum('c7am_player');
		$gm7Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num8 = Calendar8::all()->sum('c8am_gm');
		$player8Num8 = Calendar8::all()->sum('c8am_player');
		$gm8Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num8 = Calendar8::all()->sum('c9am_gm');
		$player9Num8 = Calendar8::all()->sum('c9am_player');
		$gm9Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num8 = Calendar8::all()->sum('c10am_gm');
		$player10Num8 = Calendar8::all()->sum('c10am_player');
		$gm10Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num8 = Calendar8::all()->sum('c11am_gm');
		$player11Num8 = Calendar8::all()->sum('c11am_player');
		$gm11Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num8 = Calendar8::all()->sum('c12pm_gm');
		$player12Num8 = Calendar8::all()->sum('c12pm_player');
		$gm12Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num8 = Calendar8::all()->sum('c1pm_gm');
		$player13Num8 = Calendar8::all()->sum('c1pm_player');
		$gm13Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num8 = Calendar8::all()->sum('c2pm_gm');
		$player14Num8 = Calendar8::all()->sum('c2pm_player');
		$gm14Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num8 = Calendar8::all()->sum('c3pm_gm');
		$player15Num8 = Calendar8::all()->sum('c3pm_player');
		$gm15Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num8 = Calendar8::all()->sum('c4pm_gm');
		$player16Num8 = Calendar8::all()->sum('c4pm_player');
		$gm16Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num8 = Calendar8::all()->sum('c5pm_gm');
		$player17Num8 = Calendar8::all()->sum('c5pm_player');
		$gm17Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num8 = Calendar8::all()->sum('c6pm_gm');
		$player18Num8 = Calendar8::all()->sum('c6pm_player');
		$gm18Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num8 = Calendar8::all()->sum('c7pm_gm');
		$player19Num8 = Calendar8::all()->sum('c7pm_player');
		$gm19Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num8 = Calendar8::all()->sum('c8pm_gm');
		$player20Num8 = Calendar8::all()->sum('c8pm_player');
		$gm20Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num8 = Calendar8::all()->sum('c9pm_gm');
		$player21Num8 = Calendar8::all()->sum('c9pm_player');
		$gm21Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num8 = Calendar8::all()->sum('c10pm_gm');
		$player22Num8 = Calendar8::all()->sum('c10pm_player');
		$gm22Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num8 = Calendar8::all()->sum('c11pm_gm');
		$player23Num8 = Calendar8::all()->sum('c11pm_player');
		$gm23Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num8 = Calendar8::all()->sum('c0pm_gm');
		$player24Num8 = Calendar8::all()->sum('c0pm_player');
		$gm24Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self8 = Calendar8::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		$calendar9 = Calendar9::where('user_id', $currentUser->id)->first();
		$gm1Num9 = Calendar9::all()->sum('c1am_gm');
		$player1Num9 = Calendar9::all()->sum('c1am_player');
		$gm1Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num9 = Calendar9::all()->sum('c2am_gm');
		$player2Num9 = Calendar9::all()->sum('c2am_player');
		$gm2Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num9 = Calendar9::all()->sum('c3am_gm');
		$player3Num9 = Calendar9::all()->sum('c3am_player');
		$gm3Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num9 = Calendar9::all()->sum('c4am_gm');
		$player4Num9 = Calendar9::all()->sum('c4am_player');
		$gm4Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num9 = Calendar9::all()->sum('c5am_gm');
		$player5Num9 = Calendar9::all()->sum('c5am_player');
		$gm5Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num9 = Calendar9::all()->sum('c6am_gm');
		$player6Num9 = Calendar9::all()->sum('c6am_player');
		$gm6Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num9 = Calendar9::all()->sum('c7am_gm');
		$player7Num9 = Calendar9::all()->sum('c7am_player');
		$gm7Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num9 = Calendar9::all()->sum('c8am_gm');
		$player8Num9 = Calendar9::all()->sum('c8am_player');
		$gm8Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num9 = Calendar9::all()->sum('c9am_gm');
		$player9Num9 = Calendar9::all()->sum('c9am_player');
		$gm9Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num9 = Calendar9::all()->sum('c10am_gm');
		$player10Num9 = Calendar9::all()->sum('c10am_player');
		$gm10Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num9 = Calendar9::all()->sum('c11am_gm');
		$player11Num9 = Calendar9::all()->sum('c11am_player');
		$gm11Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num9 = Calendar9::all()->sum('c12pm_gm');
		$player12Num9 = Calendar9::all()->sum('c12pm_player');
		$gm12Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num9 = Calendar9::all()->sum('c1pm_gm');
		$player13Num9 = Calendar9::all()->sum('c1pm_player');
		$gm13Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num9 = Calendar9::all()->sum('c2pm_gm');
		$player14Num9 = Calendar9::all()->sum('c2pm_player');
		$gm14Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num9 = Calendar9::all()->sum('c3pm_gm');
		$player15Num9 = Calendar9::all()->sum('c3pm_player');
		$gm15Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num9 = Calendar9::all()->sum('c4pm_gm');
		$player16Num9 = Calendar9::all()->sum('c4pm_player');
		$gm16Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num9 = Calendar9::all()->sum('c5pm_gm');
		$player17Num9 = Calendar9::all()->sum('c5pm_player');
		$gm17Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num9 = Calendar9::all()->sum('c6pm_gm');
		$player18Num9 = Calendar9::all()->sum('c6pm_player');
		$gm18Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num9 = Calendar9::all()->sum('c7pm_gm');
		$player19Num9 = Calendar9::all()->sum('c7pm_player');
		$gm19Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num9 = Calendar9::all()->sum('c8pm_gm');
		$player20Num9 = Calendar9::all()->sum('c8pm_player');
		$gm20Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num9 = Calendar9::all()->sum('c9pm_gm');
		$player21Num9 = Calendar9::all()->sum('c9pm_player');
		$gm21Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num9 = Calendar9::all()->sum('c10pm_gm');
		$player22Num9 = Calendar9::all()->sum('c10pm_player');
		$gm22Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num9 = Calendar9::all()->sum('c11pm_gm');
		$player23Num9 = Calendar9::all()->sum('c11pm_player');
		$gm23Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num9 = Calendar9::all()->sum('c0pm_gm');
		$player24Num9 = Calendar9::all()->sum('c0pm_player');
		$gm24Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self9 = Calendar9::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar10 = Calendar10::where('user_id', $currentUser->id)->first();
		$gm1Num10 = Calendar10::all()->sum('c1am_gm');
		$player1Num10 = Calendar10::all()->sum('c1am_player');
		$gm1Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num10 = Calendar10::all()->sum('c2am_gm');
		$player2Num10 = Calendar10::all()->sum('c2am_player');
		$gm2Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num10 = Calendar10::all()->sum('c3am_gm');
		$player3Num10 = Calendar10::all()->sum('c3am_player');
		$gm3Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num10 = Calendar10::all()->sum('c4am_gm');
		$player4Num10 = Calendar10::all()->sum('c4am_player');
		$gm4Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num10 = Calendar10::all()->sum('c5am_gm');
		$player5Num10 = Calendar10::all()->sum('c5am_player');
		$gm5Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num10 = Calendar10::all()->sum('c6am_gm');
		$player6Num10 = Calendar10::all()->sum('c6am_player');
		$gm6Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num10 = Calendar10::all()->sum('c7am_gm');
		$player7Num10 = Calendar10::all()->sum('c7am_player');
		$gm7Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num10 = Calendar10::all()->sum('c8am_gm');
		$player8Num10 = Calendar10::all()->sum('c8am_player');
		$gm8Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num10 = Calendar10::all()->sum('c9am_gm');
		$player9Num10 = Calendar10::all()->sum('c9am_player');
		$gm9Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num10 = Calendar10::all()->sum('c10am_gm');
		$player10Num10 = Calendar10::all()->sum('c10am_player');
		$gm10Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num10 = Calendar10::all()->sum('c11am_gm');
		$player11Num10 = Calendar10::all()->sum('c11am_player');
		$gm11Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num10 = Calendar10::all()->sum('c12pm_gm');
		$player12Num10 = Calendar10::all()->sum('c12pm_player');
		$gm12Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num10 = Calendar10::all()->sum('c1pm_gm');
		$player13Num10 = Calendar10::all()->sum('c1pm_player');
		$gm13Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num10 = Calendar10::all()->sum('c2pm_gm');
		$player14Num10 = Calendar10::all()->sum('c2pm_player');
		$gm14Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num10 = Calendar10::all()->sum('c3pm_gm');
		$player15Num10 = Calendar10::all()->sum('c3pm_player');
		$gm15Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num10 = Calendar10::all()->sum('c4pm_gm');
		$player16Num10 = Calendar10::all()->sum('c4pm_player');
		$gm16Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num10 = Calendar10::all()->sum('c5pm_gm');
		$player17Num10 = Calendar10::all()->sum('c5pm_player');
		$gm17Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num10 = Calendar10::all()->sum('c6pm_gm');
		$player18Num10 = Calendar10::all()->sum('c6pm_player');
		$gm18Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num10 = Calendar10::all()->sum('c7pm_gm');
		$player19Num10 = Calendar10::all()->sum('c7pm_player');
		$gm19Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num10 = Calendar10::all()->sum('c8pm_gm');
		$player20Num10 = Calendar10::all()->sum('c8pm_player');
		$gm20Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num10 = Calendar10::all()->sum('c9pm_gm');
		$player21Num10 = Calendar10::all()->sum('c9pm_player');
		$gm21Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num10 = Calendar10::all()->sum('c10pm_gm');
		$player22Num10 = Calendar10::all()->sum('c10pm_player');
		$gm22Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num10 = Calendar10::all()->sum('c11pm_gm');
		$player23Num10 = Calendar10::all()->sum('c11pm_player');
		$gm23Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num10 = Calendar10::all()->sum('c0pm_gm');
		$player24Num10 = Calendar10::all()->sum('c0pm_player');
		$gm24Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self10 = Calendar10::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar11 = Calendar11::where('user_id', $currentUser->id)->first();
		$gm1Num11 = Calendar11::all()->sum('c1am_gm');
		$player1Num11 = Calendar11::all()->sum('c1am_player');
		$gm1Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num11 = Calendar11::all()->sum('c2am_gm');
		$player2Num11 = Calendar11::all()->sum('c2am_player');
		$gm2Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num11 = Calendar11::all()->sum('c3am_gm');
		$player3Num11 = Calendar11::all()->sum('c3am_player');
		$gm3Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num11 = Calendar11::all()->sum('c4am_gm');
		$player4Num11 = Calendar11::all()->sum('c4am_player');
		$gm4Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num11 = Calendar11::all()->sum('c5am_gm');
		$player5Num11 = Calendar11::all()->sum('c5am_player');
		$gm5Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num11 = Calendar11::all()->sum('c6am_gm');
		$player6Num11 = Calendar11::all()->sum('c6am_player');
		$gm6Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num11 = Calendar11::all()->sum('c7am_gm');
		$player7Num11 = Calendar11::all()->sum('c7am_player');
		$gm7Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num11 = Calendar11::all()->sum('c8am_gm');
		$player8Num11 = Calendar11::all()->sum('c8am_player');
		$gm8Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num11 = Calendar11::all()->sum('c9am_gm');
		$player9Num11 = Calendar11::all()->sum('c9am_player');
		$gm9Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num11 = Calendar11::all()->sum('c10am_gm');
		$player10Num11 = Calendar11::all()->sum('c10am_player');
		$gm10Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num11 = Calendar11::all()->sum('c11am_gm');
		$player11Num11 = Calendar11::all()->sum('c11am_player');
		$gm11Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num11 = Calendar11::all()->sum('c12pm_gm');
		$player12Num11 = Calendar11::all()->sum('c12pm_player');
		$gm12Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num11 = Calendar11::all()->sum('c1pm_gm');
		$player13Num11 = Calendar11::all()->sum('c1pm_player');
		$gm13Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num11 = Calendar11::all()->sum('c2pm_gm');
		$player14Num11 = Calendar11::all()->sum('c2pm_player');
		$gm14Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num11 = Calendar11::all()->sum('c3pm_gm');
		$player15Num11 = Calendar11::all()->sum('c3pm_player');
		$gm15Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num11 = Calendar11::all()->sum('c4pm_gm');
		$player16Num11 = Calendar11::all()->sum('c4pm_player');
		$gm16Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num11 = Calendar11::all()->sum('c5pm_gm');
		$player17Num11 = Calendar11::all()->sum('c5pm_player');
		$gm17Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num11 = Calendar11::all()->sum('c6pm_gm');
		$player18Num11 = Calendar11::all()->sum('c6pm_player');
		$gm18Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num11 = Calendar11::all()->sum('c7pm_gm');
		$player19Num11 = Calendar11::all()->sum('c7pm_player');
		$gm19Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num11 = Calendar11::all()->sum('c8pm_gm');
		$player20Num11 = Calendar11::all()->sum('c8pm_player');
		$gm20Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num11 = Calendar11::all()->sum('c9pm_gm');
		$player21Num11 = Calendar11::all()->sum('c9pm_player');
		$gm21Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num11 = Calendar11::all()->sum('c10pm_gm');
		$player22Num11 = Calendar11::all()->sum('c10pm_player');
		$gm22Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num11 = Calendar11::all()->sum('c11pm_gm');
		$player23Num11 = Calendar11::all()->sum('c11pm_player');
		$gm23Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num11 = Calendar11::all()->sum('c0pm_gm');
		$player24Num11 = Calendar11::all()->sum('c0pm_player');
		$gm24Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self11 = Calendar11::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar12 = Calendar12::where('user_id', $currentUser->id)->first();
		$gm1Num12 = Calendar12::all()->sum('c1am_gm');
		$player1Num12 = Calendar12::all()->sum('c1am_player');
		$gm1Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num12 = Calendar12::all()->sum('c2am_gm');
		$player2Num12 = Calendar12::all()->sum('c2am_player');
		$gm2Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num12 = Calendar12::all()->sum('c3am_gm');
		$player3Num12 = Calendar12::all()->sum('c3am_player');
		$gm3Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num12 = Calendar12::all()->sum('c4am_gm');
		$player4Num12 = Calendar12::all()->sum('c4am_player');
		$gm4Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num12 = Calendar12::all()->sum('c5am_gm');
		$player5Num12 = Calendar12::all()->sum('c5am_player');
		$gm5Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num12 = Calendar12::all()->sum('c6am_gm');
		$player6Num12 = Calendar12::all()->sum('c6am_player');
		$gm6Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num12 = Calendar12::all()->sum('c7am_gm');
		$player7Num12 = Calendar12::all()->sum('c7am_player');
		$gm7Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num12 = Calendar12::all()->sum('c8am_gm');
		$player8Num12 = Calendar12::all()->sum('c8am_player');
		$gm8Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num12 = Calendar12::all()->sum('c9am_gm');
		$player9Num12 = Calendar12::all()->sum('c9am_player');
		$gm9Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num12 = Calendar12::all()->sum('c10am_gm');
		$player10Num12 = Calendar12::all()->sum('c10am_player');
		$gm10Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num12 = Calendar12::all()->sum('c11am_gm');
		$player11Num12 = Calendar12::all()->sum('c11am_player');
		$gm11Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num12 = Calendar12::all()->sum('c12pm_gm');
		$player12Num12 = Calendar12::all()->sum('c12pm_player');
		$gm12Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num12 = Calendar12::all()->sum('c1pm_gm');
		$player13Num12 = Calendar12::all()->sum('c1pm_player');
		$gm13Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num12 = Calendar12::all()->sum('c2pm_gm');
		$player14Num12 = Calendar12::all()->sum('c2pm_player');
		$gm14Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num12 = Calendar12::all()->sum('c3pm_gm');
		$player15Num12 = Calendar12::all()->sum('c3pm_player');
		$gm15Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num12 = Calendar12::all()->sum('c4pm_gm');
		$player16Num12 = Calendar12::all()->sum('c4pm_player');
		$gm16Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num12 = Calendar12::all()->sum('c5pm_gm');
		$player17Num12 = Calendar12::all()->sum('c5pm_player');
		$gm17Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num12 = Calendar12::all()->sum('c6pm_gm');
		$player18Num12 = Calendar12::all()->sum('c6pm_player');
		$gm18Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num12 = Calendar12::all()->sum('c7pm_gm');
		$player19Num12 = Calendar12::all()->sum('c7pm_player');
		$gm19Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num12 = Calendar12::all()->sum('c8pm_gm');
		$player20Num12 = Calendar12::all()->sum('c8pm_player');
		$gm20Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num12 = Calendar12::all()->sum('c9pm_gm');
		$player21Num12 = Calendar12::all()->sum('c9pm_player');
		$gm21Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num12 = Calendar12::all()->sum('c10pm_gm');
		$player22Num12 = Calendar12::all()->sum('c10pm_player');
		$gm22Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num12 = Calendar12::all()->sum('c11pm_gm');
		$player23Num12 = Calendar12::all()->sum('c11pm_player');
		$gm23Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num12 = Calendar12::all()->sum('c0pm_gm');
		$player24Num12 = Calendar12::all()->sum('c0pm_player');
		$gm24Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self12 = Calendar12::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		$calendar13 = Calendar13::where('user_id', $currentUser->id)->first();
		$gm1Num13 = Calendar13::all()->sum('c1am_gm');
		$player1Num13 = Calendar13::all()->sum('c1am_player');
		$gm1Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num13 = Calendar13::all()->sum('c2am_gm');
		$player2Num13 = Calendar13::all()->sum('c2am_player');
		$gm2Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num13 = Calendar13::all()->sum('c3am_gm');
		$player3Num13 = Calendar13::all()->sum('c3am_player');
		$gm3Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num13 = Calendar13::all()->sum('c4am_gm');
		$player4Num13 = Calendar13::all()->sum('c4am_player');
		$gm4Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num13 = Calendar13::all()->sum('c5am_gm');
		$player5Num13 = Calendar13::all()->sum('c5am_player');
		$gm5Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num13 = Calendar13::all()->sum('c6am_gm');
		$player6Num13 = Calendar13::all()->sum('c6am_player');
		$gm6Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num13 = Calendar13::all()->sum('c7am_gm');
		$player7Num13 = Calendar13::all()->sum('c7am_player');
		$gm7Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num13 = Calendar13::all()->sum('c8am_gm');
		$player8Num13 = Calendar13::all()->sum('c8am_player');
		$gm8Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num13 = Calendar13::all()->sum('c9am_gm');
		$player9Num13 = Calendar13::all()->sum('c9am_player');
		$gm9Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num13 = Calendar13::all()->sum('c10am_gm');
		$player10Num13 = Calendar13::all()->sum('c10am_player');
		$gm10Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num13 = Calendar13::all()->sum('c11am_gm');
		$player11Num13 = Calendar13::all()->sum('c11am_player');
		$gm11Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num13 = Calendar13::all()->sum('c12pm_gm');
		$player12Num13 = Calendar13::all()->sum('c12pm_player');
		$gm12Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num13 = Calendar13::all()->sum('c1pm_gm');
		$player13Num13 = Calendar13::all()->sum('c1pm_player');
		$gm13Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num13 = Calendar13::all()->sum('c2pm_gm');
		$player14Num13 = Calendar13::all()->sum('c2pm_player');
		$gm14Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num13 = Calendar13::all()->sum('c3pm_gm');
		$player15Num13 = Calendar13::all()->sum('c3pm_player');
		$gm15Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num13 = Calendar13::all()->sum('c4pm_gm');
		$player16Num13 = Calendar13::all()->sum('c4pm_player');
		$gm16Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num13 = Calendar13::all()->sum('c5pm_gm');
		$player17Num13 = Calendar13::all()->sum('c5pm_player');
		$gm17Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num13 = Calendar13::all()->sum('c6pm_gm');
		$player18Num13 = Calendar13::all()->sum('c6pm_player');
		$gm18Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num13 = Calendar13::all()->sum('c7pm_gm');
		$player19Num13 = Calendar13::all()->sum('c7pm_player');
		$gm19Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num13 = Calendar13::all()->sum('c8pm_gm');
		$player20Num13 = Calendar13::all()->sum('c8pm_player');
		$gm20Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num13 = Calendar13::all()->sum('c9pm_gm');
		$player21Num13 = Calendar13::all()->sum('c9pm_player');
		$gm21Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num13 = Calendar13::all()->sum('c10pm_gm');
		$player22Num13 = Calendar13::all()->sum('c10pm_player');
		$gm22Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num13 = Calendar13::all()->sum('c11pm_gm');
		$player23Num13 = Calendar13::all()->sum('c11pm_player');
		$gm23Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num13 = Calendar13::all()->sum('c0pm_gm');
		$player24Num13 = Calendar13::all()->sum('c0pm_player');
		$gm24Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self13 = Calendar13::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar14 = Calendar14::where('user_id', $currentUser->id)->first();
		$gm1Num14 = Calendar14::all()->sum('c1am_gm');
		$player1Num14 = Calendar14::all()->sum('c1am_player');
		$gm1Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num14 = Calendar14::all()->sum('c2am_gm');
		$player2Num14 = Calendar14::all()->sum('c2am_player');
		$gm2Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num14 = Calendar14::all()->sum('c3am_gm');
		$player3Num14 = Calendar14::all()->sum('c3am_player');
		$gm3Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num14 = Calendar14::all()->sum('c4am_gm');
		$player4Num14 = Calendar14::all()->sum('c4am_player');
		$gm4Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num14 = Calendar14::all()->sum('c5am_gm');
		$player5Num14 = Calendar14::all()->sum('c5am_player');
		$gm5Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num14 = Calendar14::all()->sum('c6am_gm');
		$player6Num14 = Calendar14::all()->sum('c6am_player');
		$gm6Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num14 = Calendar14::all()->sum('c7am_gm');
		$player7Num14 = Calendar14::all()->sum('c7am_player');
		$gm7Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num14 = Calendar14::all()->sum('c8am_gm');
		$player8Num14 = Calendar14::all()->sum('c8am_player');
		$gm8Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num14 = Calendar14::all()->sum('c9am_gm');
		$player9Num14 = Calendar14::all()->sum('c9am_player');
		$gm9Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num14 = Calendar14::all()->sum('c10am_gm');
		$player10Num14 = Calendar14::all()->sum('c10am_player');
		$gm10Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num14 = Calendar14::all()->sum('c11am_gm');
		$player11Num14 = Calendar14::all()->sum('c11am_player');
		$gm11Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num14 = Calendar14::all()->sum('c12pm_gm');
		$player12Num14 = Calendar14::all()->sum('c12pm_player');
		$gm12Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num14 = Calendar14::all()->sum('c1pm_gm');
		$player13Num14 = Calendar14::all()->sum('c1pm_player');
		$gm13Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num14 = Calendar14::all()->sum('c2pm_gm');
		$player14Num14 = Calendar14::all()->sum('c2pm_player');
		$gm14Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num14 = Calendar14::all()->sum('c3pm_gm');
		$player15Num14 = Calendar14::all()->sum('c3pm_player');
		$gm15Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num14 = Calendar14::all()->sum('c4pm_gm');
		$player16Num14 = Calendar14::all()->sum('c4pm_player');
		$gm16Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num14 = Calendar14::all()->sum('c5pm_gm');
		$player17Num14 = Calendar14::all()->sum('c5pm_player');
		$gm17Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num14 = Calendar14::all()->sum('c6pm_gm');
		$player18Num14 = Calendar14::all()->sum('c6pm_player');
		$gm18Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num14 = Calendar14::all()->sum('c7pm_gm');
		$player19Num14 = Calendar14::all()->sum('c7pm_player');
		$gm19Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num14 = Calendar14::all()->sum('c8pm_gm');
		$player20Num14 = Calendar14::all()->sum('c8pm_player');
		$gm20Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num14 = Calendar14::all()->sum('c9pm_gm');
		$player21Num14 = Calendar14::all()->sum('c9pm_player');
		$gm21Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num14 = Calendar14::all()->sum('c10pm_gm');
		$player22Num14 = Calendar14::all()->sum('c10pm_player');
		$gm22Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num14 = Calendar14::all()->sum('c11pm_gm');
		$player23Num14 = Calendar14::all()->sum('c11pm_player');
		$gm23Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num14 = Calendar14::all()->sum('c0pm_gm');
		$player24Num14 = Calendar14::all()->sum('c0pm_player');
		$gm24Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self14 = Calendar14::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar15 = Calendar15::where('user_id', $currentUser->id)->first();
		$gm1Num15 = Calendar15::all()->sum('c1am_gm');
		$player1Num15 = Calendar15::all()->sum('c1am_player');
		$gm1Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num15 = Calendar15::all()->sum('c2am_gm');
		$player2Num15 = Calendar15::all()->sum('c2am_player');
		$gm2Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num15 = Calendar15::all()->sum('c3am_gm');
		$player3Num15 = Calendar15::all()->sum('c3am_player');
		$gm3Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num15 = Calendar15::all()->sum('c4am_gm');
		$player4Num15 = Calendar15::all()->sum('c4am_player');
		$gm4Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num15 = Calendar15::all()->sum('c5am_gm');
		$player5Num15 = Calendar15::all()->sum('c5am_player');
		$gm5Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num15 = Calendar15::all()->sum('c6am_gm');
		$player6Num15 = Calendar15::all()->sum('c6am_player');
		$gm6Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num15 = Calendar15::all()->sum('c7am_gm');
		$player7Num15 = Calendar15::all()->sum('c7am_player');
		$gm7Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num15 = Calendar15::all()->sum('c8am_gm');
		$player8Num15 = Calendar15::all()->sum('c8am_player');
		$gm8Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num15 = Calendar15::all()->sum('c9am_gm');
		$player9Num15 = Calendar15::all()->sum('c9am_player');
		$gm9Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num15 = Calendar15::all()->sum('c10am_gm');
		$player10Num15 = Calendar15::all()->sum('c10am_player');
		$gm10Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num15 = Calendar15::all()->sum('c11am_gm');
		$player11Num15 = Calendar15::all()->sum('c11am_player');
		$gm11Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num15 = Calendar15::all()->sum('c12pm_gm');
		$player12Num15 = Calendar15::all()->sum('c12pm_player');
		$gm12Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num15 = Calendar15::all()->sum('c1pm_gm');
		$player13Num15 = Calendar15::all()->sum('c1pm_player');
		$gm13Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num15 = Calendar15::all()->sum('c2pm_gm');
		$player14Num15 = Calendar15::all()->sum('c2pm_player');
		$gm14Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num15 = Calendar15::all()->sum('c3pm_gm');
		$player15Num15 = Calendar15::all()->sum('c3pm_player');
		$gm15Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num15 = Calendar15::all()->sum('c4pm_gm');
		$player16Num15 = Calendar15::all()->sum('c4pm_player');
		$gm16Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num15 = Calendar15::all()->sum('c5pm_gm');
		$player17Num15 = Calendar15::all()->sum('c5pm_player');
		$gm17Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num15 = Calendar15::all()->sum('c6pm_gm');
		$player18Num15 = Calendar15::all()->sum('c6pm_player');
		$gm18Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num15 = Calendar15::all()->sum('c7pm_gm');
		$player19Num15 = Calendar15::all()->sum('c7pm_player');
		$gm19Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num15 = Calendar15::all()->sum('c8pm_gm');
		$player20Num15 = Calendar15::all()->sum('c8pm_player');
		$gm20Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num15 = Calendar15::all()->sum('c9pm_gm');
		$player21Num15 = Calendar15::all()->sum('c9pm_player');
		$gm21Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num15 = Calendar15::all()->sum('c10pm_gm');
		$player22Num15 = Calendar15::all()->sum('c10pm_player');
		$gm22Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num15 = Calendar15::all()->sum('c11pm_gm');
		$player23Num15 = Calendar15::all()->sum('c11pm_player');
		$gm23Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num15 = Calendar15::all()->sum('c0pm_gm');
		$player24Num15 = Calendar15::all()->sum('c0pm_player');
		$gm24Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self15 = Calendar15::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar16 = Calendar16::where('user_id', $currentUser->id)->first();
		$gm1Num16 = Calendar16::all()->sum('c1am_gm');
		$player1Num16 = Calendar16::all()->sum('c1am_player');
		$gm1Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num16 = Calendar16::all()->sum('c2am_gm');
		$player2Num16 = Calendar16::all()->sum('c2am_player');
		$gm2Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num16 = Calendar16::all()->sum('c3am_gm');
		$player3Num16 = Calendar16::all()->sum('c3am_player');
		$gm3Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num16 = Calendar16::all()->sum('c4am_gm');
		$player4Num16 = Calendar16::all()->sum('c4am_player');
		$gm4Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num16 = Calendar16::all()->sum('c5am_gm');
		$player5Num16 = Calendar16::all()->sum('c5am_player');
		$gm5Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num16 = Calendar16::all()->sum('c6am_gm');
		$player6Num16 = Calendar16::all()->sum('c6am_player');
		$gm6Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num16 = Calendar16::all()->sum('c7am_gm');
		$player7Num16 = Calendar16::all()->sum('c7am_player');
		$gm7Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num16 = Calendar16::all()->sum('c8am_gm');
		$player8Num16 = Calendar16::all()->sum('c8am_player');
		$gm8Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num16 = Calendar16::all()->sum('c9am_gm');
		$player9Num16 = Calendar16::all()->sum('c9am_player');
		$gm9Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num16 = Calendar16::all()->sum('c10am_gm');
		$player10Num16 = Calendar16::all()->sum('c10am_player');
		$gm10Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num16 = Calendar16::all()->sum('c11am_gm');
		$player11Num16 = Calendar16::all()->sum('c11am_player');
		$gm11Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num16 = Calendar16::all()->sum('c12pm_gm');
		$player12Num16 = Calendar16::all()->sum('c12pm_player');
		$gm12Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num16 = Calendar16::all()->sum('c1pm_gm');
		$player13Num16 = Calendar16::all()->sum('c1pm_player');
		$gm13Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num16 = Calendar16::all()->sum('c2pm_gm');
		$player14Num16 = Calendar16::all()->sum('c2pm_player');
		$gm14Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num16 = Calendar16::all()->sum('c3pm_gm');
		$player15Num16 = Calendar16::all()->sum('c3pm_player');
		$gm15Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num16 = Calendar16::all()->sum('c4pm_gm');
		$player16Num16 = Calendar16::all()->sum('c4pm_player');
		$gm16Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num16 = Calendar16::all()->sum('c5pm_gm');
		$player17Num16 = Calendar16::all()->sum('c5pm_player');
		$gm17Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num16 = Calendar16::all()->sum('c6pm_gm');
		$player18Num16 = Calendar16::all()->sum('c6pm_player');
		$gm18Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num16 = Calendar16::all()->sum('c7pm_gm');
		$player19Num16 = Calendar16::all()->sum('c7pm_player');
		$gm19Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num16 = Calendar16::all()->sum('c8pm_gm');
		$player20Num16 = Calendar16::all()->sum('c8pm_player');
		$gm20Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num16 = Calendar16::all()->sum('c9pm_gm');
		$player21Num16 = Calendar16::all()->sum('c9pm_player');
		$gm21Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num16 = Calendar16::all()->sum('c10pm_gm');
		$player22Num16 = Calendar16::all()->sum('c10pm_player');
		$gm22Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num16 = Calendar16::all()->sum('c11pm_gm');
		$player23Num16 = Calendar16::all()->sum('c11pm_player');
		$gm23Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num16 = Calendar16::all()->sum('c0pm_gm');
		$player24Num16 = Calendar16::all()->sum('c0pm_player');
		$gm24Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self16 = Calendar16::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		$calendar17 = Calendar17::where('user_id', $currentUser->id)->first();
		$gm1Num17 = Calendar17::all()->sum('c1am_gm');
		$player1Num17 = Calendar17::all()->sum('c1am_player');
		$gm1Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num17 = Calendar17::all()->sum('c2am_gm');
		$player2Num17 = Calendar17::all()->sum('c2am_player');
		$gm2Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num17 = Calendar17::all()->sum('c3am_gm');
		$player3Num17 = Calendar17::all()->sum('c3am_player');
		$gm3Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num17 = Calendar17::all()->sum('c4am_gm');
		$player4Num17 = Calendar17::all()->sum('c4am_player');
		$gm4Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num17 = Calendar17::all()->sum('c5am_gm');
		$player5Num17 = Calendar17::all()->sum('c5am_player');
		$gm5Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num17 = Calendar17::all()->sum('c6am_gm');
		$player6Num17 = Calendar17::all()->sum('c6am_player');
		$gm6Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num17 = Calendar17::all()->sum('c7am_gm');
		$player7Num17 = Calendar17::all()->sum('c7am_player');
		$gm7Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num17 = Calendar17::all()->sum('c8am_gm');
		$player8Num17 = Calendar17::all()->sum('c8am_player');
		$gm8Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num17 = Calendar17::all()->sum('c9am_gm');
		$player9Num17 = Calendar17::all()->sum('c9am_player');
		$gm9Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num17 = Calendar17::all()->sum('c10am_gm');
		$player10Num17 = Calendar17::all()->sum('c10am_player');
		$gm10Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num17 = Calendar17::all()->sum('c11am_gm');
		$player11Num17 = Calendar17::all()->sum('c11am_player');
		$gm11Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num17 = Calendar17::all()->sum('c12pm_gm');
		$player12Num17 = Calendar17::all()->sum('c12pm_player');
		$gm12Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num17 = Calendar17::all()->sum('c1pm_gm');
		$player13Num17 = Calendar17::all()->sum('c1pm_player');
		$gm13Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num17 = Calendar17::all()->sum('c2pm_gm');
		$player14Num17 = Calendar17::all()->sum('c2pm_player');
		$gm14Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num17 = Calendar17::all()->sum('c3pm_gm');
		$player15Num17 = Calendar17::all()->sum('c3pm_player');
		$gm15Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num17 = Calendar17::all()->sum('c4pm_gm');
		$player16Num17 = Calendar17::all()->sum('c4pm_player');
		$gm16Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num17 = Calendar17::all()->sum('c5pm_gm');
		$player17Num17 = Calendar17::all()->sum('c5pm_player');
		$gm17Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num17 = Calendar17::all()->sum('c6pm_gm');
		$player18Num17 = Calendar17::all()->sum('c6pm_player');
		$gm18Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num17 = Calendar17::all()->sum('c7pm_gm');
		$player19Num17 = Calendar17::all()->sum('c7pm_player');
		$gm19Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num17 = Calendar17::all()->sum('c8pm_gm');
		$player20Num17 = Calendar17::all()->sum('c8pm_player');
		$gm20Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num17 = Calendar17::all()->sum('c9pm_gm');
		$player21Num17 = Calendar17::all()->sum('c9pm_player');
		$gm21Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num17 = Calendar17::all()->sum('c10pm_gm');
		$player22Num17 = Calendar17::all()->sum('c10pm_player');
		$gm22Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num17 = Calendar17::all()->sum('c11pm_gm');
		$player23Num17 = Calendar17::all()->sum('c11pm_player');
		$gm23Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num17 = Calendar17::all()->sum('c0pm_gm');
		$player24Num17 = Calendar17::all()->sum('c0pm_player');
		$gm24Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self17 = Calendar17::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar18 = Calendar18::where('user_id', $currentUser->id)->first();
		$gm1Num18 = Calendar18::all()->sum('c1am_gm');
		$player1Num18 = Calendar18::all()->sum('c1am_player');
		$gm1Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num18 = Calendar18::all()->sum('c2am_gm');
		$player2Num18 = Calendar18::all()->sum('c2am_player');
		$gm2Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num18 = Calendar18::all()->sum('c3am_gm');
		$player3Num18 = Calendar18::all()->sum('c3am_player');
		$gm3Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num18 = Calendar18::all()->sum('c4am_gm');
		$player4Num18 = Calendar18::all()->sum('c4am_player');
		$gm4Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num18 = Calendar18::all()->sum('c5am_gm');
		$player5Num18 = Calendar18::all()->sum('c5am_player');
		$gm5Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num18 = Calendar18::all()->sum('c6am_gm');
		$player6Num18 = Calendar18::all()->sum('c6am_player');
		$gm6Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num18 = Calendar18::all()->sum('c7am_gm');
		$player7Num18 = Calendar18::all()->sum('c7am_player');
		$gm7Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num18 = Calendar18::all()->sum('c8am_gm');
		$player8Num18 = Calendar18::all()->sum('c8am_player');
		$gm8Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num18 = Calendar18::all()->sum('c9am_gm');
		$player9Num18 = Calendar18::all()->sum('c9am_player');
		$gm9Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num18 = Calendar18::all()->sum('c10am_gm');
		$player10Num18 = Calendar18::all()->sum('c10am_player');
		$gm10Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num18 = Calendar18::all()->sum('c11am_gm');
		$player11Num18 = Calendar18::all()->sum('c11am_player');
		$gm11Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num18 = Calendar18::all()->sum('c12pm_gm');
		$player12Num18 = Calendar18::all()->sum('c12pm_player');
		$gm12Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num18 = Calendar18::all()->sum('c1pm_gm');
		$player13Num18 = Calendar18::all()->sum('c1pm_player');
		$gm13Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num18 = Calendar18::all()->sum('c2pm_gm');
		$player14Num18 = Calendar18::all()->sum('c2pm_player');
		$gm14Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num18 = Calendar18::all()->sum('c3pm_gm');
		$player15Num18 = Calendar18::all()->sum('c3pm_player');
		$gm15Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num18 = Calendar18::all()->sum('c4pm_gm');
		$player16Num18 = Calendar18::all()->sum('c4pm_player');
		$gm16Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num18 = Calendar18::all()->sum('c5pm_gm');
		$player17Num18 = Calendar18::all()->sum('c5pm_player');
		$gm17Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num18 = Calendar18::all()->sum('c6pm_gm');
		$player18Num18 = Calendar18::all()->sum('c6pm_player');
		$gm18Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num18 = Calendar18::all()->sum('c7pm_gm');
		$player19Num18 = Calendar18::all()->sum('c7pm_player');
		$gm19Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num18 = Calendar18::all()->sum('c8pm_gm');
		$player20Num18 = Calendar18::all()->sum('c8pm_player');
		$gm20Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num18 = Calendar18::all()->sum('c9pm_gm');
		$player21Num18 = Calendar18::all()->sum('c9pm_player');
		$gm21Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num18 = Calendar18::all()->sum('c10pm_gm');
		$player22Num18 = Calendar18::all()->sum('c10pm_player');
		$gm22Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num18 = Calendar18::all()->sum('c11pm_gm');
		$player23Num18 = Calendar18::all()->sum('c11pm_player');
		$gm23Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num18 = Calendar18::all()->sum('c0pm_gm');
		$player24Num18 = Calendar18::all()->sum('c0pm_player');
		$gm24Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self18 = Calendar18::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar19 = Calendar19::where('user_id', $currentUser->id)->first();
		$gm1Num19 = Calendar19::all()->sum('c1am_gm');
		$player1Num19 = Calendar19::all()->sum('c1am_player');
		$gm1Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num19 = Calendar19::all()->sum('c2am_gm');
		$player2Num19 = Calendar19::all()->sum('c2am_player');
		$gm2Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num19 = Calendar19::all()->sum('c3am_gm');
		$player3Num19 = Calendar19::all()->sum('c3am_player');
		$gm3Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num19 = Calendar19::all()->sum('c4am_gm');
		$player4Num19 = Calendar19::all()->sum('c4am_player');
		$gm4Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num19 = Calendar19::all()->sum('c5am_gm');
		$player5Num19 = Calendar19::all()->sum('c5am_player');
		$gm5Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num19 = Calendar19::all()->sum('c6am_gm');
		$player6Num19 = Calendar19::all()->sum('c6am_player');
		$gm6Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num19 = Calendar19::all()->sum('c7am_gm');
		$player7Num19 = Calendar19::all()->sum('c7am_player');
		$gm7Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num19 = Calendar19::all()->sum('c8am_gm');
		$player8Num19 = Calendar19::all()->sum('c8am_player');
		$gm8Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num19 = Calendar19::all()->sum('c9am_gm');
		$player9Num19 = Calendar19::all()->sum('c9am_player');
		$gm9Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num19 = Calendar19::all()->sum('c10am_gm');
		$player10Num19 = Calendar19::all()->sum('c10am_player');
		$gm10Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num19 = Calendar19::all()->sum('c11am_gm');
		$player11Num19 = Calendar19::all()->sum('c11am_player');
		$gm11Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num19 = Calendar19::all()->sum('c12pm_gm');
		$player12Num19 = Calendar19::all()->sum('c12pm_player');
		$gm12Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num19 = Calendar19::all()->sum('c1pm_gm');
		$player13Num19 = Calendar19::all()->sum('c1pm_player');
		$gm13Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num19 = Calendar19::all()->sum('c2pm_gm');
		$player14Num19 = Calendar19::all()->sum('c2pm_player');
		$gm14Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num19 = Calendar19::all()->sum('c3pm_gm');
		$player15Num19 = Calendar19::all()->sum('c3pm_player');
		$gm15Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num19 = Calendar19::all()->sum('c4pm_gm');
		$player16Num19 = Calendar19::all()->sum('c4pm_player');
		$gm16Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num19 = Calendar19::all()->sum('c5pm_gm');
		$player17Num19 = Calendar19::all()->sum('c5pm_player');
		$gm17Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num19 = Calendar19::all()->sum('c6pm_gm');
		$player18Num19 = Calendar19::all()->sum('c6pm_player');
		$gm18Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num19 = Calendar19::all()->sum('c7pm_gm');
		$player19Num19 = Calendar19::all()->sum('c7pm_player');
		$gm19Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num19 = Calendar19::all()->sum('c8pm_gm');
		$player20Num19 = Calendar19::all()->sum('c8pm_player');
		$gm20Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num19 = Calendar19::all()->sum('c9pm_gm');
		$player21Num19 = Calendar19::all()->sum('c9pm_player');
		$gm21Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num19 = Calendar19::all()->sum('c10pm_gm');
		$player22Num19 = Calendar19::all()->sum('c10pm_player');
		$gm22Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num19 = Calendar19::all()->sum('c11pm_gm');
		$player23Num19 = Calendar19::all()->sum('c11pm_player');
		$gm23Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num19 = Calendar19::all()->sum('c0pm_gm');
		$player24Num19 = Calendar19::all()->sum('c0pm_player');
		$gm24Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self19 = Calendar19::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		$calendar20 = Calendar20::where('user_id', $currentUser->id)->first();
		$gm1Num20 = Calendar20::all()->sum('c1am_gm');
		$player1Num20 = Calendar20::all()->sum('c1am_player');
		$gm1Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num20 = Calendar20::all()->sum('c2am_gm');
		$player2Num20 = Calendar20::all()->sum('c2am_player');
		$gm2Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num20 = Calendar20::all()->sum('c3am_gm');
		$player3Num20 = Calendar20::all()->sum('c3am_player');
		$gm3Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num20 = Calendar20::all()->sum('c4am_gm');
		$player4Num20 = Calendar20::all()->sum('c4am_player');
		$gm4Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num20 = Calendar20::all()->sum('c5am_gm');
		$player5Num20 = Calendar20::all()->sum('c5am_player');
		$gm5Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num20 = Calendar20::all()->sum('c6am_gm');
		$player6Num20 = Calendar20::all()->sum('c6am_player');
		$gm6Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num20 = Calendar20::all()->sum('c7am_gm');
		$player7Num20 = Calendar20::all()->sum('c7am_player');
		$gm7Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num20 = Calendar20::all()->sum('c8am_gm');
		$player8Num20 = Calendar20::all()->sum('c8am_player');
		$gm8Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num20 = Calendar20::all()->sum('c9am_gm');
		$player9Num20 = Calendar20::all()->sum('c9am_player');
		$gm9Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num20 = Calendar20::all()->sum('c10am_gm');
		$player10Num20 = Calendar20::all()->sum('c10am_player');
		$gm10Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num20 = Calendar20::all()->sum('c11am_gm');
		$player11Num20 = Calendar20::all()->sum('c11am_player');
		$gm11Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num20 = Calendar20::all()->sum('c12pm_gm');
		$player12Num20 = Calendar20::all()->sum('c12pm_player');
		$gm12Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num20 = Calendar20::all()->sum('c1pm_gm');
		$player13Num20 = Calendar20::all()->sum('c1pm_player');
		$gm13Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num20 = Calendar20::all()->sum('c2pm_gm');
		$player14Num20 = Calendar20::all()->sum('c2pm_player');
		$gm14Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num20 = Calendar20::all()->sum('c3pm_gm');
		$player15Num20 = Calendar20::all()->sum('c3pm_player');
		$gm15Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num20 = Calendar20::all()->sum('c4pm_gm');
		$player16Num20 = Calendar20::all()->sum('c4pm_player');
		$gm16Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num20 = Calendar20::all()->sum('c5pm_gm');
		$player17Num20 = Calendar20::all()->sum('c5pm_player');
		$gm17Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num20 = Calendar20::all()->sum('c6pm_gm');
		$player18Num20 = Calendar20::all()->sum('c6pm_player');
		$gm18Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num20 = Calendar20::all()->sum('c7pm_gm');
		$player19Num20 = Calendar20::all()->sum('c7pm_player');
		$gm19Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num20 = Calendar20::all()->sum('c8pm_gm');
		$player20Num20 = Calendar20::all()->sum('c8pm_player');
		$gm20Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num20 = Calendar20::all()->sum('c9pm_gm');
		$player21Num20 = Calendar20::all()->sum('c9pm_player');
		$gm21Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num20 = Calendar20::all()->sum('c10pm_gm');
		$player22Num20 = Calendar20::all()->sum('c10pm_player');
		$gm22Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num20 = Calendar20::all()->sum('c11pm_gm');
		$player23Num20 = Calendar20::all()->sum('c11pm_player');
		$gm23Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num20 = Calendar20::all()->sum('c0pm_gm');
		$player24Num20 = Calendar20::all()->sum('c0pm_player');
		$gm24Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self20 = Calendar20::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar21 = Calendar21::where('user_id', $currentUser->id)->first();
		$gm1Num21 = Calendar21::all()->sum('c1am_gm');
		$player1Num21 = Calendar21::all()->sum('c1am_player');
		$gm1Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num21 = Calendar21::all()->sum('c2am_gm');
		$player2Num21 = Calendar21::all()->sum('c2am_player');
		$gm2Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num21 = Calendar21::all()->sum('c3am_gm');
		$player3Num21 = Calendar21::all()->sum('c3am_player');
		$gm3Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num21 = Calendar21::all()->sum('c4am_gm');
		$player4Num21 = Calendar21::all()->sum('c4am_player');
		$gm4Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num21 = Calendar21::all()->sum('c5am_gm');
		$player5Num21 = Calendar21::all()->sum('c5am_player');
		$gm5Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num21 = Calendar21::all()->sum('c6am_gm');
		$player6Num21 = Calendar21::all()->sum('c6am_player');
		$gm6Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num21 = Calendar21::all()->sum('c7am_gm');
		$player7Num21 = Calendar21::all()->sum('c7am_player');
		$gm7Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num21 = Calendar21::all()->sum('c8am_gm');
		$player8Num21 = Calendar21::all()->sum('c8am_player');
		$gm8Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num21 = Calendar21::all()->sum('c9am_gm');
		$player9Num21 = Calendar21::all()->sum('c9am_player');
		$gm9Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num21 = Calendar21::all()->sum('c10am_gm');
		$player10Num21 = Calendar21::all()->sum('c10am_player');
		$gm10Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num21 = Calendar21::all()->sum('c11am_gm');
		$player11Num21 = Calendar21::all()->sum('c11am_player');
		$gm11Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num21 = Calendar21::all()->sum('c12pm_gm');
		$player12Num21 = Calendar21::all()->sum('c12pm_player');
		$gm12Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num21 = Calendar21::all()->sum('c1pm_gm');
		$player13Num21 = Calendar21::all()->sum('c1pm_player');
		$gm13Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num21 = Calendar21::all()->sum('c2pm_gm');
		$player14Num21 = Calendar21::all()->sum('c2pm_player');
		$gm14Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num21 = Calendar21::all()->sum('c3pm_gm');
		$player15Num21 = Calendar21::all()->sum('c3pm_player');
		$gm15Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num21 = Calendar21::all()->sum('c4pm_gm');
		$player16Num21 = Calendar21::all()->sum('c4pm_player');
		$gm16Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num21 = Calendar21::all()->sum('c5pm_gm');
		$player17Num21 = Calendar21::all()->sum('c5pm_player');
		$gm17Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num21 = Calendar21::all()->sum('c6pm_gm');
		$player18Num21 = Calendar21::all()->sum('c6pm_player');
		$gm18Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num21 = Calendar21::all()->sum('c7pm_gm');
		$player19Num21 = Calendar21::all()->sum('c7pm_player');
		$gm19Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num21 = Calendar21::all()->sum('c8pm_gm');
		$player20Num21 = Calendar21::all()->sum('c8pm_player');
		$gm20Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num21 = Calendar21::all()->sum('c9pm_gm');
		$player21Num21 = Calendar21::all()->sum('c9pm_player');
		$gm21Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num21 = Calendar21::all()->sum('c10pm_gm');
		$player22Num21 = Calendar21::all()->sum('c10pm_player');
		$gm22Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num21 = Calendar21::all()->sum('c11pm_gm');
		$player23Num21 = Calendar21::all()->sum('c11pm_player');
		$gm23Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num21 = Calendar21::all()->sum('c0pm_gm');
		$player24Num21 = Calendar21::all()->sum('c0pm_player');
		$gm24Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self21 = Calendar21::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar22 = Calendar22::where('user_id', $currentUser->id)->first();
		$gm1Num22 = Calendar22::all()->sum('c1am_gm');
		$player1Num22 = Calendar22::all()->sum('c1am_player');
		$gm1Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num22 = Calendar22::all()->sum('c2am_gm');
		$player2Num22 = Calendar22::all()->sum('c2am_player');
		$gm2Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num22 = Calendar22::all()->sum('c3am_gm');
		$player3Num22 = Calendar22::all()->sum('c3am_player');
		$gm3Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num22 = Calendar22::all()->sum('c4am_gm');
		$player4Num22 = Calendar22::all()->sum('c4am_player');
		$gm4Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num22 = Calendar22::all()->sum('c5am_gm');
		$player5Num22 = Calendar22::all()->sum('c5am_player');
		$gm5Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num22 = Calendar22::all()->sum('c6am_gm');
		$player6Num22 = Calendar22::all()->sum('c6am_player');
		$gm6Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num22 = Calendar22::all()->sum('c7am_gm');
		$player7Num22 = Calendar22::all()->sum('c7am_player');
		$gm7Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num22 = Calendar22::all()->sum('c8am_gm');
		$player8Num22 = Calendar22::all()->sum('c8am_player');
		$gm8Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num22 = Calendar22::all()->sum('c9am_gm');
		$player9Num22 = Calendar22::all()->sum('c9am_player');
		$gm9Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num22 = Calendar22::all()->sum('c10am_gm');
		$player10Num22 = Calendar22::all()->sum('c10am_player');
		$gm10Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num22 = Calendar22::all()->sum('c11am_gm');
		$player11Num22 = Calendar22::all()->sum('c11am_player');
		$gm11Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num22 = Calendar22::all()->sum('c12pm_gm');
		$player12Num22 = Calendar22::all()->sum('c12pm_player');
		$gm12Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num22 = Calendar22::all()->sum('c1pm_gm');
		$player13Num22 = Calendar22::all()->sum('c1pm_player');
		$gm13Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num22 = Calendar22::all()->sum('c2pm_gm');
		$player14Num22 = Calendar22::all()->sum('c2pm_player');
		$gm14Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num22 = Calendar22::all()->sum('c3pm_gm');
		$player15Num22 = Calendar22::all()->sum('c3pm_player');
		$gm15Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num22 = Calendar22::all()->sum('c4pm_gm');
		$player16Num22 = Calendar22::all()->sum('c4pm_player');
		$gm16Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num22 = Calendar22::all()->sum('c5pm_gm');
		$player17Num22 = Calendar22::all()->sum('c5pm_player');
		$gm17Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num22 = Calendar22::all()->sum('c6pm_gm');
		$player18Num22 = Calendar22::all()->sum('c6pm_player');
		$gm18Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num22 = Calendar22::all()->sum('c7pm_gm');
		$player19Num22 = Calendar22::all()->sum('c7pm_player');
		$gm19Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num22 = Calendar22::all()->sum('c8pm_gm');
		$player20Num22 = Calendar22::all()->sum('c8pm_player');
		$gm20Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num22 = Calendar22::all()->sum('c9pm_gm');
		$player21Num22 = Calendar22::all()->sum('c9pm_player');
		$gm21Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num22 = Calendar22::all()->sum('c10pm_gm');
		$player22Num22 = Calendar22::all()->sum('c10pm_player');
		$gm22Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num22 = Calendar22::all()->sum('c11pm_gm');
		$player23Num22 = Calendar22::all()->sum('c11pm_player');
		$gm23Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num22 = Calendar22::all()->sum('c0pm_gm');
		$player24Num22 = Calendar22::all()->sum('c0pm_player');
		$gm24Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self22 = Calendar22::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar23 = Calendar23::where('user_id', $currentUser->id)->first();
		$gm1Num23 = Calendar23::all()->sum('c1am_gm');
		$player1Num23 = Calendar23::all()->sum('c1am_player');
		$gm1Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num23 = Calendar23::all()->sum('c2am_gm');
		$player2Num23 = Calendar23::all()->sum('c2am_player');
		$gm2Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num23 = Calendar23::all()->sum('c3am_gm');
		$player3Num23 = Calendar23::all()->sum('c3am_player');
		$gm3Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num23 = Calendar23::all()->sum('c4am_gm');
		$player4Num23 = Calendar23::all()->sum('c4am_player');
		$gm4Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num23 = Calendar23::all()->sum('c5am_gm');
		$player5Num23 = Calendar23::all()->sum('c5am_player');
		$gm5Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num23 = Calendar23::all()->sum('c6am_gm');
		$player6Num23 = Calendar23::all()->sum('c6am_player');
		$gm6Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num23 = Calendar23::all()->sum('c7am_gm');
		$player7Num23 = Calendar23::all()->sum('c7am_player');
		$gm7Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num23 = Calendar23::all()->sum('c8am_gm');
		$player8Num23 = Calendar23::all()->sum('c8am_player');
		$gm8Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num23 = Calendar23::all()->sum('c9am_gm');
		$player9Num23 = Calendar23::all()->sum('c9am_player');
		$gm9Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num23 = Calendar23::all()->sum('c10am_gm');
		$player10Num23 = Calendar23::all()->sum('c10am_player');
		$gm10Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num23 = Calendar23::all()->sum('c11am_gm');
		$player11Num23 = Calendar23::all()->sum('c11am_player');
		$gm11Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num23 = Calendar23::all()->sum('c12pm_gm');
		$player12Num23 = Calendar23::all()->sum('c12pm_player');
		$gm12Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num23 = Calendar23::all()->sum('c1pm_gm');
		$player13Num23 = Calendar23::all()->sum('c1pm_player');
		$gm13Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num23 = Calendar23::all()->sum('c2pm_gm');
		$player14Num23 = Calendar23::all()->sum('c2pm_player');
		$gm14Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num23 = Calendar23::all()->sum('c3pm_gm');
		$player15Num23 = Calendar23::all()->sum('c3pm_player');
		$gm15Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num23 = Calendar23::all()->sum('c4pm_gm');
		$player16Num23 = Calendar23::all()->sum('c4pm_player');
		$gm16Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num23 = Calendar23::all()->sum('c5pm_gm');
		$player17Num23 = Calendar23::all()->sum('c5pm_player');
		$gm17Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num23 = Calendar23::all()->sum('c6pm_gm');
		$player18Num23 = Calendar23::all()->sum('c6pm_player');
		$gm18Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num23 = Calendar23::all()->sum('c7pm_gm');
		$player19Num23 = Calendar23::all()->sum('c7pm_player');
		$gm19Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num23 = Calendar23::all()->sum('c8pm_gm');
		$player20Num23 = Calendar23::all()->sum('c8pm_player');
		$gm20Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num23 = Calendar23::all()->sum('c9pm_gm');
		$player21Num23 = Calendar23::all()->sum('c9pm_player');
		$gm21Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num23 = Calendar23::all()->sum('c10pm_gm');
		$player22Num23 = Calendar23::all()->sum('c10pm_player');
		$gm22Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num23 = Calendar23::all()->sum('c11pm_gm');
		$player23Num23 = Calendar23::all()->sum('c11pm_player');
		$gm23Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num23 = Calendar23::all()->sum('c0pm_gm');
		$player24Num23 = Calendar23::all()->sum('c0pm_player');
		$gm24Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self23 = Calendar23::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		$calendar24 = Calendar24::where('user_id', $currentUser->id)->first();
		$gm1Num24 = Calendar24::all()->sum('c1am_gm');
		$player1Num24 = Calendar24::all()->sum('c1am_player');
		$gm1Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num24 = Calendar24::all()->sum('c2am_gm');
		$player2Num24 = Calendar24::all()->sum('c2am_player');
		$gm2Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num24 = Calendar24::all()->sum('c3am_gm');
		$player3Num24 = Calendar24::all()->sum('c3am_player');
		$gm3Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num24 = Calendar24::all()->sum('c4am_gm');
		$player4Num24 = Calendar24::all()->sum('c4am_player');
		$gm4Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num24 = Calendar24::all()->sum('c5am_gm');
		$player5Num24 = Calendar24::all()->sum('c5am_player');
		$gm5Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num24 = Calendar24::all()->sum('c6am_gm');
		$player6Num24 = Calendar24::all()->sum('c6am_player');
		$gm6Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num24 = Calendar24::all()->sum('c7am_gm');
		$player7Num24 = Calendar24::all()->sum('c7am_player');
		$gm7Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num24 = Calendar24::all()->sum('c8am_gm');
		$player8Num24 = Calendar24::all()->sum('c8am_player');
		$gm8Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num24 = Calendar24::all()->sum('c9am_gm');
		$player9Num24 = Calendar24::all()->sum('c9am_player');
		$gm9Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num24 = Calendar24::all()->sum('c10am_gm');
		$player10Num24 = Calendar24::all()->sum('c10am_player');
		$gm10Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num24 = Calendar24::all()->sum('c11am_gm');
		$player11Num24 = Calendar24::all()->sum('c11am_player');
		$gm11Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num24 = Calendar24::all()->sum('c12pm_gm');
		$player12Num24 = Calendar24::all()->sum('c12pm_player');
		$gm12Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num24 = Calendar24::all()->sum('c1pm_gm');
		$player13Num24 = Calendar24::all()->sum('c1pm_player');
		$gm13Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num24 = Calendar24::all()->sum('c2pm_gm');
		$player14Num24 = Calendar24::all()->sum('c2pm_player');
		$gm14Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num24 = Calendar24::all()->sum('c3pm_gm');
		$player15Num24 = Calendar24::all()->sum('c3pm_player');
		$gm15Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num24 = Calendar24::all()->sum('c4pm_gm');
		$player16Num24 = Calendar24::all()->sum('c4pm_player');
		$gm16Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num24 = Calendar24::all()->sum('c5pm_gm');
		$player17Num24 = Calendar24::all()->sum('c5pm_player');
		$gm17Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num24 = Calendar24::all()->sum('c6pm_gm');
		$player18Num24 = Calendar24::all()->sum('c6pm_player');
		$gm18Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num24 = Calendar24::all()->sum('c7pm_gm');
		$player19Num24 = Calendar24::all()->sum('c7pm_player');
		$gm19Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num24 = Calendar24::all()->sum('c8pm_gm');
		$player20Num24 = Calendar24::all()->sum('c8pm_player');
		$gm20Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num24 = Calendar24::all()->sum('c9pm_gm');
		$player21Num24 = Calendar24::all()->sum('c9pm_player');
		$gm21Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num24 = Calendar24::all()->sum('c10pm_gm');
		$player22Num24 = Calendar24::all()->sum('c10pm_player');
		$gm22Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num24 = Calendar24::all()->sum('c11pm_gm');
		$player23Num24 = Calendar24::all()->sum('c11pm_player');
		$gm23Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num24 = Calendar24::all()->sum('c0pm_gm');
		$player24Num24 = Calendar24::all()->sum('c0pm_player');
		$gm24Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self24 = Calendar24::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar25 = Calendar25::where('user_id', $currentUser->id)->first();
		$gm1Num25 = Calendar25::all()->sum('c1am_gm');
		$player1Num25 = Calendar25::all()->sum('c1am_player');
		$gm1Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num25 = Calendar25::all()->sum('c2am_gm');
		$player2Num25 = Calendar25::all()->sum('c2am_player');
		$gm2Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num25 = Calendar25::all()->sum('c3am_gm');
		$player3Num25 = Calendar25::all()->sum('c3am_player');
		$gm3Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num25 = Calendar25::all()->sum('c4am_gm');
		$player4Num25 = Calendar25::all()->sum('c4am_player');
		$gm4Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num25 = Calendar25::all()->sum('c5am_gm');
		$player5Num25 = Calendar25::all()->sum('c5am_player');
		$gm5Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num25 = Calendar25::all()->sum('c6am_gm');
		$player6Num25 = Calendar25::all()->sum('c6am_player');
		$gm6Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num25 = Calendar25::all()->sum('c7am_gm');
		$player7Num25 = Calendar25::all()->sum('c7am_player');
		$gm7Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num25 = Calendar25::all()->sum('c8am_gm');
		$player8Num25 = Calendar25::all()->sum('c8am_player');
		$gm8Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num25 = Calendar25::all()->sum('c9am_gm');
		$player9Num25 = Calendar25::all()->sum('c9am_player');
		$gm9Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num25 = Calendar25::all()->sum('c10am_gm');
		$player10Num25 = Calendar25::all()->sum('c10am_player');
		$gm10Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num25 = Calendar25::all()->sum('c11am_gm');
		$player11Num25 = Calendar25::all()->sum('c11am_player');
		$gm11Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num25 = Calendar25::all()->sum('c12pm_gm');
		$player12Num25 = Calendar25::all()->sum('c12pm_player');
		$gm12Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num25 = Calendar25::all()->sum('c1pm_gm');
		$player13Num25 = Calendar25::all()->sum('c1pm_player');
		$gm13Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num25 = Calendar25::all()->sum('c2pm_gm');
		$player14Num25 = Calendar25::all()->sum('c2pm_player');
		$gm14Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num25 = Calendar25::all()->sum('c3pm_gm');
		$player15Num25 = Calendar25::all()->sum('c3pm_player');
		$gm15Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num25 = Calendar25::all()->sum('c4pm_gm');
		$player16Num25 = Calendar25::all()->sum('c4pm_player');
		$gm16Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num25 = Calendar25::all()->sum('c5pm_gm');
		$player17Num25 = Calendar25::all()->sum('c5pm_player');
		$gm17Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num25 = Calendar25::all()->sum('c6pm_gm');
		$player18Num25 = Calendar25::all()->sum('c6pm_player');
		$gm18Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num25 = Calendar25::all()->sum('c7pm_gm');
		$player19Num25 = Calendar25::all()->sum('c7pm_player');
		$gm19Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num25 = Calendar25::all()->sum('c8pm_gm');
		$player20Num25 = Calendar25::all()->sum('c8pm_player');
		$gm20Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num25 = Calendar25::all()->sum('c9pm_gm');
		$player21Num25 = Calendar25::all()->sum('c9pm_player');
		$gm21Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num25 = Calendar25::all()->sum('c10pm_gm');
		$player22Num25 = Calendar25::all()->sum('c10pm_player');
		$gm22Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num25 = Calendar25::all()->sum('c11pm_gm');
		$player23Num25 = Calendar25::all()->sum('c11pm_player');
		$gm23Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num25 = Calendar25::all()->sum('c0pm_gm');
		$player24Num25 = Calendar25::all()->sum('c0pm_player');
		$gm24Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self25 = Calendar25::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar26 = Calendar26::where('user_id', $currentUser->id)->first();
		$gm1Num26 = Calendar26::all()->sum('c1am_gm');
		$player1Num26 = Calendar26::all()->sum('c1am_player');
		$gm1Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num26 = Calendar26::all()->sum('c2am_gm');
		$player2Num26 = Calendar26::all()->sum('c2am_player');
		$gm2Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num26 = Calendar26::all()->sum('c3am_gm');
		$player3Num26 = Calendar26::all()->sum('c3am_player');
		$gm3Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num26 = Calendar26::all()->sum('c4am_gm');
		$player4Num26 = Calendar26::all()->sum('c4am_player');
		$gm4Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num26 = Calendar26::all()->sum('c5am_gm');
		$player5Num26 = Calendar26::all()->sum('c5am_player');
		$gm5Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num26 = Calendar26::all()->sum('c6am_gm');
		$player6Num26 = Calendar26::all()->sum('c6am_player');
		$gm6Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num26 = Calendar26::all()->sum('c7am_gm');
		$player7Num26 = Calendar26::all()->sum('c7am_player');
		$gm7Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num26 = Calendar26::all()->sum('c8am_gm');
		$player8Num26 = Calendar26::all()->sum('c8am_player');
		$gm8Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num26 = Calendar26::all()->sum('c9am_gm');
		$player9Num26 = Calendar26::all()->sum('c9am_player');
		$gm9Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num26 = Calendar26::all()->sum('c10am_gm');
		$player10Num26 = Calendar26::all()->sum('c10am_player');
		$gm10Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num26 = Calendar26::all()->sum('c11am_gm');
		$player11Num26 = Calendar26::all()->sum('c11am_player');
		$gm11Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num26 = Calendar26::all()->sum('c12pm_gm');
		$player12Num26 = Calendar26::all()->sum('c12pm_player');
		$gm12Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num26 = Calendar26::all()->sum('c1pm_gm');
		$player13Num26 = Calendar26::all()->sum('c1pm_player');
		$gm13Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num26 = Calendar26::all()->sum('c2pm_gm');
		$player14Num26 = Calendar26::all()->sum('c2pm_player');
		$gm14Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num26 = Calendar26::all()->sum('c3pm_gm');
		$player15Num26 = Calendar26::all()->sum('c3pm_player');
		$gm15Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num26 = Calendar26::all()->sum('c4pm_gm');
		$player16Num26 = Calendar26::all()->sum('c4pm_player');
		$gm16Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num26 = Calendar26::all()->sum('c5pm_gm');
		$player17Num26 = Calendar26::all()->sum('c5pm_player');
		$gm17Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num26 = Calendar26::all()->sum('c6pm_gm');
		$player18Num26 = Calendar26::all()->sum('c6pm_player');
		$gm18Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num26 = Calendar26::all()->sum('c7pm_gm');
		$player19Num26 = Calendar26::all()->sum('c7pm_player');
		$gm19Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num26 = Calendar26::all()->sum('c8pm_gm');
		$player20Num26 = Calendar26::all()->sum('c8pm_player');
		$gm20Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num26 = Calendar26::all()->sum('c9pm_gm');
		$player21Num26 = Calendar26::all()->sum('c9pm_player');
		$gm21Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num26 = Calendar26::all()->sum('c10pm_gm');
		$player22Num26 = Calendar26::all()->sum('c10pm_player');
		$gm22Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num26 = Calendar26::all()->sum('c11pm_gm');
		$player23Num26 = Calendar26::all()->sum('c11pm_player');
		$gm23Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num26 = Calendar26::all()->sum('c0pm_gm');
		$player24Num26 = Calendar26::all()->sum('c0pm_player');
		$gm24Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self26 = Calendar26::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar27 = Calendar27::where('user_id', $currentUser->id)->first();
		$gm1Num27 = Calendar27::all()->sum('c1am_gm');
		$player1Num27 = Calendar27::all()->sum('c1am_player');
		$gm1Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num27 = Calendar27::all()->sum('c2am_gm');
		$player2Num27 = Calendar27::all()->sum('c2am_player');
		$gm2Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num27 = Calendar27::all()->sum('c3am_gm');
		$player3Num27 = Calendar27::all()->sum('c3am_player');
		$gm3Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num27 = Calendar27::all()->sum('c4am_gm');
		$player4Num27 = Calendar27::all()->sum('c4am_player');
		$gm4Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num27 = Calendar27::all()->sum('c5am_gm');
		$player5Num27 = Calendar27::all()->sum('c5am_player');
		$gm5Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num27 = Calendar27::all()->sum('c6am_gm');
		$player6Num27 = Calendar27::all()->sum('c6am_player');
		$gm6Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num27 = Calendar27::all()->sum('c7am_gm');
		$player7Num27 = Calendar27::all()->sum('c7am_player');
		$gm7Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num27 = Calendar27::all()->sum('c8am_gm');
		$player8Num27 = Calendar27::all()->sum('c8am_player');
		$gm8Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num27 = Calendar27::all()->sum('c9am_gm');
		$player9Num27 = Calendar27::all()->sum('c9am_player');
		$gm9Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num27 = Calendar27::all()->sum('c10am_gm');
		$player10Num27 = Calendar27::all()->sum('c10am_player');
		$gm10Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num27 = Calendar27::all()->sum('c11am_gm');
		$player11Num27 = Calendar27::all()->sum('c11am_player');
		$gm11Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num27 = Calendar27::all()->sum('c12pm_gm');
		$player12Num27 = Calendar27::all()->sum('c12pm_player');
		$gm12Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num27 = Calendar27::all()->sum('c1pm_gm');
		$player13Num27 = Calendar27::all()->sum('c1pm_player');
		$gm13Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num27 = Calendar27::all()->sum('c2pm_gm');
		$player14Num27 = Calendar27::all()->sum('c2pm_player');
		$gm14Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num27 = Calendar27::all()->sum('c3pm_gm');
		$player15Num27 = Calendar27::all()->sum('c3pm_player');
		$gm15Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num27 = Calendar27::all()->sum('c4pm_gm');
		$player16Num27 = Calendar27::all()->sum('c4pm_player');
		$gm16Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num27 = Calendar27::all()->sum('c5pm_gm');
		$player17Num27 = Calendar27::all()->sum('c5pm_player');
		$gm17Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num27 = Calendar27::all()->sum('c6pm_gm');
		$player18Num27 = Calendar27::all()->sum('c6pm_player');
		$gm18Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num27 = Calendar27::all()->sum('c7pm_gm');
		$player19Num27 = Calendar27::all()->sum('c7pm_player');
		$gm19Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num27 = Calendar27::all()->sum('c8pm_gm');
		$player20Num27 = Calendar27::all()->sum('c8pm_player');
		$gm20Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num27 = Calendar27::all()->sum('c9pm_gm');
		$player21Num27 = Calendar27::all()->sum('c9pm_player');
		$gm21Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num27 = Calendar27::all()->sum('c10pm_gm');
		$player22Num27 = Calendar27::all()->sum('c10pm_player');
		$gm22Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num27 = Calendar27::all()->sum('c11pm_gm');
		$player23Num27 = Calendar27::all()->sum('c11pm_player');
		$gm23Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num27 = Calendar27::all()->sum('c0pm_gm');
		$player24Num27 = Calendar27::all()->sum('c0pm_player');
		$gm24Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self27 = Calendar27::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');
		$calendar28 = Calendar28::where('user_id', $currentUser->id)->first();
		$gm1Num28 = Calendar28::all()->sum('c1am_gm');
		$player1Num28 = Calendar28::all()->sum('c1am_player');
		$gm1Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num28 = Calendar28::all()->sum('c2am_gm');
		$player2Num28 = Calendar28::all()->sum('c2am_player');
		$gm2Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num28 = Calendar28::all()->sum('c3am_gm');
		$player3Num28 = Calendar28::all()->sum('c3am_player');
		$gm3Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num28 = Calendar28::all()->sum('c4am_gm');
		$player4Num28 = Calendar28::all()->sum('c4am_player');
		$gm4Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num28 = Calendar28::all()->sum('c5am_gm');
		$player5Num28 = Calendar28::all()->sum('c5am_player');
		$gm5Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num28 = Calendar28::all()->sum('c6am_gm');
		$player6Num28 = Calendar28::all()->sum('c6am_player');
		$gm6Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num28 = Calendar28::all()->sum('c7am_gm');
		$player7Num28 = Calendar28::all()->sum('c7am_player');
		$gm7Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num28 = Calendar28::all()->sum('c8am_gm');
		$player8Num28 = Calendar28::all()->sum('c8am_player');
		$gm8Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num28 = Calendar28::all()->sum('c9am_gm');
		$player9Num28 = Calendar28::all()->sum('c9am_player');
		$gm9Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num28 = Calendar28::all()->sum('c10am_gm');
		$player10Num28 = Calendar28::all()->sum('c10am_player');
		$gm10Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num28 = Calendar28::all()->sum('c11am_gm');
		$player11Num28 = Calendar28::all()->sum('c11am_player');
		$gm11Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num28 = Calendar28::all()->sum('c12pm_gm');
		$player12Num28 = Calendar28::all()->sum('c12pm_player');
		$gm12Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num28 = Calendar28::all()->sum('c1pm_gm');
		$player13Num28 = Calendar28::all()->sum('c1pm_player');
		$gm13Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num28 = Calendar28::all()->sum('c2pm_gm');
		$player14Num28 = Calendar28::all()->sum('c2pm_player');
		$gm14Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num28 = Calendar28::all()->sum('c3pm_gm');
		$player15Num28 = Calendar28::all()->sum('c3pm_player');
		$gm15Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num28 = Calendar28::all()->sum('c4pm_gm');
		$player16Num28 = Calendar28::all()->sum('c4pm_player');
		$gm16Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num28 = Calendar28::all()->sum('c5pm_gm');
		$player17Num28 = Calendar28::all()->sum('c5pm_player');
		$gm17Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num28 = Calendar28::all()->sum('c6pm_gm');
		$player18Num28 = Calendar28::all()->sum('c6pm_player');
		$gm18Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num28 = Calendar28::all()->sum('c7pm_gm');
		$player19Num28 = Calendar28::all()->sum('c7pm_player');
		$gm19Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num28 = Calendar28::all()->sum('c8pm_gm');
		$player20Num28 = Calendar28::all()->sum('c8pm_player');
		$gm20Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num28 = Calendar28::all()->sum('c9pm_gm');
		$player21Num28 = Calendar28::all()->sum('c9pm_player');
		$gm21Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num28 = Calendar28::all()->sum('c10pm_gm');
		$player22Num28 = Calendar28::all()->sum('c10pm_player');
		$gm22Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num28 = Calendar28::all()->sum('c11pm_gm');
		$player23Num28 = Calendar28::all()->sum('c11pm_player');
		$gm23Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num28 = Calendar28::all()->sum('c0pm_gm');
		$player24Num28 = Calendar28::all()->sum('c0pm_player');
		$gm24Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self28 = Calendar28::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar29 = Calendar29::where('user_id', $currentUser->id)->first();
		$gm1Num29 = Calendar29::all()->sum('c1am_gm');
		$player1Num29 = Calendar29::all()->sum('c1am_player');
		$gm1Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num29 = Calendar29::all()->sum('c2am_gm');
		$player2Num29 = Calendar29::all()->sum('c2am_player');
		$gm2Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num29 = Calendar29::all()->sum('c3am_gm');
		$player3Num29 = Calendar29::all()->sum('c3am_player');
		$gm3Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num29 = Calendar29::all()->sum('c4am_gm');
		$player4Num29 = Calendar29::all()->sum('c4am_player');
		$gm4Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num29 = Calendar29::all()->sum('c5am_gm');
		$player5Num29 = Calendar29::all()->sum('c5am_player');
		$gm5Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num29 = Calendar29::all()->sum('c6am_gm');
		$player6Num29 = Calendar29::all()->sum('c6am_player');
		$gm6Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num29 = Calendar29::all()->sum('c7am_gm');
		$player7Num29 = Calendar29::all()->sum('c7am_player');
		$gm7Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num29 = Calendar29::all()->sum('c8am_gm');
		$player8Num29 = Calendar29::all()->sum('c8am_player');
		$gm8Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num29 = Calendar29::all()->sum('c9am_gm');
		$player9Num29 = Calendar29::all()->sum('c9am_player');
		$gm9Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num29 = Calendar29::all()->sum('c10am_gm');
		$player10Num29 = Calendar29::all()->sum('c10am_player');
		$gm10Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num29 = Calendar29::all()->sum('c11am_gm');
		$player11Num29 = Calendar29::all()->sum('c11am_player');
		$gm11Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num29 = Calendar29::all()->sum('c12pm_gm');
		$player12Num29 = Calendar29::all()->sum('c12pm_player');
		$gm12Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num29 = Calendar29::all()->sum('c1pm_gm');
		$player13Num29 = Calendar29::all()->sum('c1pm_player');
		$gm13Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num29 = Calendar29::all()->sum('c2pm_gm');
		$player14Num29 = Calendar29::all()->sum('c2pm_player');
		$gm14Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num29 = Calendar29::all()->sum('c3pm_gm');
		$player15Num29 = Calendar29::all()->sum('c3pm_player');
		$gm15Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num29 = Calendar29::all()->sum('c4pm_gm');
		$player16Num29 = Calendar29::all()->sum('c4pm_player');
		$gm16Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num29 = Calendar29::all()->sum('c5pm_gm');
		$player17Num29 = Calendar29::all()->sum('c5pm_player');
		$gm17Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num29 = Calendar29::all()->sum('c6pm_gm');
		$player18Num29 = Calendar29::all()->sum('c6pm_player');
		$gm18Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num29 = Calendar29::all()->sum('c7pm_gm');
		$player19Num29 = Calendar29::all()->sum('c7pm_player');
		$gm19Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num29 = Calendar29::all()->sum('c8pm_gm');
		$player20Num29 = Calendar29::all()->sum('c8pm_player');
		$gm20Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num29 = Calendar29::all()->sum('c9pm_gm');
		$player21Num29 = Calendar29::all()->sum('c9pm_player');
		$gm21Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num29 = Calendar29::all()->sum('c10pm_gm');
		$player22Num29 = Calendar29::all()->sum('c10pm_player');
		$gm22Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num29 = Calendar29::all()->sum('c11pm_gm');
		$player23Num29 = Calendar29::all()->sum('c11pm_player');
		$gm23Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num29 = Calendar29::all()->sum('c0pm_gm');
		$player24Num29 = Calendar29::all()->sum('c0pm_player');
		$gm24Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self29 = Calendar29::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar30 = Calendar30::where('user_id', $currentUser->id)->first();
		$gm1Num30 = Calendar30::all()->sum('c1am_gm');
		$player1Num30 = Calendar30::all()->sum('c1am_player');
		$gm1Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num30 = Calendar30::all()->sum('c2am_gm');
		$player2Num30 = Calendar30::all()->sum('c2am_player');
		$gm2Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num30 = Calendar30::all()->sum('c3am_gm');
		$player3Num30 = Calendar30::all()->sum('c3am_player');
		$gm3Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num30 = Calendar30::all()->sum('c4am_gm');
		$player4Num30 = Calendar30::all()->sum('c4am_player');
		$gm4Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num30 = Calendar30::all()->sum('c5am_gm');
		$player5Num30 = Calendar30::all()->sum('c5am_player');
		$gm5Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num30 = Calendar30::all()->sum('c6am_gm');
		$player6Num30 = Calendar30::all()->sum('c6am_player');
		$gm6Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num30 = Calendar30::all()->sum('c7am_gm');
		$player7Num30 = Calendar30::all()->sum('c7am_player');
		$gm7Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num30 = Calendar30::all()->sum('c8am_gm');
		$player8Num30 = Calendar30::all()->sum('c8am_player');
		$gm8Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num30 = Calendar30::all()->sum('c9am_gm');
		$player9Num30 = Calendar30::all()->sum('c9am_player');
		$gm9Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num30 = Calendar30::all()->sum('c10am_gm');
		$player10Num30 = Calendar30::all()->sum('c10am_player');
		$gm10Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num30 = Calendar30::all()->sum('c11am_gm');
		$player11Num30 = Calendar30::all()->sum('c11am_player');
		$gm11Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num30 = Calendar30::all()->sum('c12pm_gm');
		$player12Num30 = Calendar30::all()->sum('c12pm_player');
		$gm12Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num30 = Calendar30::all()->sum('c1pm_gm');
		$player13Num30 = Calendar30::all()->sum('c1pm_player');
		$gm13Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num30 = Calendar30::all()->sum('c2pm_gm');
		$player14Num30 = Calendar30::all()->sum('c2pm_player');
		$gm14Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num30 = Calendar30::all()->sum('c3pm_gm');
		$player15Num30 = Calendar30::all()->sum('c3pm_player');
		$gm15Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num30 = Calendar30::all()->sum('c4pm_gm');
		$player16Num30 = Calendar30::all()->sum('c4pm_player');
		$gm16Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num30 = Calendar30::all()->sum('c5pm_gm');
		$player17Num30 = Calendar30::all()->sum('c5pm_player');
		$gm17Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num30 = Calendar30::all()->sum('c6pm_gm');
		$player18Num30 = Calendar30::all()->sum('c6pm_player');
		$gm18Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num30 = Calendar30::all()->sum('c7pm_gm');
		$player19Num30 = Calendar30::all()->sum('c7pm_player');
		$gm19Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num30 = Calendar30::all()->sum('c8pm_gm');
		$player20Num30 = Calendar30::all()->sum('c8pm_player');
		$gm20Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num30 = Calendar30::all()->sum('c9pm_gm');
		$player21Num30 = Calendar30::all()->sum('c9pm_player');
		$gm21Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num30 = Calendar30::all()->sum('c10pm_gm');
		$player22Num30 = Calendar30::all()->sum('c10pm_player');
		$gm22Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num30 = Calendar30::all()->sum('c11pm_gm');
		$player23Num30 = Calendar30::all()->sum('c11pm_player');
		$gm23Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num30 = Calendar30::all()->sum('c0pm_gm');
		$player24Num30 = Calendar30::all()->sum('c0pm_player');
		$gm24Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self30 = Calendar30::where([
		['user_id', $currentUser->id],
		['c0pm_player', '=', '1']
		])->value('c0pm_playeryes');

		$calendar31 = Calendar31::where('user_id', $currentUser->id)->first();
		$gm1Num31 = Calendar31::all()->sum('c1am_gm');
		$player1Num31 = Calendar31::all()->sum('c1am_player');
		$gm1Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c1am_gm', '=', '1']
		])->value('c1am_gmyes');
		$player1Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c1am_player', '=', '1']
		])->value('c1am_playeryes');
		$gm2Num31 = Calendar31::all()->sum('c2am_gm');
		$player2Num31 = Calendar31::all()->sum('c2am_player');
		$gm2Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c2am_gm', '=', '1']
		])->value('c2am_gmyes');
		$player2Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c2am_player', '=', '1']
		])->value('c2am_playeryes');
		$gm3Num31 = Calendar31::all()->sum('c3am_gm');
		$player3Num31 = Calendar31::all()->sum('c3am_player');
		$gm3Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c3am_gm', '=', '1']
		])->value('c3am_gmyes');
		$player3Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c3am_player', '=', '1']
		])->value('c3am_playeryes');
		$gm4Num31 = Calendar31::all()->sum('c4am_gm');
		$player4Num31 = Calendar31::all()->sum('c4am_player');
		$gm4Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c4am_gm', '=', '1']
		])->value('c4am_gmyes');
		$player4Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c4am_player', '=', '1']
		])->value('c4am_playeryes');
		$gm5Num31 = Calendar31::all()->sum('c5am_gm');
		$player5Num31 = Calendar31::all()->sum('c5am_player');
		$gm5Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c5am_gm', '=', '1']
		])->value('c5am_gmyes');
		$player5Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c5am_player', '=', '1']
		])->value('c5am_playeryes');
		$gm6Num31 = Calendar31::all()->sum('c6am_gm');
		$player6Num31 = Calendar31::all()->sum('c6am_player');
		$gm6Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c6am_gm', '=', '1']
		])->value('c6am_gmyes');
		$player6Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c6am_player', '=', '1']
		])->value('c6am_playeryes');
		$gm7Num31 = Calendar31::all()->sum('c7am_gm');
		$player7Num31 = Calendar31::all()->sum('c7am_player');
		$gm7Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c7am_gm', '=', '1']
		])->value('c7am_gmyes');
		$player7Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c7am_player', '=', '1']
		])->value('c7am_playeryes');
		$gm8Num31 = Calendar31::all()->sum('c8am_gm');
		$player8Num31 = Calendar31::all()->sum('c8am_player');
		$gm8Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c8am_gm', '=', '1']
		])->value('c8am_gmyes');
		$player8Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c8am_player', '=', '1']
		])->value('c8am_playeryes');
		$gm9Num31 = Calendar31::all()->sum('c9am_gm');
		$player9Num31 = Calendar31::all()->sum('c9am_player');
		$gm9Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c9am_gm', '=', '1']
		])->value('c9am_gmyes');
		$player9Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c9am_player', '=', '1']
		])->value('c9am_playeryes');
		$gm10Num31 = Calendar31::all()->sum('c10am_gm');
		$player10Num31 = Calendar31::all()->sum('c10am_player');
		$gm10Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c10am_gm', '=', '1']
		])->value('c10am_gmyes');
		$player10Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c10am_player', '=', '1']
		])->value('c10am_playeryes');
		$gm11Num31 = Calendar31::all()->sum('c11am_gm');
		$player11Num31 = Calendar31::all()->sum('c11am_player');
		$gm11Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c11am_gm', '=', '1']
		])->value('c11am_gmyes');
		$player11Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c11am_player', '=', '1']
		])->value('c11am_playeryes');
		$gm12Num31 = Calendar31::all()->sum('c12pm_gm');
		$player12Num31 = Calendar31::all()->sum('c12pm_player');
		$gm12Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c12pm_gm', '=', '1']
		])->value('c12pm_gmyes');
		$player12Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c12pm_player', '=', '1']
		])->value('c12pm_playeryes');
		$gm13Num31 = Calendar31::all()->sum('c1pm_gm');
		$player13Num31 = Calendar31::all()->sum('c1pm_player');
		$gm13Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c1pm_gm', '=', '1']
		])->value('c1pm_gmyes');
		$player13Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c1pm_player', '=', '1']
		])->value('c1pm_playeryes');
		$gm14Num31 = Calendar31::all()->sum('c2pm_gm');
		$player14Num31 = Calendar31::all()->sum('c2pm_player');
		$gm14Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c2pm_gm', '=', '1']
		])->value('c2pm_gmyes');
		$player14Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c2pm_player', '=', '1']
		])->value('c2pm_playeryes');
		$gm15Num31 = Calendar31::all()->sum('c3pm_gm');
		$player15Num31 = Calendar31::all()->sum('c3pm_player');
		$gm15Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c3pm_gm', '=', '1']
		])->value('c3pm_gmyes');
		$player15Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c3pm_player', '=', '1']
		])->value('c3pm_playeryes');
		$gm16Num31 = Calendar31::all()->sum('c4pm_gm');
		$player16Num31 = Calendar31::all()->sum('c4pm_player');
		$gm16Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c4pm_gm', '=', '1']
		])->value('c4pm_gmyes');
		$player16Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c4pm_player', '=', '1']
		])->value('c4pm_playeryes');
		$gm17Num31 = Calendar31::all()->sum('c5pm_gm');
		$player17Num31 = Calendar31::all()->sum('c5pm_player');
		$gm17Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c5pm_gm', '=', '1']
		])->value('c5pm_gmyes');
		$player17Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c5pm_player', '=', '1']
		])->value('c5pm_playeryes');
		$gm18Num31 = Calendar31::all()->sum('c6pm_gm');
		$player18Num31 = Calendar31::all()->sum('c6pm_player');
		$gm18Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c6pm_gm', '=', '1']
		])->value('c6pm_gmyes');
		$player18Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c6pm_player', '=', '1']
		])->value('c6pm_playeryes');
		$gm19Num31 = Calendar31::all()->sum('c7pm_gm');
		$player19Num31 = Calendar31::all()->sum('c7pm_player');
		$gm19Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c7pm_gm', '=', '1']
		])->value('c7pm_gmyes');
		$player19Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c7pm_player', '=', '1']
		])->value('c7pm_playeryes');
		$gm20Num31 = Calendar31::all()->sum('c8pm_gm');
		$player20Num31 = Calendar31::all()->sum('c8pm_player');
		$gm20Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c8pm_gm', '=', '1']
		])->value('c8pm_gmyes');
		$player20Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c8pm_player', '=', '1']
		])->value('c8pm_playeryes');
		$gm21Num31 = Calendar31::all()->sum('c9pm_gm');
		$player21Num31 = Calendar31::all()->sum('c9pm_player');
		$gm21Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c9pm_gm', '=', '1']
		])->value('c9pm_gmyes');
		$player21Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c9pm_player', '=', '1']
		])->value('c9pm_playeryes');
		$gm22Num31 = Calendar31::all()->sum('c10pm_gm');
		$player22Num31 = Calendar31::all()->sum('c10pm_player');
		$gm22Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c10pm_gm', '=', '1']
		])->value('c10pm_gmyes');
		$player22Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c10pm_player', '=', '1']
		])->value('c10pm_playeryes');
		$gm23Num31 = Calendar31::all()->sum('c11pm_gm');
		$player23Num31 = Calendar31::all()->sum('c11pm_player');
		$gm23Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c11pm_gm', '=', '1']
		])->value('c11pm_gmyes');
		$player23Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c11pm_player', '=', '1']
		])->value('c11pm_playeryes');
		$gm24Num31 = Calendar31::all()->sum('c0pm_gm');
		$player24Num31 = Calendar31::all()->sum('c0pm_player');
		$gm24Self31 = Calendar31::where([
		['user_id', $currentUser->id],
		['c0pm_gm', '=', '1']
		])->value('c0pm_gmyes');
		$player24Self31 = Calendar31::where([
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
			"player24Self4" => $player24Self4,
			"calendar5" => $calendar5, 
			"gm1Num5" => $gm1Num5,
			"player1Num5" => $player1Num5,
			"gm1Self5" => $gm1Self5,
			"player1Self5" => $player1Self5,
			"gm2Num5" => $gm2Num5,
			"player2Num5" => $player2Num5,
			"gm2Self5" => $gm2Self5,
			"player2Self5" => $player2Self5,
			"gm3Num5" => $gm3Num5,
			"player3Num5" => $player3Num5,
			"gm3Self5" => $gm3Self5,
			"player3Self5" => $player3Self5,
			"gm4Num5" => $gm4Num5,
			"player4Num5" => $player4Num5,
			"gm4Self5" => $gm4Self5,
			"player4Self5" => $player4Self5,
			"gm5Num5" => $gm5Num5,
			"player5Num5" => $player5Num5,
			"gm5Self5" => $gm5Self5,
			"player5Self5" => $player5Self5,
			"gm6Num5" => $gm6Num5,
			"player6Num5" => $player6Num5,
			"gm6Self5" => $gm6Self5,
			"player6Self5" => $player6Self5,
			"gm7Num5" => $gm7Num5,
			"player7Num5" => $player7Num5,
			"gm7Self5" => $gm7Self5,
			"player7Self5" => $player7Self5,
			"gm8Num5" => $gm8Num5,
			"player8Num5" => $player8Num5,
			"gm8Self5" => $gm8Self5,
			"player8Self5" => $player8Self5,
			"gm9Num5" => $gm9Num5,
			"player9Num5" => $player9Num5,
			"gm9Self5" => $gm9Self5,
			"player9Self5" => $player9Self5,
			"gm10Num5" => $gm10Num5,
			"player10Num5" => $player10Num5,
			"gm10Self5" => $gm10Self5,
			"player10Self5" => $player10Self5,
			"gm11Num5" => $gm11Num5,
			"player11Num5" => $player11Num5,
			"gm11Self5" => $gm11Self5,
			"player11Self5" => $player11Self5,
			"gm12Num5" => $gm12Num5,
			"player12Num5" => $player12Num5,
			"gm12Self5" => $gm12Self5,
			"player12Self5" => $player12Self5,
			"gm13Num5" => $gm13Num5,
			"player13Num5" => $player13Num5,
			"gm13Self5" => $gm13Self5,
			"player13Self5" => $player13Self5,
			"gm14Num5" => $gm14Num5,
			"player14Num5" => $player14Num5,
			"gm14Self5" => $gm14Self5,
			"player14Self5" => $player14Self5,
			"gm15Num5" => $gm15Num5,
			"player15Num5" => $player15Num5,
			"gm15Self5" => $gm15Self5,
			"player15Self5" => $player15Self5,
			"gm16Num5" => $gm16Num5,
			"player16Num5" => $player16Num5,
			"gm16Self5" => $gm16Self5,
			"player16Self5" => $player16Self5,
			"gm17Num5" => $gm17Num5,
			"player17Num5" => $player17Num5,
			"gm17Self5" => $gm17Self5,
			"player17Self5" => $player17Self5,
			"gm18Num5" => $gm18Num5,
			"player18Num5" => $player18Num5,
			"gm18Self5" => $gm18Self5,
			"player18Self5" => $player18Self5,
			"gm19Num5" => $gm19Num5,
			"player19Num5" => $player19Num5,
			"gm19Self5" => $gm19Self5,
			"player19Self5" => $player19Self5,
			"gm20Num5" => $gm20Num5,
			"player20Num5" => $player20Num5,
			"gm20Self5" => $gm20Self5,
			"player20Self5" => $player20Self5,
			"gm21Num5" => $gm21Num5,
			"player21Num5" => $player21Num5,
			"gm21Self5" => $gm21Self5,
			"player21Self5" => $player21Self5,
			"gm22Num5" => $gm22Num5,
			"player22Num5" => $player22Num5,
			"gm22Self5" => $gm22Self5,
			"player22Self5" => $player22Self5,
			"gm23Num5" => $gm23Num5,
			"player23Num5" => $player23Num5,
			"gm23Self5" => $gm23Self5,
			"player23Self5" => $player23Self5,
			"gm24Num5" => $gm24Num5,
			"player24Num5" => $player24Num5,
			"gm24Self5" => $gm24Self5,
			"player24Self5" => $player24Self5,
			"calendar6" => $calendar6, 
			"gm1Num6" => $gm1Num6,
			"player1Num6" => $player1Num6,
			"gm1Self6" => $gm1Self6,
			"player1Self6" => $player1Self6,
			"gm2Num6" => $gm2Num6,
			"player2Num6" => $player2Num6,
			"gm2Self6" => $gm2Self6,
			"player2Self6" => $player2Self6,
			"gm3Num6" => $gm3Num6,
			"player3Num6" => $player3Num6,
			"gm3Self6" => $gm3Self6,
			"player3Self6" => $player3Self6,
			"gm4Num6" => $gm4Num6,
			"player4Num6" => $player4Num6,
			"gm4Self6" => $gm4Self6,
			"player4Self6" => $player4Self6,
			"gm5Num6" => $gm5Num6,
			"player5Num6" => $player5Num6,
			"gm5Self6" => $gm5Self6,
			"player5Self6" => $player5Self6,
			"gm6Num6" => $gm6Num6,
			"player6Num6" => $player6Num6,
			"gm6Self6" => $gm6Self6,
			"player6Self6" => $player6Self6,
			"gm7Num6" => $gm7Num6,
			"player7Num6" => $player7Num6,
			"gm7Self6" => $gm7Self6,
			"player7Self6" => $player7Self6,
			"gm8Num6" => $gm8Num6,
			"player8Num6" => $player8Num6,
			"gm8Self6" => $gm8Self6,
			"player8Self6" => $player8Self6,
			"gm9Num6" => $gm9Num6,
			"player9Num6" => $player9Num6,
			"gm9Self6" => $gm9Self6,
			"player9Self6" => $player9Self6,
			"gm10Num6" => $gm10Num6,
			"player10Num6" => $player10Num6,
			"gm10Self6" => $gm10Self6,
			"player10Self6" => $player10Self6,
			"gm11Num6" => $gm11Num6,
			"player11Num6" => $player11Num6,
			"gm11Self6" => $gm11Self6,
			"player11Self6" => $player11Self6,
			"gm12Num6" => $gm12Num6,
			"player12Num6" => $player12Num6,
			"gm12Self6" => $gm12Self6,
			"player12Self6" => $player12Self6,
			"gm13Num6" => $gm13Num6,
			"player13Num6" => $player13Num6,
			"gm13Self6" => $gm13Self6,
			"player13Self6" => $player13Self6,
			"gm14Num6" => $gm14Num6,
			"player14Num6" => $player14Num6,
			"gm14Self6" => $gm14Self6,
			"player14Self6" => $player14Self6,
			"gm15Num6" => $gm15Num6,
			"player15Num6" => $player15Num6,
			"gm15Self6" => $gm15Self6,
			"player15Self6" => $player15Self6,
			"gm16Num6" => $gm16Num6,
			"player16Num6" => $player16Num6,
			"gm16Self6" => $gm16Self6,
			"player16Self6" => $player16Self6,
			"gm17Num6" => $gm17Num6,
			"player17Num6" => $player17Num6,
			"gm17Self6" => $gm17Self6,
			"player17Self6" => $player17Self6,
			"gm18Num6" => $gm18Num6,
			"player18Num6" => $player18Num6,
			"gm18Self6" => $gm18Self6,
			"player18Self6" => $player18Self6,
			"gm19Num6" => $gm19Num6,
			"player19Num6" => $player19Num6,
			"gm19Self6" => $gm19Self6,
			"player19Self6" => $player19Self6,
			"gm20Num6" => $gm20Num6,
			"player20Num6" => $player20Num6,
			"gm20Self6" => $gm20Self6,
			"player20Self6" => $player20Self6,
			"gm21Num6" => $gm21Num6,
			"player21Num6" => $player21Num6,
			"gm21Self6" => $gm21Self6,
			"player21Self6" => $player21Self6,
			"gm22Num6" => $gm22Num6,
			"player22Num6" => $player22Num6,
			"gm22Self6" => $gm22Self6,
			"player22Self6" => $player22Self6,
			"gm23Num6" => $gm23Num6,
			"player23Num6" => $player23Num6,
			"gm23Self6" => $gm23Self6,
			"player23Self6" => $player23Self6,
			"gm24Num6" => $gm24Num6,
			"player24Num6" => $player24Num6,
			"gm24Self6" => $gm24Self6,
			"player24Self6" => $player24Self6,
			"calendar7" => $calendar7, 
			"gm1Num7" => $gm1Num7,
			"player1Num7" => $player1Num7,
			"gm1Self7" => $gm1Self7,
			"player1Self7" => $player1Self7,
			"gm2Num7" => $gm2Num7,
			"player2Num7" => $player2Num7,
			"gm2Self7" => $gm2Self7,
			"player2Self7" => $player2Self7,
			"gm3Num7" => $gm3Num7,
			"player3Num7" => $player3Num7,
			"gm3Self7" => $gm3Self7,
			"player3Self7" => $player3Self7,
			"gm4Num7" => $gm4Num7,
			"player4Num7" => $player4Num7,
			"gm4Self7" => $gm4Self7,
			"player4Self7" => $player4Self7,
			"gm5Num7" => $gm5Num7,
			"player5Num7" => $player5Num7,
			"gm5Self7" => $gm5Self7,
			"player5Self7" => $player5Self7,
			"gm6Num7" => $gm6Num7,
			"player6Num7" => $player6Num7,
			"gm6Self7" => $gm6Self7,
			"player6Self7" => $player6Self7,
			"gm7Num7" => $gm7Num7,
			"player7Num7" => $player7Num7,
			"gm7Self7" => $gm7Self7,
			"player7Self7" => $player7Self7,
			"gm8Num7" => $gm8Num7,
			"player8Num7" => $player8Num7,
			"gm8Self7" => $gm8Self7,
			"player8Self7" => $player8Self7,
			"gm9Num7" => $gm9Num7,
			"player9Num7" => $player9Num7,
			"gm9Self7" => $gm9Self7,
			"player9Self7" => $player9Self7,
			"gm10Num7" => $gm10Num7,
			"player10Num7" => $player10Num7,
			"gm10Self7" => $gm10Self7,
			"player10Self7" => $player10Self7,
			"gm11Num7" => $gm11Num7,
			"player11Num7" => $player11Num7,
			"gm11Self7" => $gm11Self7,
			"player11Self7" => $player11Self7,
			"gm12Num7" => $gm12Num7,
			"player12Num7" => $player12Num7,
			"gm12Self7" => $gm12Self7,
			"player12Self7" => $player12Self7,
			"gm13Num7" => $gm13Num7,
			"player13Num7" => $player13Num7,
			"gm13Self7" => $gm13Self7,
			"player13Self7" => $player13Self7,
			"gm14Num7" => $gm14Num7,
			"player14Num7" => $player14Num7,
			"gm14Self7" => $gm14Self7,
			"player14Self7" => $player14Self7,
			"gm15Num7" => $gm15Num7,
			"player15Num7" => $player15Num7,
			"gm15Self7" => $gm15Self7,
			"player15Self7" => $player15Self7,
			"gm16Num7" => $gm16Num7,
			"player16Num7" => $player16Num7,
			"gm16Self7" => $gm16Self7,
			"player16Self7" => $player16Self7,
			"gm17Num7" => $gm17Num7,
			"player17Num7" => $player17Num7,
			"gm17Self7" => $gm17Self7,
			"player17Self7" => $player17Self7,
			"gm18Num7" => $gm18Num7,
			"player18Num7" => $player18Num7,
			"gm18Self7" => $gm18Self7,
			"player18Self7" => $player18Self7,
			"gm19Num7" => $gm19Num7,
			"player19Num7" => $player19Num7,
			"gm19Self7" => $gm19Self7,
			"player19Self7" => $player19Self7,
			"gm20Num7" => $gm20Num7,
			"player20Num7" => $player20Num7,
			"gm20Self7" => $gm20Self7,
			"player20Self7" => $player20Self7,
			"gm21Num7" => $gm21Num7,
			"player21Num7" => $player21Num7,
			"gm21Self7" => $gm21Self7,
			"player21Self7" => $player21Self7,
			"gm22Num7" => $gm22Num7,
			"player22Num7" => $player22Num7,
			"gm22Self7" => $gm22Self7,
			"player22Self7" => $player22Self7,
			"gm23Num7" => $gm23Num7,
			"player23Num7" => $player23Num7,
			"gm23Self7" => $gm23Self7,
			"player23Self7" => $player23Self7,
			"gm24Num7" => $gm24Num7,
			"player24Num7" => $player24Num7,
			"gm24Self7" => $gm24Self7,
			"player24Self7" => $player24Self7,
			"calendar8" => $calendar8, 
			"gm1Num8" => $gm1Num8,
			"player1Num8" => $player1Num8,
			"gm1Self8" => $gm1Self8,
			"player1Self8" => $player1Self8,
			"gm2Num8" => $gm2Num8,
			"player2Num8" => $player2Num8,
			"gm2Self8" => $gm2Self8,
			"player2Self8" => $player2Self8,
			"gm3Num8" => $gm3Num8,
			"player3Num8" => $player3Num8,
			"gm3Self8" => $gm3Self8,
			"player3Self8" => $player3Self8,
			"gm4Num8" => $gm4Num8,
			"player4Num8" => $player4Num8,
			"gm4Self8" => $gm4Self8,
			"player4Self8" => $player4Self8,
			"gm5Num8" => $gm5Num8,
			"player5Num8" => $player5Num8,
			"gm5Self8" => $gm5Self8,
			"player5Self8" => $player5Self8,
			"gm6Num8" => $gm6Num8,
			"player6Num8" => $player6Num8,
			"gm6Self8" => $gm6Self8,
			"player6Self8" => $player6Self8,
			"gm7Num8" => $gm7Num8,
			"player7Num8" => $player7Num8,
			"gm7Self8" => $gm7Self8,
			"player7Self8" => $player7Self8,
			"gm8Num8" => $gm8Num8,
			"player8Num8" => $player8Num8,
			"gm8Self8" => $gm8Self8,
			"player8Self8" => $player8Self8,
			"gm9Num8" => $gm9Num8,
			"player9Num8" => $player9Num8,
			"gm9Self8" => $gm9Self8,
			"player9Self8" => $player9Self8,
			"gm10Num8" => $gm10Num8,
			"player10Num8" => $player10Num8,
			"gm10Self8" => $gm10Self8,
			"player10Self8" => $player10Self8,
			"gm11Num8" => $gm11Num8,
			"player11Num8" => $player11Num8,
			"gm11Self8" => $gm11Self8,
			"player11Self8" => $player11Self8,
			"gm12Num8" => $gm12Num8,
			"player12Num8" => $player12Num8,
			"gm12Self8" => $gm12Self8,
			"player12Self8" => $player12Self8,
			"gm13Num8" => $gm13Num8,
			"player13Num8" => $player13Num8,
			"gm13Self8" => $gm13Self8,
			"player13Self8" => $player13Self8,
			"gm14Num8" => $gm14Num8,
			"player14Num8" => $player14Num8,
			"gm14Self8" => $gm14Self8,
			"player14Self8" => $player14Self8,
			"gm15Num8" => $gm15Num8,
			"player15Num8" => $player15Num8,
			"gm15Self8" => $gm15Self8,
			"player15Self8" => $player15Self8,
			"gm16Num8" => $gm16Num8,
			"player16Num8" => $player16Num8,
			"gm16Self8" => $gm16Self8,
			"player16Self8" => $player16Self8,
			"gm17Num8" => $gm17Num8,
			"player17Num8" => $player17Num8,
			"gm17Self8" => $gm17Self8,
			"player17Self8" => $player17Self8,
			"gm18Num8" => $gm18Num8,
			"player18Num8" => $player18Num8,
			"gm18Self8" => $gm18Self8,
			"player18Self8" => $player18Self8,
			"gm19Num8" => $gm19Num8,
			"player19Num8" => $player19Num8,
			"gm19Self8" => $gm19Self8,
			"player19Self8" => $player19Self8,
			"gm20Num8" => $gm20Num8,
			"player20Num8" => $player20Num8,
			"gm20Self8" => $gm20Self8,
			"player20Self8" => $player20Self8,
			"gm21Num8" => $gm21Num8,
			"player21Num8" => $player21Num8,
			"gm21Self8" => $gm21Self8,
			"player21Self8" => $player21Self8,
			"gm22Num8" => $gm22Num8,
			"player22Num8" => $player22Num8,
			"gm22Self8" => $gm22Self8,
			"player22Self8" => $player22Self8,
			"gm23Num8" => $gm23Num8,
			"player23Num8" => $player23Num8,
			"gm23Self8" => $gm23Self8,
			"player23Self8" => $player23Self8,
			"gm24Num8" => $gm24Num8,
			"player24Num8" => $player24Num8,
			"gm24Self8" => $gm24Self8,
			"player24Self8" => $player24Self8,
			"calendar9" => $calendar9, 
			"gm1Num9" => $gm1Num9,
			"player1Num9" => $player1Num9,
			"gm1Self9" => $gm1Self9,
			"player1Self9" => $player1Self9,
			"gm2Num9" => $gm2Num9,
			"player2Num9" => $player2Num9,
			"gm2Self9" => $gm2Self9,
			"player2Self9" => $player2Self9,
			"gm3Num9" => $gm3Num9,
			"player3Num9" => $player3Num9,
			"gm3Self9" => $gm3Self9,
			"player3Self9" => $player3Self9,
			"gm4Num9" => $gm4Num9,
			"player4Num9" => $player4Num9,
			"gm4Self9" => $gm4Self9,
			"player4Self9" => $player4Self9,
			"gm5Num9" => $gm5Num9,
			"player5Num9" => $player5Num9,
			"gm5Self9" => $gm5Self9,
			"player5Self9" => $player5Self9,
			"gm6Num9" => $gm6Num9,
			"player6Num9" => $player6Num9,
			"gm6Self9" => $gm6Self9,
			"player6Self9" => $player6Self9,
			"gm7Num9" => $gm7Num9,
			"player7Num9" => $player7Num9,
			"gm7Self9" => $gm7Self9,
			"player7Self9" => $player7Self9,
			"gm8Num9" => $gm8Num9,
			"player8Num9" => $player8Num9,
			"gm8Self9" => $gm8Self9,
			"player8Self9" => $player8Self9,
			"gm9Num9" => $gm9Num9,
			"player9Num9" => $player9Num9,
			"gm9Self9" => $gm9Self9,
			"player9Self9" => $player9Self9,
			"gm10Num9" => $gm10Num9,
			"player10Num9" => $player10Num9,
			"gm10Self9" => $gm10Self9,
			"player10Self9" => $player10Self9,
			"gm11Num9" => $gm11Num9,
			"player11Num9" => $player11Num9,
			"gm11Self9" => $gm11Self9,
			"player11Self9" => $player11Self9,
			"gm12Num9" => $gm12Num9,
			"player12Num9" => $player12Num9,
			"gm12Self9" => $gm12Self9,
			"player12Self9" => $player12Self9,
			"gm13Num9" => $gm13Num9,
			"player13Num9" => $player13Num9,
			"gm13Self9" => $gm13Self9,
			"player13Self9" => $player13Self9,
			"gm14Num9" => $gm14Num9,
			"player14Num9" => $player14Num9,
			"gm14Self9" => $gm14Self9,
			"player14Self9" => $player14Self9,
			"gm15Num9" => $gm15Num9,
			"player15Num9" => $player15Num9,
			"gm15Self9" => $gm15Self9,
			"player15Self9" => $player15Self9,
			"gm16Num9" => $gm16Num9,
			"player16Num9" => $player16Num9,
			"gm16Self9" => $gm16Self9,
			"player16Self9" => $player16Self9,
			"gm17Num9" => $gm17Num9,
			"player17Num9" => $player17Num9,
			"gm17Self9" => $gm17Self9,
			"player17Self9" => $player17Self9,
			"gm18Num9" => $gm18Num9,
			"player18Num9" => $player18Num9,
			"gm18Self9" => $gm18Self9,
			"player18Self9" => $player18Self9,
			"gm19Num9" => $gm19Num9,
			"player19Num9" => $player19Num9,
			"gm19Self9" => $gm19Self9,
			"player19Self9" => $player19Self9,
			"gm20Num9" => $gm20Num9,
			"player20Num9" => $player20Num9,
			"gm20Self9" => $gm20Self9,
			"player20Self9" => $player20Self9,
			"gm21Num9" => $gm21Num9,
			"player21Num9" => $player21Num9,
			"gm21Self9" => $gm21Self9,
			"player21Self9" => $player21Self9,
			"gm22Num9" => $gm22Num9,
			"player22Num9" => $player22Num9,
			"gm22Self9" => $gm22Self9,
			"player22Self9" => $player22Self9,
			"gm23Num9" => $gm23Num9,
			"player23Num9" => $player23Num9,
			"gm23Self9" => $gm23Self9,
			"player23Self9" => $player23Self9,
			"gm24Num9" => $gm24Num9,
			"player24Num9" => $player24Num9,
			"gm24Self9" => $gm24Self9,
			"player24Self9" => $player24Self9,
			"calendar10" => $calendar10, 
			"gm1Num10" => $gm1Num10,
			"player1Num10" => $player1Num10,
			"gm1Self10" => $gm1Self10,
			"player1Self10" => $player1Self10,
			"gm2Num10" => $gm2Num10,
			"player2Num10" => $player2Num10,
			"gm2Self10" => $gm2Self10,
			"player2Self10" => $player2Self10,
			"gm3Num10" => $gm3Num10,
			"player3Num10" => $player3Num10,
			"gm3Self10" => $gm3Self10,
			"player3Self10" => $player3Self10,
			"gm4Num10" => $gm4Num10,
			"player4Num10" => $player4Num10,
			"gm4Self10" => $gm4Self10,
			"player4Self10" => $player4Self10,
			"gm5Num10" => $gm5Num10,
			"player5Num10" => $player5Num10,
			"gm5Self10" => $gm5Self10,
			"player5Self10" => $player5Self10,
			"gm6Num10" => $gm6Num10,
			"player6Num10" => $player6Num10,
			"gm6Self10" => $gm6Self10,
			"player6Self10" => $player6Self10,
			"gm7Num10" => $gm7Num10,
			"player7Num10" => $player7Num10,
			"gm7Self10" => $gm7Self10,
			"player7Self10" => $player7Self10,
			"gm8Num10" => $gm8Num10,
			"player8Num10" => $player8Num10,
			"gm8Self10" => $gm8Self10,
			"player8Self10" => $player8Self10,
			"gm9Num10" => $gm9Num10,
			"player9Num10" => $player9Num10,
			"gm9Self10" => $gm9Self10,
			"player9Self10" => $player9Self10,
			"gm10Num10" => $gm10Num10,
			"player10Num10" => $player10Num10,
			"gm10Self10" => $gm10Self10,
			"player10Self10" => $player10Self10,
			"gm11Num10" => $gm11Num10,
			"player11Num10" => $player11Num10,
			"gm11Self10" => $gm11Self10,
			"player11Self10" => $player11Self10,
			"gm12Num10" => $gm12Num10,
			"player12Num10" => $player12Num10,
			"gm12Self10" => $gm12Self10,
			"player12Self10" => $player12Self10,
			"gm13Num10" => $gm13Num10,
			"player13Num10" => $player13Num10,
			"gm13Self10" => $gm13Self10,
			"player13Self10" => $player13Self10,
			"gm14Num10" => $gm14Num10,
			"player14Num10" => $player14Num10,
			"gm14Self10" => $gm14Self10,
			"player14Self10" => $player14Self10,
			"gm15Num10" => $gm15Num10,
			"player15Num10" => $player15Num10,
			"gm15Self10" => $gm15Self10,
			"player15Self10" => $player15Self10,
			"gm16Num10" => $gm16Num10,
			"player16Num10" => $player16Num10,
			"gm16Self10" => $gm16Self10,
			"player16Self10" => $player16Self10,
			"gm17Num10" => $gm17Num10,
			"player17Num10" => $player17Num10,
			"gm17Self10" => $gm17Self10,
			"player17Self10" => $player17Self10,
			"gm18Num10" => $gm18Num10,
			"player18Num10" => $player18Num10,
			"gm18Self10" => $gm18Self10,
			"player18Self10" => $player18Self10,
			"gm19Num10" => $gm19Num10,
			"player19Num10" => $player19Num10,
			"gm19Self10" => $gm19Self10,
			"player19Self10" => $player19Self10,
			"gm20Num10" => $gm20Num10,
			"player20Num10" => $player20Num10,
			"gm20Self10" => $gm20Self10,
			"player20Self10" => $player20Self10,
			"gm21Num10" => $gm21Num10,
			"player21Num10" => $player21Num10,
			"gm21Self10" => $gm21Self10,
			"player21Self10" => $player21Self10,
			"gm22Num10" => $gm22Num10,
			"player22Num10" => $player22Num10,
			"gm22Self10" => $gm22Self10,
			"player22Self10" => $player22Self10,
			"gm23Num10" => $gm23Num10,
			"player23Num10" => $player23Num10,
			"gm23Self10" => $gm23Self10,
			"player23Self10" => $player23Self10,
			"gm24Num10" => $gm24Num10,
			"player24Num10" => $player24Num10,
			"gm24Self10" => $gm24Self10,
			"player24Self10" => $player24Self10,
			"calendar11" => $calendar11, 
			"gm1Num11" => $gm1Num11,
			"player1Num11" => $player1Num11,
			"gm1Self11" => $gm1Self11,
			"player1Self11" => $player1Self11,
			"gm2Num11" => $gm2Num11,
			"player2Num11" => $player2Num11,
			"gm2Self11" => $gm2Self11,
			"player2Self11" => $player2Self11,
			"gm3Num11" => $gm3Num11,
			"player3Num11" => $player3Num11,
			"gm3Self11" => $gm3Self11,
			"player3Self11" => $player3Self11,
			"gm4Num11" => $gm4Num11,
			"player4Num11" => $player4Num11,
			"gm4Self11" => $gm4Self11,
			"player4Self11" => $player4Self11,
			"gm5Num11" => $gm5Num11,
			"player5Num11" => $player5Num11,
			"gm5Self11" => $gm5Self11,
			"player5Self11" => $player5Self11,
			"gm6Num11" => $gm6Num11,
			"player6Num11" => $player6Num11,
			"gm6Self11" => $gm6Self11,
			"player6Self11" => $player6Self11,
			"gm7Num11" => $gm7Num11,
			"player7Num11" => $player7Num11,
			"gm7Self11" => $gm7Self11,
			"player7Self11" => $player7Self11,
			"gm8Num11" => $gm8Num11,
			"player8Num11" => $player8Num11,
			"gm8Self11" => $gm8Self11,
			"player8Self11" => $player8Self11,
			"gm9Num11" => $gm9Num11,
			"player9Num11" => $player9Num11,
			"gm9Self11" => $gm9Self11,
			"player9Self11" => $player9Self11,
			"gm10Num11" => $gm10Num11,
			"player10Num11" => $player10Num11,
			"gm10Self11" => $gm10Self11,
			"player10Self11" => $player10Self11,
			"gm11Num11" => $gm11Num11,
			"player11Num11" => $player11Num11,
			"gm11Self11" => $gm11Self11,
			"player11Self11" => $player11Self11,
			"gm12Num11" => $gm12Num11,
			"player12Num11" => $player12Num11,
			"gm12Self11" => $gm12Self11,
			"player12Self11" => $player12Self11,
			"gm13Num11" => $gm13Num11,
			"player13Num11" => $player13Num11,
			"gm13Self11" => $gm13Self11,
			"player13Self11" => $player13Self11,
			"gm14Num11" => $gm14Num11,
			"player14Num11" => $player14Num11,
			"gm14Self11" => $gm14Self11,
			"player14Self11" => $player14Self11,
			"gm15Num11" => $gm15Num11,
			"player15Num11" => $player15Num11,
			"gm15Self11" => $gm15Self11,
			"player15Self11" => $player15Self11,
			"gm16Num11" => $gm16Num11,
			"player16Num11" => $player16Num11,
			"gm16Self11" => $gm16Self11,
			"player16Self11" => $player16Self11,
			"gm17Num11" => $gm17Num11,
			"player17Num11" => $player17Num11,
			"gm17Self11" => $gm17Self11,
			"player17Self11" => $player17Self11,
			"gm18Num11" => $gm18Num11,
			"player18Num11" => $player18Num11,
			"gm18Self11" => $gm18Self11,
			"player18Self11" => $player18Self11,
			"gm19Num11" => $gm19Num11,
			"player19Num11" => $player19Num11,
			"gm19Self11" => $gm19Self11,
			"player19Self11" => $player19Self11,
			"gm20Num11" => $gm20Num11,
			"player20Num11" => $player20Num11,
			"gm20Self11" => $gm20Self11,
			"player20Self11" => $player20Self11,
			"gm21Num11" => $gm21Num11,
			"player21Num11" => $player21Num11,
			"gm21Self11" => $gm21Self11,
			"player21Self11" => $player21Self11,
			"gm22Num11" => $gm22Num11,
			"player22Num11" => $player22Num11,
			"gm22Self11" => $gm22Self11,
			"player22Self11" => $player22Self11,
			"gm23Num11" => $gm23Num11,
			"player23Num11" => $player23Num11,
			"gm23Self11" => $gm23Self11,
			"player23Self11" => $player23Self11,
			"gm24Num11" => $gm24Num11,
			"player24Num11" => $player24Num11,
			"gm24Self11" => $gm24Self11,
			"player24Self11" => $player24Self11,
			"calendar12" => $calendar12, 
			"gm1Num12" => $gm1Num12,
			"player1Num12" => $player1Num12,
			"gm1Self12" => $gm1Self12,
			"player1Self12" => $player1Self12,
			"gm2Num12" => $gm2Num12,
			"player2Num12" => $player2Num12,
			"gm2Self12" => $gm2Self12,
			"player2Self12" => $player2Self12,
			"gm3Num12" => $gm3Num12,
			"player3Num12" => $player3Num12,
			"gm3Self12" => $gm3Self12,
			"player3Self12" => $player3Self12,
			"gm4Num12" => $gm4Num12,
			"player4Num12" => $player4Num12,
			"gm4Self12" => $gm4Self12,
			"player4Self12" => $player4Self12,
			"gm5Num12" => $gm5Num12,
			"player5Num12" => $player5Num12,
			"gm5Self12" => $gm5Self12,
			"player5Self12" => $player5Self12,
			"gm6Num12" => $gm6Num12,
			"player6Num12" => $player6Num12,
			"gm6Self12" => $gm6Self12,
			"player6Self12" => $player6Self12,
			"gm7Num12" => $gm7Num12,
			"player7Num12" => $player7Num12,
			"gm7Self12" => $gm7Self12,
			"player7Self12" => $player7Self12,
			"gm8Num12" => $gm8Num12,
			"player8Num12" => $player8Num12,
			"gm8Self12" => $gm8Self12,
			"player8Self12" => $player8Self12,
			"gm9Num12" => $gm9Num12,
			"player9Num12" => $player9Num12,
			"gm9Self12" => $gm9Self12,
			"player9Self12" => $player9Self12,
			"gm10Num12" => $gm10Num12,
			"player10Num12" => $player10Num12,
			"gm10Self12" => $gm10Self12,
			"player10Self12" => $player10Self12,
			"gm11Num12" => $gm11Num12,
			"player11Num12" => $player11Num12,
			"gm11Self12" => $gm11Self12,
			"player11Self12" => $player11Self12,
			"gm12Num12" => $gm12Num12,
			"player12Num12" => $player12Num12,
			"gm12Self12" => $gm12Self12,
			"player12Self12" => $player12Self12,
			"gm13Num12" => $gm13Num12,
			"player13Num12" => $player13Num12,
			"gm13Self12" => $gm13Self12,
			"player13Self12" => $player13Self12,
			"gm14Num12" => $gm14Num12,
			"player14Num12" => $player14Num12,
			"gm14Self12" => $gm14Self12,
			"player14Self12" => $player14Self12,
			"gm15Num12" => $gm15Num12,
			"player15Num12" => $player15Num12,
			"gm15Self12" => $gm15Self12,
			"player15Self12" => $player15Self12,
			"gm16Num12" => $gm16Num12,
			"player16Num12" => $player16Num12,
			"gm16Self12" => $gm16Self12,
			"player16Self12" => $player16Self12,
			"gm17Num12" => $gm17Num12,
			"player17Num12" => $player17Num12,
			"gm17Self12" => $gm17Self12,
			"player17Self12" => $player17Self12,
			"gm18Num12" => $gm18Num12,
			"player18Num12" => $player18Num12,
			"gm18Self12" => $gm18Self12,
			"player18Self12" => $player18Self12,
			"gm19Num12" => $gm19Num12,
			"player19Num12" => $player19Num12,
			"gm19Self12" => $gm19Self12,
			"player19Self12" => $player19Self12,
			"gm20Num12" => $gm20Num12,
			"player20Num12" => $player20Num12,
			"gm20Self12" => $gm20Self12,
			"player20Self12" => $player20Self12,
			"gm21Num12" => $gm21Num12,
			"player21Num12" => $player21Num12,
			"gm21Self12" => $gm21Self12,
			"player21Self12" => $player21Self12,
			"gm22Num12" => $gm22Num12,
			"player22Num12" => $player22Num12,
			"gm22Self12" => $gm22Self12,
			"player22Self12" => $player22Self12,
			"gm23Num12" => $gm23Num12,
			"player23Num12" => $player23Num12,
			"gm23Self12" => $gm23Self12,
			"player23Self12" => $player23Self12,
			"gm24Num12" => $gm24Num12,
			"player24Num12" => $player24Num12,
			"gm24Self12" => $gm24Self12,
			"player24Self12" => $player24Self12,
			"calendar13" => $calendar13, 
			"gm1Num13" => $gm1Num13,
			"player1Num13" => $player1Num13,
			"gm1Self13" => $gm1Self13,
			"player1Self13" => $player1Self13,
			"gm2Num13" => $gm2Num13,
			"player2Num13" => $player2Num13,
			"gm2Self13" => $gm2Self13,
			"player2Self13" => $player2Self13,
			"gm3Num13" => $gm3Num13,
			"player3Num13" => $player3Num13,
			"gm3Self13" => $gm3Self13,
			"player3Self13" => $player3Self13,
			"gm4Num13" => $gm4Num13,
			"player4Num13" => $player4Num13,
			"gm4Self13" => $gm4Self13,
			"player4Self13" => $player4Self13,
			"gm5Num13" => $gm5Num13,
			"player5Num13" => $player5Num13,
			"gm5Self13" => $gm5Self13,
			"player5Self13" => $player5Self13,
			"gm6Num13" => $gm6Num13,
			"player6Num13" => $player6Num13,
			"gm6Self13" => $gm6Self13,
			"player6Self13" => $player6Self13,
			"gm7Num13" => $gm7Num13,
			"player7Num13" => $player7Num13,
			"gm7Self13" => $gm7Self13,
			"player7Self13" => $player7Self13,
			"gm8Num13" => $gm8Num13,
			"player8Num13" => $player8Num13,
			"gm8Self13" => $gm8Self13,
			"player8Self13" => $player8Self13,
			"gm9Num13" => $gm9Num13,
			"player9Num13" => $player9Num13,
			"gm9Self13" => $gm9Self13,
			"player9Self13" => $player9Self13,
			"gm10Num13" => $gm10Num13,
			"player10Num13" => $player10Num13,
			"gm10Self13" => $gm10Self13,
			"player10Self13" => $player10Self13,
			"gm11Num13" => $gm11Num13,
			"player11Num13" => $player11Num13,
			"gm11Self13" => $gm11Self13,
			"player11Self13" => $player11Self13,
			"gm12Num13" => $gm12Num13,
			"player12Num13" => $player12Num13,
			"gm12Self13" => $gm12Self13,
			"player12Self13" => $player12Self13,
			"gm13Num13" => $gm13Num13,
			"player13Num13" => $player13Num13,
			"gm13Self13" => $gm13Self13,
			"player13Self13" => $player13Self13,
			"gm14Num13" => $gm14Num13,
			"player14Num13" => $player14Num13,
			"gm14Self13" => $gm14Self13,
			"player14Self13" => $player14Self13,
			"gm15Num13" => $gm15Num13,
			"player15Num13" => $player15Num13,
			"gm15Self13" => $gm15Self13,
			"player15Self13" => $player15Self13,
			"gm16Num13" => $gm16Num13,
			"player16Num13" => $player16Num13,
			"gm16Self13" => $gm16Self13,
			"player16Self13" => $player16Self13,
			"gm17Num13" => $gm17Num13,
			"player17Num13" => $player17Num13,
			"gm17Self13" => $gm17Self13,
			"player17Self13" => $player17Self13,
			"gm18Num13" => $gm18Num13,
			"player18Num13" => $player18Num13,
			"gm18Self13" => $gm18Self13,
			"player18Self13" => $player18Self13,
			"gm19Num13" => $gm19Num13,
			"player19Num13" => $player19Num13,
			"gm19Self13" => $gm19Self13,
			"player19Self13" => $player19Self13,
			"gm20Num13" => $gm20Num13,
			"player20Num13" => $player20Num13,
			"gm20Self13" => $gm20Self13,
			"player20Self13" => $player20Self13,
			"gm21Num13" => $gm21Num13,
			"player21Num13" => $player21Num13,
			"gm21Self13" => $gm21Self13,
			"player21Self13" => $player21Self13,
			"gm22Num13" => $gm22Num13,
			"player22Num13" => $player22Num13,
			"gm22Self13" => $gm22Self13,
			"player22Self13" => $player22Self13,
			"gm23Num13" => $gm23Num13,
			"player23Num13" => $player23Num13,
			"gm23Self13" => $gm23Self13,
			"player23Self13" => $player23Self13,
			"gm24Num13" => $gm24Num13,
			"player24Num13" => $player24Num13,
			"gm24Self13" => $gm24Self13,
			"player24Self13" => $player24Self13,
			"calendar14" => $calendar14, 
			"gm1Num14" => $gm1Num14,
			"player1Num14" => $player1Num14,
			"gm1Self14" => $gm1Self14,
			"player1Self14" => $player1Self14,
			"gm2Num14" => $gm2Num14,
			"player2Num14" => $player2Num14,
			"gm2Self14" => $gm2Self14,
			"player2Self14" => $player2Self14,
			"gm3Num14" => $gm3Num14,
			"player3Num14" => $player3Num14,
			"gm3Self14" => $gm3Self14,
			"player3Self14" => $player3Self14,
			"gm4Num14" => $gm4Num14,
			"player4Num14" => $player4Num14,
			"gm4Self14" => $gm4Self14,
			"player4Self14" => $player4Self14,
			"gm5Num14" => $gm5Num14,
			"player5Num14" => $player5Num14,
			"gm5Self14" => $gm5Self14,
			"player5Self14" => $player5Self14,
			"gm6Num14" => $gm6Num14,
			"player6Num14" => $player6Num14,
			"gm6Self14" => $gm6Self14,
			"player6Self14" => $player6Self14,
			"gm7Num14" => $gm7Num14,
			"player7Num14" => $player7Num14,
			"gm7Self14" => $gm7Self14,
			"player7Self14" => $player7Self14,
			"gm8Num14" => $gm8Num14,
			"player8Num14" => $player8Num14,
			"gm8Self14" => $gm8Self14,
			"player8Self14" => $player8Self14,
			"gm9Num14" => $gm9Num14,
			"player9Num14" => $player9Num14,
			"gm9Self14" => $gm9Self14,
			"player9Self14" => $player9Self14,
			"gm10Num14" => $gm10Num14,
			"player10Num14" => $player10Num14,
			"gm10Self14" => $gm10Self14,
			"player10Self14" => $player10Self14,
			"gm11Num14" => $gm11Num14,
			"player11Num14" => $player11Num14,
			"gm11Self14" => $gm11Self14,
			"player11Self14" => $player11Self14,
			"gm12Num14" => $gm12Num14,
			"player12Num14" => $player12Num14,
			"gm12Self14" => $gm12Self14,
			"player12Self14" => $player12Self14,
			"gm13Num14" => $gm13Num14,
			"player13Num14" => $player13Num14,
			"gm13Self14" => $gm13Self14,
			"player13Self14" => $player13Self14,
			"gm14Num14" => $gm14Num14,
			"player14Num14" => $player14Num14,
			"gm14Self14" => $gm14Self14,
			"player14Self14" => $player14Self14,
			"gm15Num14" => $gm15Num14,
			"player15Num14" => $player15Num14,
			"gm15Self14" => $gm15Self14,
			"player15Self14" => $player15Self14,
			"gm16Num14" => $gm16Num14,
			"player16Num14" => $player16Num14,
			"gm16Self14" => $gm16Self14,
			"player16Self14" => $player16Self14,
			"gm17Num14" => $gm17Num14,
			"player17Num14" => $player17Num14,
			"gm17Self14" => $gm17Self14,
			"player17Self14" => $player17Self14,
			"gm18Num14" => $gm18Num14,
			"player18Num14" => $player18Num14,
			"gm18Self14" => $gm18Self14,
			"player18Self14" => $player18Self14,
			"gm19Num14" => $gm19Num14,
			"player19Num14" => $player19Num14,
			"gm19Self14" => $gm19Self14,
			"player19Self14" => $player19Self14,
			"gm20Num14" => $gm20Num14,
			"player20Num14" => $player20Num14,
			"gm20Self14" => $gm20Self14,
			"player20Self14" => $player20Self14,
			"gm21Num14" => $gm21Num14,
			"player21Num14" => $player21Num14,
			"gm21Self14" => $gm21Self14,
			"player21Self14" => $player21Self14,
			"gm22Num14" => $gm22Num14,
			"player22Num14" => $player22Num14,
			"gm22Self14" => $gm22Self14,
			"player22Self14" => $player22Self14,
			"gm23Num14" => $gm23Num14,
			"player23Num14" => $player23Num14,
			"gm23Self14" => $gm23Self14,
			"player23Self14" => $player23Self14,
			"gm24Num14" => $gm24Num14,
			"player24Num14" => $player24Num14,
			"gm24Self14" => $gm24Self14,
			"player24Self14" => $player24Self14,
			"calendar15" => $calendar15, 
			"gm1Num15" => $gm1Num15,
			"player1Num15" => $player1Num15,
			"gm1Self15" => $gm1Self15,
			"player1Self15" => $player1Self15,
			"gm2Num15" => $gm2Num15,
			"player2Num15" => $player2Num15,
			"gm2Self15" => $gm2Self15,
			"player2Self15" => $player2Self15,
			"gm3Num15" => $gm3Num15,
			"player3Num15" => $player3Num15,
			"gm3Self15" => $gm3Self15,
			"player3Self15" => $player3Self15,
			"gm4Num15" => $gm4Num15,
			"player4Num15" => $player4Num15,
			"gm4Self15" => $gm4Self15,
			"player4Self15" => $player4Self15,
			"gm5Num15" => $gm5Num15,
			"player5Num15" => $player5Num15,
			"gm5Self15" => $gm5Self15,
			"player5Self15" => $player5Self15,
			"gm6Num15" => $gm6Num15,
			"player6Num15" => $player6Num15,
			"gm6Self15" => $gm6Self15,
			"player6Self15" => $player6Self15,
			"gm7Num15" => $gm7Num15,
			"player7Num15" => $player7Num15,
			"gm7Self15" => $gm7Self15,
			"player7Self15" => $player7Self15,
			"gm8Num15" => $gm8Num15,
			"player8Num15" => $player8Num15,
			"gm8Self15" => $gm8Self15,
			"player8Self15" => $player8Self15,
			"gm9Num15" => $gm9Num15,
			"player9Num15" => $player9Num15,
			"gm9Self15" => $gm9Self15,
			"player9Self15" => $player9Self15,
			"gm10Num15" => $gm10Num15,
			"player10Num15" => $player10Num15,
			"gm10Self15" => $gm10Self15,
			"player10Self15" => $player10Self15,
			"gm11Num15" => $gm11Num15,
			"player11Num15" => $player11Num15,
			"gm11Self15" => $gm11Self15,
			"player11Self15" => $player11Self15,
			"gm12Num15" => $gm12Num15,
			"player12Num15" => $player12Num15,
			"gm12Self15" => $gm12Self15,
			"player12Self15" => $player12Self15,
			"gm13Num15" => $gm13Num15,
			"player13Num15" => $player13Num15,
			"gm13Self15" => $gm13Self15,
			"player13Self15" => $player13Self15,
			"gm14Num15" => $gm14Num15,
			"player14Num15" => $player14Num15,
			"gm14Self15" => $gm14Self15,
			"player14Self15" => $player14Self15,
			"gm15Num15" => $gm15Num15,
			"player15Num15" => $player15Num15,
			"gm15Self15" => $gm15Self15,
			"player15Self15" => $player15Self15,
			"gm16Num15" => $gm16Num15,
			"player16Num15" => $player16Num15,
			"gm16Self15" => $gm16Self15,
			"player16Self15" => $player16Self15,
			"gm17Num15" => $gm17Num15,
			"player17Num15" => $player17Num15,
			"gm17Self15" => $gm17Self15,
			"player17Self15" => $player17Self15,
			"gm18Num15" => $gm18Num15,
			"player18Num15" => $player18Num15,
			"gm18Self15" => $gm18Self15,
			"player18Self15" => $player18Self15,
			"gm19Num15" => $gm19Num15,
			"player19Num15" => $player19Num15,
			"gm19Self15" => $gm19Self15,
			"player19Self15" => $player19Self15,
			"gm20Num15" => $gm20Num15,
			"player20Num15" => $player20Num15,
			"gm20Self15" => $gm20Self15,
			"player20Self15" => $player20Self15,
			"gm21Num15" => $gm21Num15,
			"player21Num15" => $player21Num15,
			"gm21Self15" => $gm21Self15,
			"player21Self15" => $player21Self15,
			"gm22Num15" => $gm22Num15,
			"player22Num15" => $player22Num15,
			"gm22Self15" => $gm22Self15,
			"player22Self15" => $player22Self15,
			"gm23Num15" => $gm23Num15,
			"player23Num15" => $player23Num15,
			"gm23Self15" => $gm23Self15,
			"player23Self15" => $player23Self15,
			"gm24Num15" => $gm24Num15,
			"player24Num15" => $player24Num15,
			"gm24Self15" => $gm24Self15,
			"player24Self15" => $player24Self15,
			"calendar16" => $calendar16, 
			"gm1Num16" => $gm1Num16,
			"player1Num16" => $player1Num16,
			"gm1Self16" => $gm1Self16,
			"player1Self16" => $player1Self16,
			"gm2Num16" => $gm2Num16,
			"player2Num16" => $player2Num16,
			"gm2Self16" => $gm2Self16,
			"player2Self16" => $player2Self16,
			"gm3Num16" => $gm3Num16,
			"player3Num16" => $player3Num16,
			"gm3Self16" => $gm3Self16,
			"player3Self16" => $player3Self16,
			"gm4Num16" => $gm4Num16,
			"player4Num16" => $player4Num16,
			"gm4Self16" => $gm4Self16,
			"player4Self16" => $player4Self16,
			"gm5Num16" => $gm5Num16,
			"player5Num16" => $player5Num16,
			"gm5Self16" => $gm5Self16,
			"player5Self16" => $player5Self16,
			"gm6Num16" => $gm6Num16,
			"player6Num16" => $player6Num16,
			"gm6Self16" => $gm6Self16,
			"player6Self16" => $player6Self16,
			"gm7Num16" => $gm7Num16,
			"player7Num16" => $player7Num16,
			"gm7Self16" => $gm7Self16,
			"player7Self16" => $player7Self16,
			"gm8Num16" => $gm8Num16,
			"player8Num16" => $player8Num16,
			"gm8Self16" => $gm8Self16,
			"player8Self16" => $player8Self16,
			"gm9Num16" => $gm9Num16,
			"player9Num16" => $player9Num16,
			"gm9Self16" => $gm9Self16,
			"player9Self16" => $player9Self16,
			"gm10Num16" => $gm10Num16,
			"player10Num16" => $player10Num16,
			"gm10Self16" => $gm10Self16,
			"player10Self16" => $player10Self16,
			"gm11Num16" => $gm11Num16,
			"player11Num16" => $player11Num16,
			"gm11Self16" => $gm11Self16,
			"player11Self16" => $player11Self16,
			"gm12Num16" => $gm12Num16,
			"player12Num16" => $player12Num16,
			"gm12Self16" => $gm12Self16,
			"player12Self16" => $player12Self16,
			"gm13Num16" => $gm13Num16,
			"player13Num16" => $player13Num16,
			"gm13Self16" => $gm13Self16,
			"player13Self16" => $player13Self16,
			"gm14Num16" => $gm14Num16,
			"player14Num16" => $player14Num16,
			"gm14Self16" => $gm14Self16,
			"player14Self16" => $player14Self16,
			"gm15Num16" => $gm15Num16,
			"player15Num16" => $player15Num16,
			"gm15Self16" => $gm15Self16,
			"player15Self16" => $player15Self16,
			"gm16Num16" => $gm16Num16,
			"player16Num16" => $player16Num16,
			"gm16Self16" => $gm16Self16,
			"player16Self16" => $player16Self16,
			"gm17Num16" => $gm17Num16,
			"player17Num16" => $player17Num16,
			"gm17Self16" => $gm17Self16,
			"player17Self16" => $player17Self16,
			"gm18Num16" => $gm18Num16,
			"player18Num16" => $player18Num16,
			"gm18Self16" => $gm18Self16,
			"player18Self16" => $player18Self16,
			"gm19Num16" => $gm19Num16,
			"player19Num16" => $player19Num16,
			"gm19Self16" => $gm19Self16,
			"player19Self16" => $player19Self16,
			"gm20Num16" => $gm20Num16,
			"player20Num16" => $player20Num16,
			"gm20Self16" => $gm20Self16,
			"player20Self16" => $player20Self16,
			"gm21Num16" => $gm21Num16,
			"player21Num16" => $player21Num16,
			"gm21Self16" => $gm21Self16,
			"player21Self16" => $player21Self16,
			"gm22Num16" => $gm22Num16,
			"player22Num16" => $player22Num16,
			"gm22Self16" => $gm22Self16,
			"player22Self16" => $player22Self16,
			"gm23Num16" => $gm23Num16,
			"player23Num16" => $player23Num16,
			"gm23Self16" => $gm23Self16,
			"player23Self16" => $player23Self16,
			"gm24Num16" => $gm24Num16,
			"player24Num16" => $player24Num16,
			"gm24Self16" => $gm24Self16,
			"player24Self16" => $player24Self16,
			"calendar17" => $calendar17, 
			"gm1Num17" => $gm1Num17,
			"player1Num17" => $player1Num17,
			"gm1Self17" => $gm1Self17,
			"player1Self17" => $player1Self17,
			"gm2Num17" => $gm2Num17,
			"player2Num17" => $player2Num17,
			"gm2Self17" => $gm2Self17,
			"player2Self17" => $player2Self17,
			"gm3Num17" => $gm3Num17,
			"player3Num17" => $player3Num17,
			"gm3Self17" => $gm3Self17,
			"player3Self17" => $player3Self17,
			"gm4Num17" => $gm4Num17,
			"player4Num17" => $player4Num17,
			"gm4Self17" => $gm4Self17,
			"player4Self17" => $player4Self17,
			"gm5Num17" => $gm5Num17,
			"player5Num17" => $player5Num17,
			"gm5Self17" => $gm5Self17,
			"player5Self17" => $player5Self17,
			"gm6Num17" => $gm6Num17,
			"player6Num17" => $player6Num17,
			"gm6Self17" => $gm6Self17,
			"player6Self17" => $player6Self17,
			"gm7Num17" => $gm7Num17,
			"player7Num17" => $player7Num17,
			"gm7Self17" => $gm7Self17,
			"player7Self17" => $player7Self17,
			"gm8Num17" => $gm8Num17,
			"player8Num17" => $player8Num17,
			"gm8Self17" => $gm8Self17,
			"player8Self17" => $player8Self17,
			"gm9Num17" => $gm9Num17,
			"player9Num17" => $player9Num17,
			"gm9Self17" => $gm9Self17,
			"player9Self17" => $player9Self17,
			"gm10Num17" => $gm10Num17,
			"player10Num17" => $player10Num17,
			"gm10Self17" => $gm10Self17,
			"player10Self17" => $player10Self17,
			"gm11Num17" => $gm11Num17,
			"player11Num17" => $player11Num17,
			"gm11Self17" => $gm11Self17,
			"player11Self17" => $player11Self17,
			"gm12Num17" => $gm12Num17,
			"player12Num17" => $player12Num17,
			"gm12Self17" => $gm12Self17,
			"player12Self17" => $player12Self17,
			"gm13Num17" => $gm13Num17,
			"player13Num17" => $player13Num17,
			"gm13Self17" => $gm13Self17,
			"player13Self17" => $player13Self17,
			"gm14Num17" => $gm14Num17,
			"player14Num17" => $player14Num17,
			"gm14Self17" => $gm14Self17,
			"player14Self17" => $player14Self17,
			"gm15Num17" => $gm15Num17,
			"player15Num17" => $player15Num17,
			"gm15Self17" => $gm15Self17,
			"player15Self17" => $player15Self17,
			"gm16Num17" => $gm16Num17,
			"player16Num17" => $player16Num17,
			"gm16Self17" => $gm16Self17,
			"player16Self17" => $player16Self17,
			"gm17Num17" => $gm17Num17,
			"player17Num17" => $player17Num17,
			"gm17Self17" => $gm17Self17,
			"player17Self17" => $player17Self17,
			"gm18Num17" => $gm18Num17,
			"player18Num17" => $player18Num17,
			"gm18Self17" => $gm18Self17,
			"player18Self17" => $player18Self17,
			"gm19Num17" => $gm19Num17,
			"player19Num17" => $player19Num17,
			"gm19Self17" => $gm19Self17,
			"player19Self17" => $player19Self17,
			"gm20Num17" => $gm20Num17,
			"player20Num17" => $player20Num17,
			"gm20Self17" => $gm20Self17,
			"player20Self17" => $player20Self17,
			"gm21Num17" => $gm21Num17,
			"player21Num17" => $player21Num17,
			"gm21Self17" => $gm21Self17,
			"player21Self17" => $player21Self17,
			"gm22Num17" => $gm22Num17,
			"player22Num17" => $player22Num17,
			"gm22Self17" => $gm22Self17,
			"player22Self17" => $player22Self17,
			"gm23Num17" => $gm23Num17,
			"player23Num17" => $player23Num17,
			"gm23Self17" => $gm23Self17,
			"player23Self17" => $player23Self17,
			"gm24Num17" => $gm24Num17,
			"player24Num17" => $player24Num17,
			"gm24Self17" => $gm24Self17,
			"player24Self17" => $player24Self17,
			"calendar18" => $calendar18, 
			"gm1Num18" => $gm1Num18,
			"player1Num18" => $player1Num18,
			"gm1Self18" => $gm1Self18,
			"player1Self18" => $player1Self18,
			"gm2Num18" => $gm2Num18,
			"player2Num18" => $player2Num18,
			"gm2Self18" => $gm2Self18,
			"player2Self18" => $player2Self18,
			"gm3Num18" => $gm3Num18,
			"player3Num18" => $player3Num18,
			"gm3Self18" => $gm3Self18,
			"player3Self18" => $player3Self18,
			"gm4Num18" => $gm4Num18,
			"player4Num18" => $player4Num18,
			"gm4Self18" => $gm4Self18,
			"player4Self18" => $player4Self18,
			"gm5Num18" => $gm5Num18,
			"player5Num18" => $player5Num18,
			"gm5Self18" => $gm5Self18,
			"player5Self18" => $player5Self18,
			"gm6Num18" => $gm6Num18,
			"player6Num18" => $player6Num18,
			"gm6Self18" => $gm6Self18,
			"player6Self18" => $player6Self18,
			"gm7Num18" => $gm7Num18,
			"player7Num18" => $player7Num18,
			"gm7Self18" => $gm7Self18,
			"player7Self18" => $player7Self18,
			"gm8Num18" => $gm8Num18,
			"player8Num18" => $player8Num18,
			"gm8Self18" => $gm8Self18,
			"player8Self18" => $player8Self18,
			"gm9Num18" => $gm9Num18,
			"player9Num18" => $player9Num18,
			"gm9Self18" => $gm9Self18,
			"player9Self18" => $player9Self18,
			"gm10Num18" => $gm10Num18,
			"player10Num18" => $player10Num18,
			"gm10Self18" => $gm10Self18,
			"player10Self18" => $player10Self18,
			"gm11Num18" => $gm11Num18,
			"player11Num18" => $player11Num18,
			"gm11Self18" => $gm11Self18,
			"player11Self18" => $player11Self18,
			"gm12Num18" => $gm12Num18,
			"player12Num18" => $player12Num18,
			"gm12Self18" => $gm12Self18,
			"player12Self18" => $player12Self18,
			"gm13Num18" => $gm13Num18,
			"player13Num18" => $player13Num18,
			"gm13Self18" => $gm13Self18,
			"player13Self18" => $player13Self18,
			"gm14Num18" => $gm14Num18,
			"player14Num18" => $player14Num18,
			"gm14Self18" => $gm14Self18,
			"player14Self18" => $player14Self18,
			"gm15Num18" => $gm15Num18,
			"player15Num18" => $player15Num18,
			"gm15Self18" => $gm15Self18,
			"player15Self18" => $player15Self18,
			"gm16Num18" => $gm16Num18,
			"player16Num18" => $player16Num18,
			"gm16Self18" => $gm16Self18,
			"player16Self18" => $player16Self18,
			"gm17Num18" => $gm17Num18,
			"player17Num18" => $player17Num18,
			"gm17Self18" => $gm17Self18,
			"player17Self18" => $player17Self18,
			"gm18Num18" => $gm18Num18,
			"player18Num18" => $player18Num18,
			"gm18Self18" => $gm18Self18,
			"player18Self18" => $player18Self18,
			"gm19Num18" => $gm19Num18,
			"player19Num18" => $player19Num18,
			"gm19Self18" => $gm19Self18,
			"player19Self18" => $player19Self18,
			"gm20Num18" => $gm20Num18,
			"player20Num18" => $player20Num18,
			"gm20Self18" => $gm20Self18,
			"player20Self18" => $player20Self18,
			"gm21Num18" => $gm21Num18,
			"player21Num18" => $player21Num18,
			"gm21Self18" => $gm21Self18,
			"player21Self18" => $player21Self18,
			"gm22Num18" => $gm22Num18,
			"player22Num18" => $player22Num18,
			"gm22Self18" => $gm22Self18,
			"player22Self18" => $player22Self18,
			"gm23Num18" => $gm23Num18,
			"player23Num18" => $player23Num18,
			"gm23Self18" => $gm23Self18,
			"player23Self18" => $player23Self18,
			"gm24Num18" => $gm24Num18,
			"player24Num18" => $player24Num18,
			"gm24Self18" => $gm24Self18,
			"player24Self18" => $player24Self18,
			"calendar19" => $calendar19, 
			"gm1Num19" => $gm1Num19,
			"player1Num19" => $player1Num19,
			"gm1Self19" => $gm1Self19,
			"player1Self19" => $player1Self19,
			"gm2Num19" => $gm2Num19,
			"player2Num19" => $player2Num19,
			"gm2Self19" => $gm2Self19,
			"player2Self19" => $player2Self19,
			"gm3Num19" => $gm3Num19,
			"player3Num19" => $player3Num19,
			"gm3Self19" => $gm3Self19,
			"player3Self19" => $player3Self19,
			"gm4Num19" => $gm4Num19,
			"player4Num19" => $player4Num19,
			"gm4Self19" => $gm4Self19,
			"player4Self19" => $player4Self19,
			"gm5Num19" => $gm5Num19,
			"player5Num19" => $player5Num19,
			"gm5Self19" => $gm5Self19,
			"player5Self19" => $player5Self19,
			"gm6Num19" => $gm6Num19,
			"player6Num19" => $player6Num19,
			"gm6Self19" => $gm6Self19,
			"player6Self19" => $player6Self19,
			"gm7Num19" => $gm7Num19,
			"player7Num19" => $player7Num19,
			"gm7Self19" => $gm7Self19,
			"player7Self19" => $player7Self19,
			"gm8Num19" => $gm8Num19,
			"player8Num19" => $player8Num19,
			"gm8Self19" => $gm8Self19,
			"player8Self19" => $player8Self19,
			"gm9Num19" => $gm9Num19,
			"player9Num19" => $player9Num19,
			"gm9Self19" => $gm9Self19,
			"player9Self19" => $player9Self19,
			"gm10Num19" => $gm10Num19,
			"player10Num19" => $player10Num19,
			"gm10Self19" => $gm10Self19,
			"player10Self19" => $player10Self19,
			"gm11Num19" => $gm11Num19,
			"player11Num19" => $player11Num19,
			"gm11Self19" => $gm11Self19,
			"player11Self19" => $player11Self19,
			"gm12Num19" => $gm12Num19,
			"player12Num19" => $player12Num19,
			"gm12Self19" => $gm12Self19,
			"player12Self19" => $player12Self19,
			"gm13Num19" => $gm13Num19,
			"player13Num19" => $player13Num19,
			"gm13Self19" => $gm13Self19,
			"player13Self19" => $player13Self19,
			"gm14Num19" => $gm14Num19,
			"player14Num19" => $player14Num19,
			"gm14Self19" => $gm14Self19,
			"player14Self19" => $player14Self19,
			"gm15Num19" => $gm15Num19,
			"player15Num19" => $player15Num19,
			"gm15Self19" => $gm15Self19,
			"player15Self19" => $player15Self19,
			"gm16Num19" => $gm16Num19,
			"player16Num19" => $player16Num19,
			"gm16Self19" => $gm16Self19,
			"player16Self19" => $player16Self19,
			"gm17Num19" => $gm17Num19,
			"player17Num19" => $player17Num19,
			"gm17Self19" => $gm17Self19,
			"player17Self19" => $player17Self19,
			"gm18Num19" => $gm18Num19,
			"player18Num19" => $player18Num19,
			"gm18Self19" => $gm18Self19,
			"player18Self19" => $player18Self19,
			"gm19Num19" => $gm19Num19,
			"player19Num19" => $player19Num19,
			"gm19Self19" => $gm19Self19,
			"player19Self19" => $player19Self19,
			"gm20Num19" => $gm20Num19,
			"player20Num19" => $player20Num19,
			"gm20Self19" => $gm20Self19,
			"player20Self19" => $player20Self19,
			"gm21Num19" => $gm21Num19,
			"player21Num19" => $player21Num19,
			"gm21Self19" => $gm21Self19,
			"player21Self19" => $player21Self19,
			"gm22Num19" => $gm22Num19,
			"player22Num19" => $player22Num19,
			"gm22Self19" => $gm22Self19,
			"player22Self19" => $player22Self19,
			"gm23Num19" => $gm23Num19,
			"player23Num19" => $player23Num19,
			"gm23Self19" => $gm23Self19,
			"player23Self19" => $player23Self19,
			"gm24Num19" => $gm24Num19,
			"player24Num19" => $player24Num19,
			"gm24Self19" => $gm24Self19,
			"player24Self19" => $player24Self19,
			"calendar20" => $calendar20, 
			"gm1Num20" => $gm1Num20,
			"player1Num20" => $player1Num20,
			"gm1Self20" => $gm1Self20,
			"player1Self20" => $player1Self20,
			"gm2Num20" => $gm2Num20,
			"player2Num20" => $player2Num20,
			"gm2Self20" => $gm2Self20,
			"player2Self20" => $player2Self20,
			"gm3Num20" => $gm3Num20,
			"player3Num20" => $player3Num20,
			"gm3Self20" => $gm3Self20,
			"player3Self20" => $player3Self20,
			"gm4Num20" => $gm4Num20,
			"player4Num20" => $player4Num20,
			"gm4Self20" => $gm4Self20,
			"player4Self20" => $player4Self20,
			"gm5Num20" => $gm5Num20,
			"player5Num20" => $player5Num20,
			"gm5Self20" => $gm5Self20,
			"player5Self20" => $player5Self20,
			"gm6Num20" => $gm6Num20,
			"player6Num20" => $player6Num20,
			"gm6Self20" => $gm6Self20,
			"player6Self20" => $player6Self20,
			"gm7Num20" => $gm7Num20,
			"player7Num20" => $player7Num20,
			"gm7Self20" => $gm7Self20,
			"player7Self20" => $player7Self20,
			"gm8Num20" => $gm8Num20,
			"player8Num20" => $player8Num20,
			"gm8Self20" => $gm8Self20,
			"player8Self20" => $player8Self20,
			"gm9Num20" => $gm9Num20,
			"player9Num20" => $player9Num20,
			"gm9Self20" => $gm9Self20,
			"player9Self20" => $player9Self20,
			"gm10Num20" => $gm10Num20,
			"player10Num20" => $player10Num20,
			"gm10Self20" => $gm10Self20,
			"player10Self20" => $player10Self20,
			"gm11Num20" => $gm11Num20,
			"player11Num20" => $player11Num20,
			"gm11Self20" => $gm11Self20,
			"player11Self20" => $player11Self20,
			"gm12Num20" => $gm12Num20,
			"player12Num20" => $player12Num20,
			"gm12Self20" => $gm12Self20,
			"player12Self20" => $player12Self20,
			"gm13Num20" => $gm13Num20,
			"player13Num20" => $player13Num20,
			"gm13Self20" => $gm13Self20,
			"player13Self20" => $player13Self20,
			"gm14Num20" => $gm14Num20,
			"player14Num20" => $player14Num20,
			"gm14Self20" => $gm14Self20,
			"player14Self20" => $player14Self20,
			"gm15Num20" => $gm15Num20,
			"player15Num20" => $player15Num20,
			"gm15Self20" => $gm15Self20,
			"player15Self20" => $player15Self20,
			"gm16Num20" => $gm16Num20,
			"player16Num20" => $player16Num20,
			"gm16Self20" => $gm16Self20,
			"player16Self20" => $player16Self20,
			"gm17Num20" => $gm17Num20,
			"player17Num20" => $player17Num20,
			"gm17Self20" => $gm17Self20,
			"player17Self20" => $player17Self20,
			"gm18Num20" => $gm18Num20,
			"player18Num20" => $player18Num20,
			"gm18Self20" => $gm18Self20,
			"player18Self20" => $player18Self20,
			"gm19Num20" => $gm19Num20,
			"player19Num20" => $player19Num20,
			"gm19Self20" => $gm19Self20,
			"player19Self20" => $player19Self20,
			"gm20Num20" => $gm20Num20,
			"player20Num20" => $player20Num20,
			"gm20Self20" => $gm20Self20,
			"player20Self20" => $player20Self20,
			"gm21Num20" => $gm21Num20,
			"player21Num20" => $player21Num20,
			"gm21Self20" => $gm21Self20,
			"player21Self20" => $player21Self20,
			"gm22Num20" => $gm22Num20,
			"player22Num20" => $player22Num20,
			"gm22Self20" => $gm22Self20,
			"player22Self20" => $player22Self20,
			"gm23Num20" => $gm23Num20,
			"player23Num20" => $player23Num20,
			"gm23Self20" => $gm23Self20,
			"player23Self20" => $player23Self20,
			"gm24Num20" => $gm24Num20,
			"player24Num20" => $player24Num20,
			"gm24Self20" => $gm24Self20,
			"player24Self20" => $player24Self20,
			"calendar21" => $calendar21, 
			"gm1Num21" => $gm1Num21,
			"player1Num21" => $player1Num21,
			"gm1Self21" => $gm1Self21,
			"player1Self21" => $player1Self21,
			"gm2Num21" => $gm2Num21,
			"player2Num21" => $player2Num21,
			"gm2Self21" => $gm2Self21,
			"player2Self21" => $player2Self21,
			"gm3Num21" => $gm3Num21,
			"player3Num21" => $player3Num21,
			"gm3Self21" => $gm3Self21,
			"player3Self21" => $player3Self21,
			"gm4Num21" => $gm4Num21,
			"player4Num21" => $player4Num21,
			"gm4Self21" => $gm4Self21,
			"player4Self21" => $player4Self21,
			"gm5Num21" => $gm5Num21,
			"player5Num21" => $player5Num21,
			"gm5Self21" => $gm5Self21,
			"player5Self21" => $player5Self21,
			"gm6Num21" => $gm6Num21,
			"player6Num21" => $player6Num21,
			"gm6Self21" => $gm6Self21,
			"player6Self21" => $player6Self21,
			"gm7Num21" => $gm7Num21,
			"player7Num21" => $player7Num21,
			"gm7Self21" => $gm7Self21,
			"player7Self21" => $player7Self21,
			"gm8Num21" => $gm8Num21,
			"player8Num21" => $player8Num21,
			"gm8Self21" => $gm8Self21,
			"player8Self21" => $player8Self21,
			"gm9Num21" => $gm9Num21,
			"player9Num21" => $player9Num21,
			"gm9Self21" => $gm9Self21,
			"player9Self21" => $player9Self21,
			"gm10Num21" => $gm10Num21,
			"player10Num21" => $player10Num21,
			"gm10Self21" => $gm10Self21,
			"player10Self21" => $player10Self21,
			"gm11Num21" => $gm11Num21,
			"player11Num21" => $player11Num21,
			"gm11Self21" => $gm11Self21,
			"player11Self21" => $player11Self21,
			"gm12Num21" => $gm12Num21,
			"player12Num21" => $player12Num21,
			"gm12Self21" => $gm12Self21,
			"player12Self21" => $player12Self21,
			"gm13Num21" => $gm13Num21,
			"player13Num21" => $player13Num21,
			"gm13Self21" => $gm13Self21,
			"player13Self21" => $player13Self21,
			"gm14Num21" => $gm14Num21,
			"player14Num21" => $player14Num21,
			"gm14Self21" => $gm14Self21,
			"player14Self21" => $player14Self21,
			"gm15Num21" => $gm15Num21,
			"player15Num21" => $player15Num21,
			"gm15Self21" => $gm15Self21,
			"player15Self21" => $player15Self21,
			"gm16Num21" => $gm16Num21,
			"player16Num21" => $player16Num21,
			"gm16Self21" => $gm16Self21,
			"player16Self21" => $player16Self21,
			"gm17Num21" => $gm17Num21,
			"player17Num21" => $player17Num21,
			"gm17Self21" => $gm17Self21,
			"player17Self21" => $player17Self21,
			"gm18Num21" => $gm18Num21,
			"player18Num21" => $player18Num21,
			"gm18Self21" => $gm18Self21,
			"player18Self21" => $player18Self21,
			"gm19Num21" => $gm19Num21,
			"player19Num21" => $player19Num21,
			"gm19Self21" => $gm19Self21,
			"player19Self21" => $player19Self21,
			"gm20Num21" => $gm20Num21,
			"player20Num21" => $player20Num21,
			"gm20Self21" => $gm20Self21,
			"player20Self21" => $player20Self21,
			"gm21Num21" => $gm21Num21,
			"player21Num21" => $player21Num21,
			"gm21Self21" => $gm21Self21,
			"player21Self21" => $player21Self21,
			"gm22Num21" => $gm22Num21,
			"player22Num21" => $player22Num21,
			"gm22Self21" => $gm22Self21,
			"player22Self21" => $player22Self21,
			"gm23Num21" => $gm23Num21,
			"player23Num21" => $player23Num21,
			"gm23Self21" => $gm23Self21,
			"player23Self21" => $player23Self21,
			"gm24Num21" => $gm24Num21,
			"player24Num21" => $player24Num21,
			"gm24Self21" => $gm24Self21,
			"player24Self21" => $player24Self21,
			"calendar22" => $calendar22, 
			"gm1Num22" => $gm1Num22,
			"player1Num22" => $player1Num22,
			"gm1Self22" => $gm1Self22,
			"player1Self22" => $player1Self22,
			"gm2Num22" => $gm2Num22,
			"player2Num22" => $player2Num22,
			"gm2Self22" => $gm2Self22,
			"player2Self22" => $player2Self22,
			"gm3Num22" => $gm3Num22,
			"player3Num22" => $player3Num22,
			"gm3Self22" => $gm3Self22,
			"player3Self22" => $player3Self22,
			"gm4Num22" => $gm4Num22,
			"player4Num22" => $player4Num22,
			"gm4Self22" => $gm4Self22,
			"player4Self22" => $player4Self22,
			"gm5Num22" => $gm5Num22,
			"player5Num22" => $player5Num22,
			"gm5Self22" => $gm5Self22,
			"player5Self22" => $player5Self22,
			"gm6Num22" => $gm6Num22,
			"player6Num22" => $player6Num22,
			"gm6Self22" => $gm6Self22,
			"player6Self22" => $player6Self22,
			"gm7Num22" => $gm7Num22,
			"player7Num22" => $player7Num22,
			"gm7Self22" => $gm7Self22,
			"player7Self22" => $player7Self22,
			"gm8Num22" => $gm8Num22,
			"player8Num22" => $player8Num22,
			"gm8Self22" => $gm8Self22,
			"player8Self22" => $player8Self22,
			"gm9Num22" => $gm9Num22,
			"player9Num22" => $player9Num22,
			"gm9Self22" => $gm9Self22,
			"player9Self22" => $player9Self22,
			"gm10Num22" => $gm10Num22,
			"player10Num22" => $player10Num22,
			"gm10Self22" => $gm10Self22,
			"player10Self22" => $player10Self22,
			"gm11Num22" => $gm11Num22,
			"player11Num22" => $player11Num22,
			"gm11Self22" => $gm11Self22,
			"player11Self22" => $player11Self22,
			"gm12Num22" => $gm12Num22,
			"player12Num22" => $player12Num22,
			"gm12Self22" => $gm12Self22,
			"player12Self22" => $player12Self22,
			"gm13Num22" => $gm13Num22,
			"player13Num22" => $player13Num22,
			"gm13Self22" => $gm13Self22,
			"player13Self22" => $player13Self22,
			"gm14Num22" => $gm14Num22,
			"player14Num22" => $player14Num22,
			"gm14Self22" => $gm14Self22,
			"player14Self22" => $player14Self22,
			"gm15Num22" => $gm15Num22,
			"player15Num22" => $player15Num22,
			"gm15Self22" => $gm15Self22,
			"player15Self22" => $player15Self22,
			"gm16Num22" => $gm16Num22,
			"player16Num22" => $player16Num22,
			"gm16Self22" => $gm16Self22,
			"player16Self22" => $player16Self22,
			"gm17Num22" => $gm17Num22,
			"player17Num22" => $player17Num22,
			"gm17Self22" => $gm17Self22,
			"player17Self22" => $player17Self22,
			"gm18Num22" => $gm18Num22,
			"player18Num22" => $player18Num22,
			"gm18Self22" => $gm18Self22,
			"player18Self22" => $player18Self22,
			"gm19Num22" => $gm19Num22,
			"player19Num22" => $player19Num22,
			"gm19Self22" => $gm19Self22,
			"player19Self22" => $player19Self22,
			"gm20Num22" => $gm20Num22,
			"player20Num22" => $player20Num22,
			"gm20Self22" => $gm20Self22,
			"player20Self22" => $player20Self22,
			"gm21Num22" => $gm21Num22,
			"player21Num22" => $player21Num22,
			"gm21Self22" => $gm21Self22,
			"player21Self22" => $player21Self22,
			"gm22Num22" => $gm22Num22,
			"player22Num22" => $player22Num22,
			"gm22Self22" => $gm22Self22,
			"player22Self22" => $player22Self22,
			"gm23Num22" => $gm23Num22,
			"player23Num22" => $player23Num22,
			"gm23Self22" => $gm23Self22,
			"player23Self22" => $player23Self22,
			"gm24Num22" => $gm24Num22,
			"player24Num22" => $player24Num22,
			"gm24Self22" => $gm24Self22,
			"player24Self22" => $player24Self22,
			"calendar23" => $calendar23, 
			"gm1Num23" => $gm1Num23,
			"player1Num23" => $player1Num23,
			"gm1Self23" => $gm1Self23,
			"player1Self23" => $player1Self23,
			"gm2Num23" => $gm2Num23,
			"player2Num23" => $player2Num23,
			"gm2Self23" => $gm2Self23,
			"player2Self23" => $player2Self23,
			"gm3Num23" => $gm3Num23,
			"player3Num23" => $player3Num23,
			"gm3Self23" => $gm3Self23,
			"player3Self23" => $player3Self23,
			"gm4Num23" => $gm4Num23,
			"player4Num23" => $player4Num23,
			"gm4Self23" => $gm4Self23,
			"player4Self23" => $player4Self23,
			"gm5Num23" => $gm5Num23,
			"player5Num23" => $player5Num23,
			"gm5Self23" => $gm5Self23,
			"player5Self23" => $player5Self23,
			"gm6Num23" => $gm6Num23,
			"player6Num23" => $player6Num23,
			"gm6Self23" => $gm6Self23,
			"player6Self23" => $player6Self23,
			"gm7Num23" => $gm7Num23,
			"player7Num23" => $player7Num23,
			"gm7Self23" => $gm7Self23,
			"player7Self23" => $player7Self23,
			"gm8Num23" => $gm8Num23,
			"player8Num23" => $player8Num23,
			"gm8Self23" => $gm8Self23,
			"player8Self23" => $player8Self23,
			"gm9Num23" => $gm9Num23,
			"player9Num23" => $player9Num23,
			"gm9Self23" => $gm9Self23,
			"player9Self23" => $player9Self23,
			"gm10Num23" => $gm10Num23,
			"player10Num23" => $player10Num23,
			"gm10Self23" => $gm10Self23,
			"player10Self23" => $player10Self23,
			"gm11Num23" => $gm11Num23,
			"player11Num23" => $player11Num23,
			"gm11Self23" => $gm11Self23,
			"player11Self23" => $player11Self23,
			"gm12Num23" => $gm12Num23,
			"player12Num23" => $player12Num23,
			"gm12Self23" => $gm12Self23,
			"player12Self23" => $player12Self23,
			"gm13Num23" => $gm13Num23,
			"player13Num23" => $player13Num23,
			"gm13Self23" => $gm13Self23,
			"player13Self23" => $player13Self23,
			"gm14Num23" => $gm14Num23,
			"player14Num23" => $player14Num23,
			"gm14Self23" => $gm14Self23,
			"player14Self23" => $player14Self23,
			"gm15Num23" => $gm15Num23,
			"player15Num23" => $player15Num23,
			"gm15Self23" => $gm15Self23,
			"player15Self23" => $player15Self23,
			"gm16Num23" => $gm16Num23,
			"player16Num23" => $player16Num23,
			"gm16Self23" => $gm16Self23,
			"player16Self23" => $player16Self23,
			"gm17Num23" => $gm17Num23,
			"player17Num23" => $player17Num23,
			"gm17Self23" => $gm17Self23,
			"player17Self23" => $player17Self23,
			"gm18Num23" => $gm18Num23,
			"player18Num23" => $player18Num23,
			"gm18Self23" => $gm18Self23,
			"player18Self23" => $player18Self23,
			"gm19Num23" => $gm19Num23,
			"player19Num23" => $player19Num23,
			"gm19Self23" => $gm19Self23,
			"player19Self23" => $player19Self23,
			"gm20Num23" => $gm20Num23,
			"player20Num23" => $player20Num23,
			"gm20Self23" => $gm20Self23,
			"player20Self23" => $player20Self23,
			"gm21Num23" => $gm21Num23,
			"player21Num23" => $player21Num23,
			"gm21Self23" => $gm21Self23,
			"player21Self23" => $player21Self23,
			"gm22Num23" => $gm22Num23,
			"player22Num23" => $player22Num23,
			"gm22Self23" => $gm22Self23,
			"player22Self23" => $player22Self23,
			"gm23Num23" => $gm23Num23,
			"player23Num23" => $player23Num23,
			"gm23Self23" => $gm23Self23,
			"player23Self23" => $player23Self23,
			"gm24Num23" => $gm24Num23,
			"player24Num23" => $player24Num23,
			"gm24Self23" => $gm24Self23,
			"player24Self23" => $player24Self23,
			"calendar24" => $calendar24, 
			"gm1Num24" => $gm1Num24,
			"player1Num24" => $player1Num24,
			"gm1Self24" => $gm1Self24,
			"player1Self24" => $player1Self24,
			"gm2Num24" => $gm2Num24,
			"player2Num24" => $player2Num24,
			"gm2Self24" => $gm2Self24,
			"player2Self24" => $player2Self24,
			"gm3Num24" => $gm3Num24,
			"player3Num24" => $player3Num24,
			"gm3Self24" => $gm3Self24,
			"player3Self24" => $player3Self24,
			"gm4Num24" => $gm4Num24,
			"player4Num24" => $player4Num24,
			"gm4Self24" => $gm4Self24,
			"player4Self24" => $player4Self24,
			"gm5Num24" => $gm5Num24,
			"player5Num24" => $player5Num24,
			"gm5Self24" => $gm5Self24,
			"player5Self24" => $player5Self24,
			"gm6Num24" => $gm6Num24,
			"player6Num24" => $player6Num24,
			"gm6Self24" => $gm6Self24,
			"player6Self24" => $player6Self24,
			"gm7Num24" => $gm7Num24,
			"player7Num24" => $player7Num24,
			"gm7Self24" => $gm7Self24,
			"player7Self24" => $player7Self24,
			"gm8Num24" => $gm8Num24,
			"player8Num24" => $player8Num24,
			"gm8Self24" => $gm8Self24,
			"player8Self24" => $player8Self24,
			"gm9Num24" => $gm9Num24,
			"player9Num24" => $player9Num24,
			"gm9Self24" => $gm9Self24,
			"player9Self24" => $player9Self24,
			"gm10Num24" => $gm10Num24,
			"player10Num24" => $player10Num24,
			"gm10Self24" => $gm10Self24,
			"player10Self24" => $player10Self24,
			"gm11Num24" => $gm11Num24,
			"player11Num24" => $player11Num24,
			"gm11Self24" => $gm11Self24,
			"player11Self24" => $player11Self24,
			"gm12Num24" => $gm12Num24,
			"player12Num24" => $player12Num24,
			"gm12Self24" => $gm12Self24,
			"player12Self24" => $player12Self24,
			"gm13Num24" => $gm13Num24,
			"player13Num24" => $player13Num24,
			"gm13Self24" => $gm13Self24,
			"player13Self24" => $player13Self24,
			"gm14Num24" => $gm14Num24,
			"player14Num24" => $player14Num24,
			"gm14Self24" => $gm14Self24,
			"player14Self24" => $player14Self24,
			"gm15Num24" => $gm15Num24,
			"player15Num24" => $player15Num24,
			"gm15Self24" => $gm15Self24,
			"player15Self24" => $player15Self24,
			"gm16Num24" => $gm16Num24,
			"player16Num24" => $player16Num24,
			"gm16Self24" => $gm16Self24,
			"player16Self24" => $player16Self24,
			"gm17Num24" => $gm17Num24,
			"player17Num24" => $player17Num24,
			"gm17Self24" => $gm17Self24,
			"player17Self24" => $player17Self24,
			"gm18Num24" => $gm18Num24,
			"player18Num24" => $player18Num24,
			"gm18Self24" => $gm18Self24,
			"player18Self24" => $player18Self24,
			"gm19Num24" => $gm19Num24,
			"player19Num24" => $player19Num24,
			"gm19Self24" => $gm19Self24,
			"player19Self24" => $player19Self24,
			"gm20Num24" => $gm20Num24,
			"player20Num24" => $player20Num24,
			"gm20Self24" => $gm20Self24,
			"player20Self24" => $player20Self24,
			"gm21Num24" => $gm21Num24,
			"player21Num24" => $player21Num24,
			"gm21Self24" => $gm21Self24,
			"player21Self24" => $player21Self24,
			"gm22Num24" => $gm22Num24,
			"player22Num24" => $player22Num24,
			"gm22Self24" => $gm22Self24,
			"player22Self24" => $player22Self24,
			"gm23Num24" => $gm23Num24,
			"player23Num24" => $player23Num24,
			"gm23Self24" => $gm23Self24,
			"player23Self24" => $player23Self24,
			"gm24Num24" => $gm24Num24,
			"player24Num24" => $player24Num24,
			"gm24Self24" => $gm24Self24,
			"player24Self24" => $player24Self24,
			"calendar25" => $calendar25, 
			"gm1Num25" => $gm1Num25,
			"player1Num25" => $player1Num25,
			"gm1Self25" => $gm1Self25,
			"player1Self25" => $player1Self25,
			"gm2Num25" => $gm2Num25,
			"player2Num25" => $player2Num25,
			"gm2Self25" => $gm2Self25,
			"player2Self25" => $player2Self25,
			"gm3Num25" => $gm3Num25,
			"player3Num25" => $player3Num25,
			"gm3Self25" => $gm3Self25,
			"player3Self25" => $player3Self25,
			"gm4Num25" => $gm4Num25,
			"player4Num25" => $player4Num25,
			"gm4Self25" => $gm4Self25,
			"player4Self25" => $player4Self25,
			"gm5Num25" => $gm5Num25,
			"player5Num25" => $player5Num25,
			"gm5Self25" => $gm5Self25,
			"player5Self25" => $player5Self25,
			"gm6Num25" => $gm6Num25,
			"player6Num25" => $player6Num25,
			"gm6Self25" => $gm6Self25,
			"player6Self25" => $player6Self25,
			"gm7Num25" => $gm7Num25,
			"player7Num25" => $player7Num25,
			"gm7Self25" => $gm7Self25,
			"player7Self25" => $player7Self25,
			"gm8Num25" => $gm8Num25,
			"player8Num25" => $player8Num25,
			"gm8Self25" => $gm8Self25,
			"player8Self25" => $player8Self25,
			"gm9Num25" => $gm9Num25,
			"player9Num25" => $player9Num25,
			"gm9Self25" => $gm9Self25,
			"player9Self25" => $player9Self25,
			"gm10Num25" => $gm10Num25,
			"player10Num25" => $player10Num25,
			"gm10Self25" => $gm10Self25,
			"player10Self25" => $player10Self25,
			"gm11Num25" => $gm11Num25,
			"player11Num25" => $player11Num25,
			"gm11Self25" => $gm11Self25,
			"player11Self25" => $player11Self25,
			"gm12Num25" => $gm12Num25,
			"player12Num25" => $player12Num25,
			"gm12Self25" => $gm12Self25,
			"player12Self25" => $player12Self25,
			"gm13Num25" => $gm13Num25,
			"player13Num25" => $player13Num25,
			"gm13Self25" => $gm13Self25,
			"player13Self25" => $player13Self25,
			"gm14Num25" => $gm14Num25,
			"player14Num25" => $player14Num25,
			"gm14Self25" => $gm14Self25,
			"player14Self25" => $player14Self25,
			"gm15Num25" => $gm15Num25,
			"player15Num25" => $player15Num25,
			"gm15Self25" => $gm15Self25,
			"player15Self25" => $player15Self25,
			"gm16Num25" => $gm16Num25,
			"player16Num25" => $player16Num25,
			"gm16Self25" => $gm16Self25,
			"player16Self25" => $player16Self25,
			"gm17Num25" => $gm17Num25,
			"player17Num25" => $player17Num25,
			"gm17Self25" => $gm17Self25,
			"player17Self25" => $player17Self25,
			"gm18Num25" => $gm18Num25,
			"player18Num25" => $player18Num25,
			"gm18Self25" => $gm18Self25,
			"player18Self25" => $player18Self25,
			"gm19Num25" => $gm19Num25,
			"player19Num25" => $player19Num25,
			"gm19Self25" => $gm19Self25,
			"player19Self25" => $player19Self25,
			"gm20Num25" => $gm20Num25,
			"player20Num25" => $player20Num25,
			"gm20Self25" => $gm20Self25,
			"player20Self25" => $player20Self25,
			"gm21Num25" => $gm21Num25,
			"player21Num25" => $player21Num25,
			"gm21Self25" => $gm21Self25,
			"player21Self25" => $player21Self25,
			"gm22Num25" => $gm22Num25,
			"player22Num25" => $player22Num25,
			"gm22Self25" => $gm22Self25,
			"player22Self25" => $player22Self25,
			"gm23Num25" => $gm23Num25,
			"player23Num25" => $player23Num25,
			"gm23Self25" => $gm23Self25,
			"player23Self25" => $player23Self25,
			"gm24Num25" => $gm24Num25,
			"player24Num25" => $player24Num25,
			"gm24Self25" => $gm24Self25,
			"player24Self25" => $player24Self25,
			"calendar26" => $calendar26, 
			"gm1Num26" => $gm1Num26,
			"player1Num26" => $player1Num26,
			"gm1Self26" => $gm1Self26,
			"player1Self26" => $player1Self26,
			"gm2Num26" => $gm2Num26,
			"player2Num26" => $player2Num26,
			"gm2Self26" => $gm2Self26,
			"player2Self26" => $player2Self26,
			"gm3Num26" => $gm3Num26,
			"player3Num26" => $player3Num26,
			"gm3Self26" => $gm3Self26,
			"player3Self26" => $player3Self26,
			"gm4Num26" => $gm4Num26,
			"player4Num26" => $player4Num26,
			"gm4Self26" => $gm4Self26,
			"player4Self26" => $player4Self26,
			"gm5Num26" => $gm5Num26,
			"player5Num26" => $player5Num26,
			"gm5Self26" => $gm5Self26,
			"player5Self26" => $player5Self26,
			"gm6Num26" => $gm6Num26,
			"player6Num26" => $player6Num26,
			"gm6Self26" => $gm6Self26,
			"player6Self26" => $player6Self26,
			"gm7Num26" => $gm7Num26,
			"player7Num26" => $player7Num26,
			"gm7Self26" => $gm7Self26,
			"player7Self26" => $player7Self26,
			"gm8Num26" => $gm8Num26,
			"player8Num26" => $player8Num26,
			"gm8Self26" => $gm8Self26,
			"player8Self26" => $player8Self26,
			"gm9Num26" => $gm9Num26,
			"player9Num26" => $player9Num26,
			"gm9Self26" => $gm9Self26,
			"player9Self26" => $player9Self26,
			"gm10Num26" => $gm10Num26,
			"player10Num26" => $player10Num26,
			"gm10Self26" => $gm10Self26,
			"player10Self26" => $player10Self26,
			"gm11Num26" => $gm11Num26,
			"player11Num26" => $player11Num26,
			"gm11Self26" => $gm11Self26,
			"player11Self26" => $player11Self26,
			"gm12Num26" => $gm12Num26,
			"player12Num26" => $player12Num26,
			"gm12Self26" => $gm12Self26,
			"player12Self26" => $player12Self26,
			"gm13Num26" => $gm13Num26,
			"player13Num26" => $player13Num26,
			"gm13Self26" => $gm13Self26,
			"player13Self26" => $player13Self26,
			"gm14Num26" => $gm14Num26,
			"player14Num26" => $player14Num26,
			"gm14Self26" => $gm14Self26,
			"player14Self26" => $player14Self26,
			"gm15Num26" => $gm15Num26,
			"player15Num26" => $player15Num26,
			"gm15Self26" => $gm15Self26,
			"player15Self26" => $player15Self26,
			"gm16Num26" => $gm16Num26,
			"player16Num26" => $player16Num26,
			"gm16Self26" => $gm16Self26,
			"player16Self26" => $player16Self26,
			"gm17Num26" => $gm17Num26,
			"player17Num26" => $player17Num26,
			"gm17Self26" => $gm17Self26,
			"player17Self26" => $player17Self26,
			"gm18Num26" => $gm18Num26,
			"player18Num26" => $player18Num26,
			"gm18Self26" => $gm18Self26,
			"player18Self26" => $player18Self26,
			"gm19Num26" => $gm19Num26,
			"player19Num26" => $player19Num26,
			"gm19Self26" => $gm19Self26,
			"player19Self26" => $player19Self26,
			"gm20Num26" => $gm20Num26,
			"player20Num26" => $player20Num26,
			"gm20Self26" => $gm20Self26,
			"player20Self26" => $player20Self26,
			"gm21Num26" => $gm21Num26,
			"player21Num26" => $player21Num26,
			"gm21Self26" => $gm21Self26,
			"player21Self26" => $player21Self26,
			"gm22Num26" => $gm22Num26,
			"player22Num26" => $player22Num26,
			"gm22Self26" => $gm22Self26,
			"player22Self26" => $player22Self26,
			"gm23Num26" => $gm23Num26,
			"player23Num26" => $player23Num26,
			"gm23Self26" => $gm23Self26,
			"player23Self26" => $player23Self26,
			"gm24Num26" => $gm24Num26,
			"player24Num26" => $player24Num26,
			"gm24Self26" => $gm24Self26,
			"player24Self26" => $player24Self26,
			"calendar27" => $calendar27, 
			"gm1Num27" => $gm1Num27,
			"player1Num27" => $player1Num27,
			"gm1Self27" => $gm1Self27,
			"player1Self27" => $player1Self27,
			"gm2Num27" => $gm2Num27,
			"player2Num27" => $player2Num27,
			"gm2Self27" => $gm2Self27,
			"player2Self27" => $player2Self27,
			"gm3Num27" => $gm3Num27,
			"player3Num27" => $player3Num27,
			"gm3Self27" => $gm3Self27,
			"player3Self27" => $player3Self27,
			"gm4Num27" => $gm4Num27,
			"player4Num27" => $player4Num27,
			"gm4Self27" => $gm4Self27,
			"player4Self27" => $player4Self27,
			"gm5Num27" => $gm5Num27,
			"player5Num27" => $player5Num27,
			"gm5Self27" => $gm5Self27,
			"player5Self27" => $player5Self27,
			"gm6Num27" => $gm6Num27,
			"player6Num27" => $player6Num27,
			"gm6Self27" => $gm6Self27,
			"player6Self27" => $player6Self27,
			"gm7Num27" => $gm7Num27,
			"player7Num27" => $player7Num27,
			"gm7Self27" => $gm7Self27,
			"player7Self27" => $player7Self27,
			"gm8Num27" => $gm8Num27,
			"player8Num27" => $player8Num27,
			"gm8Self27" => $gm8Self27,
			"player8Self27" => $player8Self27,
			"gm9Num27" => $gm9Num27,
			"player9Num27" => $player9Num27,
			"gm9Self27" => $gm9Self27,
			"player9Self27" => $player9Self27,
			"gm10Num27" => $gm10Num27,
			"player10Num27" => $player10Num27,
			"gm10Self27" => $gm10Self27,
			"player10Self27" => $player10Self27,
			"gm11Num27" => $gm11Num27,
			"player11Num27" => $player11Num27,
			"gm11Self27" => $gm11Self27,
			"player11Self27" => $player11Self27,
			"gm12Num27" => $gm12Num27,
			"player12Num27" => $player12Num27,
			"gm12Self27" => $gm12Self27,
			"player12Self27" => $player12Self27,
			"gm13Num27" => $gm13Num27,
			"player13Num27" => $player13Num27,
			"gm13Self27" => $gm13Self27,
			"player13Self27" => $player13Self27,
			"gm14Num27" => $gm14Num27,
			"player14Num27" => $player14Num27,
			"gm14Self27" => $gm14Self27,
			"player14Self27" => $player14Self27,
			"gm15Num27" => $gm15Num27,
			"player15Num27" => $player15Num27,
			"gm15Self27" => $gm15Self27,
			"player15Self27" => $player15Self27,
			"gm16Num27" => $gm16Num27,
			"player16Num27" => $player16Num27,
			"gm16Self27" => $gm16Self27,
			"player16Self27" => $player16Self27,
			"gm17Num27" => $gm17Num27,
			"player17Num27" => $player17Num27,
			"gm17Self27" => $gm17Self27,
			"player17Self27" => $player17Self27,
			"gm18Num27" => $gm18Num27,
			"player18Num27" => $player18Num27,
			"gm18Self27" => $gm18Self27,
			"player18Self27" => $player18Self27,
			"gm19Num27" => $gm19Num27,
			"player19Num27" => $player19Num27,
			"gm19Self27" => $gm19Self27,
			"player19Self27" => $player19Self27,
			"gm20Num27" => $gm20Num27,
			"player20Num27" => $player20Num27,
			"gm20Self27" => $gm20Self27,
			"player20Self27" => $player20Self27,
			"gm21Num27" => $gm21Num27,
			"player21Num27" => $player21Num27,
			"gm21Self27" => $gm21Self27,
			"player21Self27" => $player21Self27,
			"gm22Num27" => $gm22Num27,
			"player22Num27" => $player22Num27,
			"gm22Self27" => $gm22Self27,
			"player22Self27" => $player22Self27,
			"gm23Num27" => $gm23Num27,
			"player23Num27" => $player23Num27,
			"gm23Self27" => $gm23Self27,
			"player23Self27" => $player23Self27,
			"gm24Num27" => $gm24Num27,
			"player24Num27" => $player24Num27,
			"gm24Self27" => $gm24Self27,
			"player24Self27" => $player24Self27,
			"calendar28" => $calendar28, 
			"gm1Num28" => $gm1Num28,
			"player1Num28" => $player1Num28,
			"gm1Self28" => $gm1Self28,
			"player1Self28" => $player1Self28,
			"gm2Num28" => $gm2Num28,
			"player2Num28" => $player2Num28,
			"gm2Self28" => $gm2Self28,
			"player2Self28" => $player2Self28,
			"gm3Num28" => $gm3Num28,
			"player3Num28" => $player3Num28,
			"gm3Self28" => $gm3Self28,
			"player3Self28" => $player3Self28,
			"gm4Num28" => $gm4Num28,
			"player4Num28" => $player4Num28,
			"gm4Self28" => $gm4Self28,
			"player4Self28" => $player4Self28,
			"gm5Num28" => $gm5Num28,
			"player5Num28" => $player5Num28,
			"gm5Self28" => $gm5Self28,
			"player5Self28" => $player5Self28,
			"gm6Num28" => $gm6Num28,
			"player6Num28" => $player6Num28,
			"gm6Self28" => $gm6Self28,
			"player6Self28" => $player6Self28,
			"gm7Num28" => $gm7Num28,
			"player7Num28" => $player7Num28,
			"gm7Self28" => $gm7Self28,
			"player7Self28" => $player7Self28,
			"gm8Num28" => $gm8Num28,
			"player8Num28" => $player8Num28,
			"gm8Self28" => $gm8Self28,
			"player8Self28" => $player8Self28,
			"gm9Num28" => $gm9Num28,
			"player9Num28" => $player9Num28,
			"gm9Self28" => $gm9Self28,
			"player9Self28" => $player9Self28,
			"gm10Num28" => $gm10Num28,
			"player10Num28" => $player10Num28,
			"gm10Self28" => $gm10Self28,
			"player10Self28" => $player10Self28,
			"gm11Num28" => $gm11Num28,
			"player11Num28" => $player11Num28,
			"gm11Self28" => $gm11Self28,
			"player11Self28" => $player11Self28,
			"gm12Num28" => $gm12Num28,
			"player12Num28" => $player12Num28,
			"gm12Self28" => $gm12Self28,
			"player12Self28" => $player12Self28,
			"gm13Num28" => $gm13Num28,
			"player13Num28" => $player13Num28,
			"gm13Self28" => $gm13Self28,
			"player13Self28" => $player13Self28,
			"gm14Num28" => $gm14Num28,
			"player14Num28" => $player14Num28,
			"gm14Self28" => $gm14Self28,
			"player14Self28" => $player14Self28,
			"gm15Num28" => $gm15Num28,
			"player15Num28" => $player15Num28,
			"gm15Self28" => $gm15Self28,
			"player15Self28" => $player15Self28,
			"gm16Num28" => $gm16Num28,
			"player16Num28" => $player16Num28,
			"gm16Self28" => $gm16Self28,
			"player16Self28" => $player16Self28,
			"gm17Num28" => $gm17Num28,
			"player17Num28" => $player17Num28,
			"gm17Self28" => $gm17Self28,
			"player17Self28" => $player17Self28,
			"gm18Num28" => $gm18Num28,
			"player18Num28" => $player18Num28,
			"gm18Self28" => $gm18Self28,
			"player18Self28" => $player18Self28,
			"gm19Num28" => $gm19Num28,
			"player19Num28" => $player19Num28,
			"gm19Self28" => $gm19Self28,
			"player19Self28" => $player19Self28,
			"gm20Num28" => $gm20Num28,
			"player20Num28" => $player20Num28,
			"gm20Self28" => $gm20Self28,
			"player20Self28" => $player20Self28,
			"gm21Num28" => $gm21Num28,
			"player21Num28" => $player21Num28,
			"gm21Self28" => $gm21Self28,
			"player21Self28" => $player21Self28,
			"gm22Num28" => $gm22Num28,
			"player22Num28" => $player22Num28,
			"gm22Self28" => $gm22Self28,
			"player22Self28" => $player22Self28,
			"gm23Num28" => $gm23Num28,
			"player23Num28" => $player23Num28,
			"gm23Self28" => $gm23Self28,
			"player23Self28" => $player23Self28,
			"gm24Num28" => $gm24Num28,
			"player24Num28" => $player24Num28,
			"gm24Self28" => $gm24Self28,
			"player24Self28" => $player24Self28,
			"calendar29" => $calendar29, 
			"gm1Num29" => $gm1Num29,
			"player1Num29" => $player1Num29,
			"gm1Self29" => $gm1Self29,
			"player1Self29" => $player1Self29,
			"gm2Num29" => $gm2Num29,
			"player2Num29" => $player2Num29,
			"gm2Self29" => $gm2Self29,
			"player2Self29" => $player2Self29,
			"gm3Num29" => $gm3Num29,
			"player3Num29" => $player3Num29,
			"gm3Self29" => $gm3Self29,
			"player3Self29" => $player3Self29,
			"gm4Num29" => $gm4Num29,
			"player4Num29" => $player4Num29,
			"gm4Self29" => $gm4Self29,
			"player4Self29" => $player4Self29,
			"gm5Num29" => $gm5Num29,
			"player5Num29" => $player5Num29,
			"gm5Self29" => $gm5Self29,
			"player5Self29" => $player5Self29,
			"gm6Num29" => $gm6Num29,
			"player6Num29" => $player6Num29,
			"gm6Self29" => $gm6Self29,
			"player6Self29" => $player6Self29,
			"gm7Num29" => $gm7Num29,
			"player7Num29" => $player7Num29,
			"gm7Self29" => $gm7Self29,
			"player7Self29" => $player7Self29,
			"gm8Num29" => $gm8Num29,
			"player8Num29" => $player8Num29,
			"gm8Self29" => $gm8Self29,
			"player8Self29" => $player8Self29,
			"gm9Num29" => $gm9Num29,
			"player9Num29" => $player9Num29,
			"gm9Self29" => $gm9Self29,
			"player9Self29" => $player9Self29,
			"gm10Num29" => $gm10Num29,
			"player10Num29" => $player10Num29,
			"gm10Self29" => $gm10Self29,
			"player10Self29" => $player10Self29,
			"gm11Num29" => $gm11Num29,
			"player11Num29" => $player11Num29,
			"gm11Self29" => $gm11Self29,
			"player11Self29" => $player11Self29,
			"gm12Num29" => $gm12Num29,
			"player12Num29" => $player12Num29,
			"gm12Self29" => $gm12Self29,
			"player12Self29" => $player12Self29,
			"gm13Num29" => $gm13Num29,
			"player13Num29" => $player13Num29,
			"gm13Self29" => $gm13Self29,
			"player13Self29" => $player13Self29,
			"gm14Num29" => $gm14Num29,
			"player14Num29" => $player14Num29,
			"gm14Self29" => $gm14Self29,
			"player14Self29" => $player14Self29,
			"gm15Num29" => $gm15Num29,
			"player15Num29" => $player15Num29,
			"gm15Self29" => $gm15Self29,
			"player15Self29" => $player15Self29,
			"gm16Num29" => $gm16Num29,
			"player16Num29" => $player16Num29,
			"gm16Self29" => $gm16Self29,
			"player16Self29" => $player16Self29,
			"gm17Num29" => $gm17Num29,
			"player17Num29" => $player17Num29,
			"gm17Self29" => $gm17Self29,
			"player17Self29" => $player17Self29,
			"gm18Num29" => $gm18Num29,
			"player18Num29" => $player18Num29,
			"gm18Self29" => $gm18Self29,
			"player18Self29" => $player18Self29,
			"gm19Num29" => $gm19Num29,
			"player19Num29" => $player19Num29,
			"gm19Self29" => $gm19Self29,
			"player19Self29" => $player19Self29,
			"gm20Num29" => $gm20Num29,
			"player20Num29" => $player20Num29,
			"gm20Self29" => $gm20Self29,
			"player20Self29" => $player20Self29,
			"gm21Num29" => $gm21Num29,
			"player21Num29" => $player21Num29,
			"gm21Self29" => $gm21Self29,
			"player21Self29" => $player21Self29,
			"gm22Num29" => $gm22Num29,
			"player22Num29" => $player22Num29,
			"gm22Self29" => $gm22Self29,
			"player22Self29" => $player22Self29,
			"gm23Num29" => $gm23Num29,
			"player23Num29" => $player23Num29,
			"gm23Self29" => $gm23Self29,
			"player23Self29" => $player23Self29,
			"gm24Num29" => $gm24Num29,
			"player24Num29" => $player24Num29,
			"gm24Self29" => $gm24Self29,
			"player24Self29" => $player24Self29,
			"calendar30" => $calendar30, 
			"gm1Num30" => $gm1Num30,
			"player1Num30" => $player1Num30,
			"gm1Self30" => $gm1Self30,
			"player1Self30" => $player1Self30,
			"gm2Num30" => $gm2Num30,
			"player2Num30" => $player2Num30,
			"gm2Self30" => $gm2Self30,
			"player2Self30" => $player2Self30,
			"gm3Num30" => $gm3Num30,
			"player3Num30" => $player3Num30,
			"gm3Self30" => $gm3Self30,
			"player3Self30" => $player3Self30,
			"gm4Num30" => $gm4Num30,
			"player4Num30" => $player4Num30,
			"gm4Self30" => $gm4Self30,
			"player4Self30" => $player4Self30,
			"gm5Num30" => $gm5Num30,
			"player5Num30" => $player5Num30,
			"gm5Self30" => $gm5Self30,
			"player5Self30" => $player5Self30,
			"gm6Num30" => $gm6Num30,
			"player6Num30" => $player6Num30,
			"gm6Self30" => $gm6Self30,
			"player6Self30" => $player6Self30,
			"gm7Num30" => $gm7Num30,
			"player7Num30" => $player7Num30,
			"gm7Self30" => $gm7Self30,
			"player7Self30" => $player7Self30,
			"gm8Num30" => $gm8Num30,
			"player8Num30" => $player8Num30,
			"gm8Self30" => $gm8Self30,
			"player8Self30" => $player8Self30,
			"gm9Num30" => $gm9Num30,
			"player9Num30" => $player9Num30,
			"gm9Self30" => $gm9Self30,
			"player9Self30" => $player9Self30,
			"gm10Num30" => $gm10Num30,
			"player10Num30" => $player10Num30,
			"gm10Self30" => $gm10Self30,
			"player10Self30" => $player10Self30,
			"gm11Num30" => $gm11Num30,
			"player11Num30" => $player11Num30,
			"gm11Self30" => $gm11Self30,
			"player11Self30" => $player11Self30,
			"gm12Num30" => $gm12Num30,
			"player12Num30" => $player12Num30,
			"gm12Self30" => $gm12Self30,
			"player12Self30" => $player12Self30,
			"gm13Num30" => $gm13Num30,
			"player13Num30" => $player13Num30,
			"gm13Self30" => $gm13Self30,
			"player13Self30" => $player13Self30,
			"gm14Num30" => $gm14Num30,
			"player14Num30" => $player14Num30,
			"gm14Self30" => $gm14Self30,
			"player14Self30" => $player14Self30,
			"gm15Num30" => $gm15Num30,
			"player15Num30" => $player15Num30,
			"gm15Self30" => $gm15Self30,
			"player15Self30" => $player15Self30,
			"gm16Num30" => $gm16Num30,
			"player16Num30" => $player16Num30,
			"gm16Self30" => $gm16Self30,
			"player16Self30" => $player16Self30,
			"gm17Num30" => $gm17Num30,
			"player17Num30" => $player17Num30,
			"gm17Self30" => $gm17Self30,
			"player17Self30" => $player17Self30,
			"gm18Num30" => $gm18Num30,
			"player18Num30" => $player18Num30,
			"gm18Self30" => $gm18Self30,
			"player18Self30" => $player18Self30,
			"gm19Num30" => $gm19Num30,
			"player19Num30" => $player19Num30,
			"gm19Self30" => $gm19Self30,
			"player19Self30" => $player19Self30,
			"gm20Num30" => $gm20Num30,
			"player20Num30" => $player20Num30,
			"gm20Self30" => $gm20Self30,
			"player20Self30" => $player20Self30,
			"gm21Num30" => $gm21Num30,
			"player21Num30" => $player21Num30,
			"gm21Self30" => $gm21Self30,
			"player21Self30" => $player21Self30,
			"gm22Num30" => $gm22Num30,
			"player22Num30" => $player22Num30,
			"gm22Self30" => $gm22Self30,
			"player22Self30" => $player22Self30,
			"gm23Num30" => $gm23Num30,
			"player23Num30" => $player23Num30,
			"gm23Self30" => $gm23Self30,
			"player23Self30" => $player23Self30,
			"gm24Num30" => $gm24Num30,
			"player24Num30" => $player24Num30,
			"gm24Self30" => $gm24Self30,
			"player24Self30" => $player24Self30,
			"calendar31" => $calendar31, 
			"gm1Num31" => $gm1Num31,
			"player1Num31" => $player1Num31,
			"gm1Self31" => $gm1Self31,
			"player1Self31" => $player1Self31,
			"gm2Num31" => $gm2Num31,
			"player2Num31" => $player2Num31,
			"gm2Self31" => $gm2Self31,
			"player2Self31" => $player2Self31,
			"gm3Num31" => $gm3Num31,
			"player3Num31" => $player3Num31,
			"gm3Self31" => $gm3Self31,
			"player3Self31" => $player3Self31,
			"gm4Num31" => $gm4Num31,
			"player4Num31" => $player4Num31,
			"gm4Self31" => $gm4Self31,
			"player4Self31" => $player4Self31,
			"gm5Num31" => $gm5Num31,
			"player5Num31" => $player5Num31,
			"gm5Self31" => $gm5Self31,
			"player5Self31" => $player5Self31,
			"gm6Num31" => $gm6Num31,
			"player6Num31" => $player6Num31,
			"gm6Self31" => $gm6Self31,
			"player6Self31" => $player6Self31,
			"gm7Num31" => $gm7Num31,
			"player7Num31" => $player7Num31,
			"gm7Self31" => $gm7Self31,
			"player7Self31" => $player7Self31,
			"gm8Num31" => $gm8Num31,
			"player8Num31" => $player8Num31,
			"gm8Self31" => $gm8Self31,
			"player8Self31" => $player8Self31,
			"gm9Num31" => $gm9Num31,
			"player9Num31" => $player9Num31,
			"gm9Self31" => $gm9Self31,
			"player9Self31" => $player9Self31,
			"gm10Num31" => $gm10Num31,
			"player10Num31" => $player10Num31,
			"gm10Self31" => $gm10Self31,
			"player10Self31" => $player10Self31,
			"gm11Num31" => $gm11Num31,
			"player11Num31" => $player11Num31,
			"gm11Self31" => $gm11Self31,
			"player11Self31" => $player11Self31,
			"gm12Num31" => $gm12Num31,
			"player12Num31" => $player12Num31,
			"gm12Self31" => $gm12Self31,
			"player12Self31" => $player12Self31,
			"gm13Num31" => $gm13Num31,
			"player13Num31" => $player13Num31,
			"gm13Self31" => $gm13Self31,
			"player13Self31" => $player13Self31,
			"gm14Num31" => $gm14Num31,
			"player14Num31" => $player14Num31,
			"gm14Self31" => $gm14Self31,
			"player14Self31" => $player14Self31,
			"gm15Num31" => $gm15Num31,
			"player15Num31" => $player15Num31,
			"gm15Self31" => $gm15Self31,
			"player15Self31" => $player15Self31,
			"gm16Num31" => $gm16Num31,
			"player16Num31" => $player16Num31,
			"gm16Self31" => $gm16Self31,
			"player16Self31" => $player16Self31,
			"gm17Num31" => $gm17Num31,
			"player17Num31" => $player17Num31,
			"gm17Self31" => $gm17Self31,
			"player17Self31" => $player17Self31,
			"gm18Num31" => $gm18Num31,
			"player18Num31" => $player18Num31,
			"gm18Self31" => $gm18Self31,
			"player18Self31" => $player18Self31,
			"gm19Num31" => $gm19Num31,
			"player19Num31" => $player19Num31,
			"gm19Self31" => $gm19Self31,
			"player19Self31" => $player19Self31,
			"gm20Num31" => $gm20Num31,
			"player20Num31" => $player20Num31,
			"gm20Self31" => $gm20Self31,
			"player20Self31" => $player20Self31,
			"gm21Num31" => $gm21Num31,
			"player21Num31" => $player21Num31,
			"gm21Self31" => $gm21Self31,
			"player21Self31" => $player21Self31,
			"gm22Num31" => $gm22Num31,
			"player22Num31" => $player22Num31,
			"gm22Self31" => $gm22Self31,
			"player22Self31" => $player22Self31,
			"gm23Num31" => $gm23Num31,
			"player23Num31" => $player23Num31,
			"gm23Self31" => $gm23Self31,
			"player23Self31" => $player23Self31,
			"gm24Num31" => $gm24Num31,
			"player24Num31" => $player24Num31,
			"gm24Self31" => $gm24Self31,
			"player24Self31" => $player24Self31	
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
