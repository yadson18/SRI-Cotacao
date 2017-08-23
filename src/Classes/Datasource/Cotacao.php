<?php  
	class Cotacao extends Connection{
		static $dsn = 'firebird:dbname=localhost:/BD/SRICOTACAO.FDB; charset=utf8';
		static $user = 'SYSDBA';
		static $password = 'masterkey';
		
		public function __construct(){
			parent::__construct(self::$dsn , self::$user , self::$password);

			if(!$this->getConnection()){
				return false;
			}
		}
	}
?>