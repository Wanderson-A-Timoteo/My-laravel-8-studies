<h1>Configurações</h1>
<form action="" method="POST">
    @csrf

    Nome: <br>
    <input type="text" name="nome"> <br>

    Idade: <br>
    <input type="text" name="idade"> <br>

    <input type="submit" value="Enviar">
</form>

<a href="/config/info">Configurações INFO view config.blade</a>
