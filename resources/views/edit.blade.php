<h1>Edit Member</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" name="name" id="" value="{{$data['name']}}" placeholder="Enter name"><br><br>
    <input type="email" name="email" id="" value="{{$data['email']}}"><br><br>
    <textarea name="description" id="" cols="30" rows="10" value="{{$data['description']}}"></textarea><br><br>
    <button type="submit">Update</button>
</form>