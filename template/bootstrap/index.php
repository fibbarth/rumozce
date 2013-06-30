<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="<?php echo $this->base_url; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $this->base_url; ?>css/bootstrap-responsive.css"	rel="stylesheet">
<link href="<?php echo $this->base_url; ?>css/estilos.css"	rel="stylesheet">
<?php foreach( $this->headers as $header ): 
		echo $header;
	  endforeach;
?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button data-target=".nav-collapse" data-toggle="collapse"
					class="btn btn-navbar" type="button">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="" class="brand">Rumo a certificação</a>
				<div class="nav-collapse collapse">
				<!-- 
					<ul class="nav">
						<li class=""><a href="./index.html">Home</a></li>
					</ul>
					 -->
				</div>
			</div>
		</div>
	</div>
	<div>
	<?php $this->getTmpl();?>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="<?php echo $this->base_url; ?>js/bootstrap.min.js"></script>
	</body>
</html>