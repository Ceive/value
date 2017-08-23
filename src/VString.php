<?php
/**
 * Created by PhpStorm.
 * Project: localhost
 * Date: 12.05.2015
 * HelperDateTime: 13:52
 */

namespace Ceive\Value {

	/**
	 * Phalcon dependency injected , temporal
	 */
	use Ceive\RegExp;
	
	/**
	 * Class VString
	 * @package Ceive\Value
	 */
	class VString extends Value{

		/**
		 * @var string
		 */
		protected static $default_camelize_delimiter = '_';

		/**
		 * @var array
		 */
		protected static $camelize_word_delimiters = ['-','_'];

		/**
		 * @var string
		 */
		protected static $default_value = '';

		/**
		 * @return $this
		 */
		public function camelize(){
			$val = $this->getRaw();
			return $this->setValue(\Ceive\Value\Helper\HelperString::camelize($val));
		}

		/**
		 * @return $this
		 */
		public function uncamelize(){
			$val = $this->getRaw();
			return $this->setValue(\Ceive\Value\Helper\HelperString::uncamelize($val));
		}

		/**
		 * @param null $separator
		 * @return $this
		 */
		public function increment($separator = null){
			$val = $this->getRaw();
			return $this->setValue(\Ceive\Value\Helper\HelperString::increment($val, $separator));
		}

		/**
		 * @return $this
		 */
		public function lower(){
			$val = $this->getRaw();
			return $this->setValue(mb_strtolower($val));
		}

		/**
		 * @return $this
		 */
		public function upper(){
			$val = $this->getRaw();
			return $this->setValue(mb_strtoupper($val));
		}

	}
}