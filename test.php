<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Base</title>
	<script src="./scripts/network.js"></script>
<style>
html{
	background-color: powderblue;
}
body{
	display: flex;
	flex-direction: column;
	justify-content: center;
	place-items: center;
}
button{
	margin: 5px;
	background-color: tan;
	font-size: 2em;
	font-weight: bolder;
	border-radius: 5px;
	min-width: 300px;
	min-height: 50px;
}
</style>
</head>
<body>
	<button id="" onclick="result_alert(send_get_all)">Get all</button>
	<button id="" onclick="result_alert(send_get_one)">Get one</button>
	<button id="" onclick="result_alert(send_post)">Post</button>
	<button id="" onclick="result_alert(send_update)">Update </button>
	<button id="" onclick="result_alert(send_delete)">Delete</button>
</body>
</html>
