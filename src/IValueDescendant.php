<?php
/**
 * Created by PhpStorm.
 * Project: localhost
 * Date: 12.05.2015
 * HelperDateTime: 11:34
 */

namespace Ceive\Value {



	/**
	 * Interface IValueExtendable
	 * @package Ceive\Value
	 */
	interface IValueDescendant extends IValue{

		/**
		 * @return $this
		 */
		public function setAncestor();

		/**
		 * @return IValue
		 */
		public function getAncestor();

	}
}