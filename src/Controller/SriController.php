<?php  
	class SriController extends Controller{
		public function __construct($requestData, $templateSystem){
			parent::__construct($requestData, $templateSystem);
		}

		public function isAuthorized($method, $user){
			$allowedMethods = ["home"];

			return $this->authorizedToAccess($method, $allowedMethods, $user);
		}

		public function home(){
			$this->setTitle("Home");
		}
	}
?>