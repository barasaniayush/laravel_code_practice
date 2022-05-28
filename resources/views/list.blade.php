<h1>Member List</h1>

<table border="1px solid black">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Description</td>
        <td>Action</td>
    </tr>
    @foreach($members as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->description}}</td>
        <td><a href="{{"delete/".$item->id}}">Delete</a>
        <a href="{{"edit/".$item->id}}">Edit</a></td>
    </tr>
    @endforeach
</table>

