<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 11.11.2015
 * HelperDateTime: 17:49
 */
namespace Ceive\Value\Number {
	
	use Ceive\Value\VNumber;
	
	/**
	 * Class VNumberFloat
	 * @package Ceive\Value\VNumber
	 */
	class VNumberFloat extends VNumber{


		/**
		 * @var float
		 */
		protected static $default_value = 0.0;

		/**
		 * @param $pass
		 */
		protected function beforeValueSet(& $pass){
			$pass = floatval($pass);
		}
	}
}

