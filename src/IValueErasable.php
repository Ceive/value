<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 19.02.2016
 * HelperDateTime: 16:52
 */
namespace Ceive\Value {

	/**
	 * Interface IValueErasable
	 * @package Ceive\Value
	 */
	interface IValueErasable{

		/**
		 * @return bool
		 */
		public function eraseValue();

	}
}

