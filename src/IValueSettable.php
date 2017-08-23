<?php
/**
 * Created by PhpStorm.
 * Project: localhost
 * Date: 12.05.2015
 * HelperDateTime: 11:31
 */

namespace Ceive\Value {


	/**
	 * Interface IValueSettable
	 * @package Ceive\Value
	 */
	interface IValueSettable{

		/**
		 * @param $value
		 * @return $this
		 */
		public function setValue($value);

	}
}