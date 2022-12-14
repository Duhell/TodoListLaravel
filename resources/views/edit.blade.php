<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Task</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	  <style>
      .w-10{
        width: 7em;
      }
      .px-10{
        padding-left: 10em;
      }

    </style>
</head>
<body>

	<form action="/task/{{$todos->id}}" method="post" class="w-75 mx-auto my-5">
		@csrf
		@method("PUT")
		<div class="mb-3">
		  <label class="form-label fs-2">Update Todo</label>
		  <input type="text" name="todo" class="form-control w-75" value="{{$todos->task}}">
		</div>
		<input type="submit" value="Update" class="btn btn-success">
			<a href="/" class="btn btn-danger">Back</a>
	</form>

	

</body>
</html>