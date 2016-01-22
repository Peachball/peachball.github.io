<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="utf-8">
		<title>SNAKE!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.11.3/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script src='../global.js'></script>
		<script src='snake.js'></script>

		<style>
			#snakeCanvas {
				border: 1px solid red;
			}
		</style>

	</head>

	<body>
		<div id="mainContent">

			<div class="container">
				<h1>
					What kind of snake would you like to play?
					</h1>
				<div class='row'>
					<div class='col-lg-4'>
						<button class='btn btn-default' id='SinglePlayer'>
							<h3>
								 Play Single Player Snake
							 </h3>
						</button>
					</div>

					<div class='col-lg-4'>
						<button class='btn btn-default' id='SnakeAI'>
							<h3>
								Watch Snake AI
							</h3>
						</button>
					</div>

					<div class='col-lg-4'>
						<button class='btn btn-default' id='onlineSnake'>
							<h3>
								Play Against Other people online! (WIP)
							</h3>
						</button>
					</div>
				</div>

				<canvas id='snakeCanvas' height=500 width=500 class='center-block'>
				</canvas>

				<button class='btn btn-danger' id='restartButton'>
					Play Again?
				</button>

<script>
$('#restartButton').hide();
$('#snakeCanvas').hide();
</script>
			</div>
		</div>
<?php
include(getcwd() . '/navigation.html');
echo get_include_path();
echo getcwd();
?>
</body>

</html>
</html>
