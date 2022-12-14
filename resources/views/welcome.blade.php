<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
      .w-custom{
        width:20px;
      }
      .w-10{
        width: 7em;
      }
      .px-10{
        padding-left: 10em;
      }

    </style>
</head>
<body>
  <div class="w-100 py-5 d-flex  flex-column px-10"> 
    <a href="task/create" class="btn btn-outline-success  w-10">New Task</a>

    <table class="table table-hover w-75 mt-3">
  <thead>
    <tr>
      <th scope="col">Todo List</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($todos as $task)
    <tr>
      <td>{{ $task->task }}</td>
      <td class="d-flex justify-content-around"><a href="task/{{ $task->id }}" class="btn btn-info">Show</a> | <a href="task/{{ $task->id }}/edit" class="btn btn-success">Edit</a> | 

          <!-- for Delete  -->
          <form action="task/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" name="delete" value="Delete">
          </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="mx-auto w-25">{{ $todos->links()}}</div>

</body>
</html>