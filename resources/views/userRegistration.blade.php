<form method="POST">
    {{ csrf_field() }}

    <input type="text" name="name">
    <input type="submit">
</form>