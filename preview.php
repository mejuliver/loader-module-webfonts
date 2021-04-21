<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul>
						<?php
							foreach( glob(__DIR__.'/fonts/*') as $t ){
								$name = explode('/',str_replace('\\','/',$t));

								$alias = file_get_contents(__DIR__.'/fonts/'.end($name).'/alias.txt');


								echo '<li><strong>'.end($name).'</strong> - '.$alias.'</li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>	
</body>
</html>