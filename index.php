<html>
	<head>
		<style>
			.page {
				background-color: #00333f;
				background-image: url('https://www.freeclimb.com/wp-content/uploads/2021/05/mountain-e1641848740407.jpg');
				background-repeat: no-repeat;
    			background-size: cover;
				/* color: rgba(255, 255, 255, 0.8); */
				font-family: Arial, Helvetica, sans-serif;
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}
			.container {
				background-color: rgba(255, 255, 255, 1);
				width: 500px;
				padding: 24px;
				border-radius: 8px;
				box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
			}
			a {
				color: #004e63;
			}
			a:hover {
				color: #26697a;
			}
			a:visited {
				color: #00333f;
			}
			td {
  				border: 1px solid;
				padding: 4px;
			}
			table {
				border-collapse: collapse;
			}
			pre {
				background-color:  #00333f;
				color: rgba(255, 255, 255, 0.8); 
				padding: 8px;
				border-radius: 4px;
			}
		</style>
	</head>
	<body class="page">
		<div class="container">
			<h2>PHP Voice Quickstart</h2>
			<table>
				<tr>
					<td>Application URL</td>
					<td><a href="http://localhost:8080">http:127.0.0.1:8080</a></td>
				</tr>
				<tr>
					<td>SMS URL</td>
					<td><a href="http://localhost:8080/incoming-sms.php" target="_blank">http://127.0.0.1:8080/incoming-sms.php</a></td>
				</tr>
			</table>
			<h3>Welcome to FreeClimb!</h3>
			<p>Your web server is listening at <a href="http://localhost:8080">http://127.0.0.1:8080</a></p>
			<p>View an example PerCL JSON response to FreeClimb at <a href="http://localhost:8080/incoming-sms.php" target="_blank">http://127.0.0.1:8080/incoming-sms.php</a></p>
			<p>Your next step is to use ngrok to proxy HTTP traffic to this local web server, and then link the ngrok proxy url to your FreeClimb application </p>
			<ol>
				<li>Using ngrok, configure the dynamic url to proxy to http://127.0.0.1:8080 using command <pre><code>ngrok http 8080</code></pre></li>
				<li>Using the FreeClimb Dashboard or API, set your FreeClimb Application Voice Url to the dynamic endpoint NGROK generated <pre><code>e.g. https://{ngrok-generated-url}/incoming-sms.php</code></pre></li>
			</ol>
		</div>
	</body>
</html>