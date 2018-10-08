<!DOCTYPE html>
<html>
	<head><title>Experiment 2d</title></head>
	<body>
		<h1>HTML Forms explained</h1>
		<form method="GET">
        Your name: <input type="text" name="name"><br>
        <input type="submit" value="Send"></input>
		</form>
		<p>
            <?php
                if ( isset( $_GET['name'] ) ) 
                {
                    echo "Hello ".$_GET['name'];
                } 
            ?>
        </p>
	</body>
</html>