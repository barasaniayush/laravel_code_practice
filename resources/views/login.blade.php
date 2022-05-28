<h1>User Login</h1>

<form action="profile" method="POST">
    @csrf
    <input type="text" name="name" id="" placeholder="Enter user name"><br><br>
    <input type="password" name="password" id="" placeholder="Enter user password"><br><br>
    <button>Login</button>
</form>