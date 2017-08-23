<?php  
	$appConfiguration = [
		"databases" => [
			"firebird" => [
				"cotacao" => [
					"dbPath" => "C:\SRI\DADOSVR\BD\SRICOTACAO.FDB",
					"dbUser" => "SYSDBA",
					"dbPassword" => "masterkey",
					"charset" => "utf-8"
				],
				"users" => [
					"dbPath" => "C:\SRI\DADOSVR\BD\SRICASH2.FDB",
					"dbUser" => "SYSDBA",
					"dbPassword" => "masterkey",
					"charset" => "utf-8"
				],
				"applicationBase" => [
					"dbPath" => "C:\SRI\DADOSVR\BD\SRICASH.FDB",
					"dbUser" => "SYSDBA",
					"dbPassword" => "masterkey",
					"charset" => "utf-8"
				]
			]
		]
	];
?>