<?php
	class Controller{
		public $model;
		protected $vista;
		protected $params;
		protected $conf;
		public $loader;

		function __construct($parametros){
			$this->params =$parametros;
			$this->conf = Config::getIns();
			$this->loader = new Loader();

		}

		




	}


?>