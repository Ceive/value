<?php
/**
 * Created by PhpStorm.
 * Project: localhost
 * Date: 12.05.2015
 * HelperDateTime: 11:30
 */

namespace Ceive\Value {

	/**
	 * Interface IValue
	 * @package Ceive\Value
	 */
	interface IValue{

		/**
		 * @return string
		 */
		public function getValue();

		/**
		 * @param IValue|mixed $value
		 * @return bool
		 */
		public function equal($value);


	}
}