<h1>All Posts</h1>
<html>
<title>All Posts  </title>
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
 crossorigin="anonymous">
</head>
<body>

    <a class="btn btn-danger" href="{{route('post.delete.all')}}" role="button" style="margin: 10px ">Delete All</a>
    <a class="btn btn-danger" href="{{route('post.delete.all.truncate')}}" role="button" style="margin: 10px ">Delete All TrunCate</a>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">body</th>
            <th scope="col">Pro</th>
          </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
          <tr>
           
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->Title}}</td>
            <td>{{$post->body}}</td>
             <td>
                <a class="btn btn-primary" href="{{route('post.edit' , $post->id)}}" role="button">Edit</a>
                <a class="btn btn-danger" href="{{route('post.delete' , $post->id)}}" role="button">Delete</a>
             </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
    
    
</body>


</html>








