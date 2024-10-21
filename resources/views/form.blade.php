<form method="POST" action="/store_form">
    @csrf

    <label for="first_name">Имя: </label>
    <input type="text" name="first_name">
    <br>

    <label for="last_name">Фамилия: </label>
    <input type="text" name="last_name">
    <br>

    <label for="last_name">Email: </label>
    <input type="text" name="email">
    <br>

    <input type="submit" value="Отправить">

</form>
