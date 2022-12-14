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

	<div class="mx-auto w-75 d-flex flex-column my-5 p-5">
		<span class="fs-4 border-bottom border-dark">Do this now!</span>
		<span class="fs-5 my-3">Task: {{ $todos->task }}</span>
		<a href="/" class="btn btn-danger w-10">Back</a>
	</div>

</body>
</html>