<h1> Edit Posts :  {{$post->Title}}</h1>

<form action="{{route('post.update' , $post->id)}}" method="Post">

    @csrf
    @method('put')
    
    <input type="text" name="title" value="{{$post->Title}}" > <br> <br>
    <input type="text" name="body" value="{{$post->body}}" > <br> <br>
    <input type="submit" >
</form>