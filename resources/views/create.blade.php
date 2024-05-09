<form action="save" method="post">
    @csrf
    <label for="name">type the task:</label>
    <input type="text" id="name" name="name">
    <br> 
    <label for="description">type what you need to do</label>
    <input type="text" id="description" name="description">
    <br>
    <button type="submit">save</button>
</form>