<?php  
	class UserController extends Controller{
		private $usuariosDB;

		public function __construct($requestData, $templateSystem){
			parent::__construct($requestData, $templateSystem);
			$this->usuariosDB = new DatabaseConnect(getDatabaseConfig("firebird", "users"));
		}

		public function isAuthorized($method, $user){
			$allowedMethods = ["login"];

			return $this->authorizedToAccess($method, $allowedMethods, $user);
		}

		public function login(){
			if($this->requestMethodIs("POST")){
				$condition = "WHERE LOGIN = ? AND SENHA = ?";
				$result = $this->usuariosDB->select("*", "COLABORADOR", $condition, [$_POST["login"], $_POST["senha"]]);
				
				if(!empty($result)){
					$this->setLoggedUser($result);
					return $this->redirectTo(["controller" => "Cotacao", "view" => "home"]);
				}
				$this->flash("Error", "Usuário ou senha incorreto, tente novamente.");
				return $this->redirectTo(["controller" => "Sri", "view" => "home"]);
			}

			$this->setTitle("Login");
		}

		public function logout(){
			if($this->requestMethodIs("GET")){
				$this->destroyAllData();
				return $this->redirectTo(["controller" => "Sri", "view" => "home"]);
			}
		} 
	}
?>