<h1> Crate New Posts </h1>

<form action="{{route('post.insert')}}" method="Post">

    @csrf
    
    <input type="text" name="title" placeholder="Enter Title"> <br> <br>
    <input type="text" name="body" placeholder="Enter body"> <br> <br>
    <input type="submit" >
</form>