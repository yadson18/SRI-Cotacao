<?php  
	class Pages extends Controller{
		private $cotacao;

		public function __construct($requestData, $templateSystem){
			parent::__construct($requestData, $templateSystem);
			$this->cotacao = new Cotacao();
		}

		public function isAuthorized($method, $user){
			$allowedMethods = ["home"];

			return $this->authorizedToAccess($method, $allowedMethods, $user);
		}

		public function home(){
			debug($this->cotacao->getConnection());
			$this->setTitle("Welcome");
		}
	}
?>