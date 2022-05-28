<h1>Add Members</h1>

<form action="add" method="POST">
    @csrf
    <input type="text" name="name" id="" placeholder="Enter name"><br><br>
    <input type="email" name="email" id="" placeholder="Enter email"><br><br>
    <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>
    <button type="submit">Add Member</button>
</form>