<?php  
	class CotacaoController extends Controller{
		private $baseCotacao;

		public function __construct($requestData, $templateSystem){
			parent::__construct($requestData, $templateSystem);
			$this->baseCotacao = new DatabaseConnect(getDatabaseConfig("firebird", "cotacao"));
		}

		public function isAuthorized($method, $user){
			$allowedMethods = ["home"];

			return $this->authorizedToAccess($method, $allowedMethods, $user);
		}

		public function home(){
			//Webservice::getInstance();
			//debug($this->baseCotacao->select("*", "COTACAO"));
			$this->setTitle("Welcome");
		}
	}
?>