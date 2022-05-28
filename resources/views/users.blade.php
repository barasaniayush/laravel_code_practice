<h1>User Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="name" id="" placeholder="Enter user name"><br><br>
    <input type="password" name="password" id="" placeholder="Enter password"><br><br>
    <button>Login Here</button>
</form>

