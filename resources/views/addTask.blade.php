<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Task</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

	<form action="/task" method="post" class="w-75 mx-auto my-5">
		@csrf
		<div class="mb-3">
		  <label class="form-label fs-2">Todo</label>
		  <input type="text" name="todo" class="form-control w-75" placeholder="example : Watch Movies">
		</div>
		<input type="submit" value="Create" class="btn btn-success">
	</form>
	
	
</body>
</html>