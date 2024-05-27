<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Escape Room</title>
    <link rel="stylesheet" href="/css/stylesIndex.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div id="start_game">
        <form action="#">
            <h1 class="typewriter">Bem vindo ao Jogo!</h1>
            <button type="button" class="btn" id="button_continue">Continuar</button>
            <br>
            <button type="button" class="btn" id="button_new_game">Novo Jogo</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#button_new_game').on('click', function() {
                localStorage.setItem("leaveDoorKey", 'noKey')
                localStorage.setItem("rightDoorKey", 'noKey')
                localStorage.setItem("folderAccess", 'No')
                window.location.href = 'firstRoom.php';
            });
            $('#button_continue').on('click', function() {
                window.location.href = 'firstRoom.php';
            });

        });
    </script>
</body>

</html>