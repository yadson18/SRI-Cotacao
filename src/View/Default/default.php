<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?= getAppName() . " - " . $this->getTitle() ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= $this->css("bootstrap.min.css") ?>
		<?= $this->css("font-awesome.min.css") ?>
		<?= $this->less("mixin.less") ?>
		
		<?= $this->script("jquery.min.js") ?>
		<?= $this->script("bootstrap.min.js") ?>
		<?= $this->script("HtmlMaker.js") ?>

		<?php if($this->getTitle() === "Início"): ?>
			<?= $this->less("presentation-style.less") ?>
		<?php else: ?>
			<?= $this->less("pages-style.less") ?>
		<?php endif; ?>

		<?= $this->script("less.min.js") ?>
		<script type="text/javascript">
			// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
			$(window).on("load resize ", function() {
			  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
			  $('.tbl-header').css({'padding-right':scrollWidth});
			}).resize();
		</script>
		<style type="text/css">
section{
	min-width: 400px;
}		
h1{
  font-size: 30px;
  color: #aaa;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin: 75px 0 15px 0;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: #58a;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid #ddd;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: white;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #333;
  border-bottom: solid 1px #ccc;
}


/* demo styles */

section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
		</style>
	</head>
	<body>	
		<?php if($this->getTitle() !== "Início"): ?>
			<nav class="navbar navbar-default navbar-fixed-top" id="home-nav">
				<div class="container-fluid">
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#responsive-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					    </button>
					</div>
					<div class="collapse navbar-collapse" id="responsive-menu">
					   	<ul class="nav navbar-nav navbar-right">
					   		<li class="text-capitalize">
					   			<a href="" class="dropdown-toggle" type="button" data-toggle="dropdown">
					   				<?= mb_strtolower($this->getLoggedUser("NOME"), "UTF-8") ?> <span class="caret"></span>
					   			</a>
								<ul class="dropdown-menu">
								   	<li>
								   		<a href="/User/logout">
					   						Sair <i class="fa fa-sign-out" aria-hidden="true"></i>
					   					</a>
					   				</li>
								</ul>
					   		</li>
					  	</ul>
					</div>
				</div>
			</nav>
		<?php endif; ?>
		<div>
			<?= $this->fetchAll() ?>
		</div>
		<?php if($this->getTitle() === "Início"): ?>
			<?= $this->script("presentation-scripts.js") ?>
		<?php else: ?>
			<?= $this->script("pages-scripts.js") ?>
		<?php endif; ?>
	</body>
</html>