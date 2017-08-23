<?php  
	class DatabaseConnect extends Connection{
		public function __construct($connectionData){
			parent::__construct($connectionData["dsn"], $connectionData["user"], $connectionData["password"]);

			if(!$this->getConnection()){
				return false;
			}
		}
	}
?>