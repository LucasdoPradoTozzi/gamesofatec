<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Escape Room</title>
    <link rel="stylesheet" href="/css/stylesLastRoom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div id="game-div">
        <div id="final_boss"><img src="imgs/finalBoss3.png" class="boss_img"></div>
        <div id="backpack"><img src="imgs/iconNotebook.jpg" class="tiny_imgs"></div>
    </div>

    <div class="modal fade" id="modal_connected_notebook">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="title_connected_notebook" class="modal-title">Título do Modal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img id="img_modal" src="imgs/cadeadoPado.jpg" class="img-fluid" alt="Imagem do Modal">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Q' || event.key === 'q') {
                    event.preventDefault();
                    alert('The "Q" key was pressed!');
                }
            });

        });
    </script>
</body>

</html>