<h1>This is my form</h1>
<form action="cont" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter user Name"><br/><br/>
    <input type="password" name="password" placeholder="Enter user password"><br/><br/>
    <input type="text" name="email" placeholder="Enter user Name"><br/><br/>
    <button>Add a member</button>
</form>