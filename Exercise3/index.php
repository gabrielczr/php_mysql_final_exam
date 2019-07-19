<!DOCTYPE html>
<html>

<head>
	<title>Add a new car</title>
</head>

<body>
	<div id="resultForm">...</div>

	<p>Insert a new car model</p>
	<form method="POST">
		<div>
			<label for="brand">Brand :</label>
			<input type="text" name="brand" id="brand" required>
		</div>

		<div>
			<label for="model">Model :</label>
			<input type="text" name="model" id="model">
		</div>

		<div>
			<label for="year">Year :</label>
			<input type="text" name="year" id="year" required>
		</div>

		<div>
			<label for="color">Color :</label>
			<input type="text" name="color" id="color">
		</div>

		<input type="submit" name="submit" value="Add a new car">
	</form>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script>
		$(function() {
			$('input[type="submit"]').click(function(e) {

				e.preventDefault();
				$.ajax({
					url: 'addCar.php',
					type: 'post',
					data: $('form').serialize(),
					success: function(result) {
						$('#resultForm').html('<div class="green">' + result + '</div>');
					},
					error: function(err) {
						// If ajax errors happens
					}
				});
			});
		});
	</script>
</body>

</html>