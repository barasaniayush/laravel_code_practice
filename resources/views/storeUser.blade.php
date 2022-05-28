<h1>Add New Member</h1>

@if(session('name'))
<h3>Data saved for {{session('user')}}</h3>
@endif
<form action="storecontroller" method="POST">
    @csrf
    <input type="text" name="name" id="" placeholder="Enter User Name"><br><br>
    <input type="email" name="email" id="" placeholder="Enter Email"><br><br>
    <input type="password" name="password" id="" placeholder="Enter password"><br><br>
    <button type="submit">Add User</button>
</form>