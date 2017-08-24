<?php  
	$appConfiguration = [
		"AppName" => "SRI Cotação",
		
		"Databases" => [
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
		],

		"ClassesPath" => [
			"Classes/Datasource", 
			"Classes/TemplateSystem",
			"Classes/TemplateSystem/TemplateTraits",
			"Classes/Webservice",
			"Controller", 
			"Controller/ControllerTraits"
		],

		"Webservice" => [
			"url" => "http://sriservicos.com.br/integrasri/IntegraSRI.dll/wsdl/ISRI",
			"options" => [
				"soap_version" => "SOAP_1_2",
                "exceptions" => true,
                "trace" => 1,
                "cache_wsdl" => "WSDL_CACHE_NONE",
                "stream_context" => stream_context_create([
                	"ssl" => [
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "crypto_method" => STREAM_CRYPTO_METHOD_TLS_CLIENT
                    ]
                ])
			]
		]
	];
?>