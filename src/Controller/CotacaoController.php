<?php  
	class CotacaoController extends Controller{
		private $baseCotacao;

		public function __construct($requestData, $templateSystem){
			parent::__construct($requestData, $templateSystem);
			$this->baseCotacao = new DatabaseConnect(database("firebird", "cotacao"));
		}

		public function isAuthorized($method, $user){
			$allowedMethods = ["home"];

			return $this->authorizedToAccess($method, $allowedMethods, $user);
		}

		public function home(){
			debug($this->baseCotacao->select("*", "COTACAO"));
			$this->setTitle("Welcome");
		}
	}
?>