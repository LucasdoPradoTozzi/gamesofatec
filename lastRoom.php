<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Escape Room</title>
    <link rel="stylesheet" href="/css/stylesLastRoom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="bytes_room">
    <div id="game-div">
        <div id="final_boss"><img id="final_boss_img" src="imgs/finalBoss3.png" class="boss_img"></div>
    </div>

    <div class="modal fade" id="modal_pocket_notebook">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="title_pocket_notebook" class="modal-title">CMD.EXE</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="modal_change_div" class="modal-body">
                        <br><br>
                        <br><br>
                    </div>
                    <input id="cmd_input" style="background-color: black; color: green;">
                    <button hidden type="button" id="send_pocket_notebook"></button>
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
                    if (localStorage.getItem("notebookFound") == 'Yes') {
                        $('#modal_pocket_notebook').modal('show');
                    }
                }
            });

            $("#cmd_input").keypress(function(event) {
                if (event.keyCode === 13) {
                    $("#send_pocket_notebook").click();
                }
            });

            $("#send_pocket_notebook").on('click', function() {
                if ($('#cmd_input').val() == 'kill nemesis') {
                    $('#modal_pocket_notebook').hide();
                    $('.modal-backdrop').remove();
                    setTimeout(function() {
                        $('#final_boss_img').attr('src', 'imgs/powerRangersExplosion.gif');
                        setTimeout(function() {
                            $(document.body).html('')
                            $(document.body).removeClass('bytes_room').addClass('boss-defeated');
                            setTimeout(function() {
                                $(document.body).removeClass('boss-defeated').addClass('waking-up');
                                $(document.body).html('<h3 class="typewriter" style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Parabéns! Você concluiu o jogo e despertou do seu pesadelo tecnológico!</h3>')
                            }, 4000);
                        }, 3000);
                    }, 1000);
                } else {
                    let errorHtml = "<pre>1234@user:" + $('#cmd_input').val() + "\n" + "command not found";
                    $('#modal_change_div').html(errorHtml)
                    $('#cmd_input').val('')
                }
            });

        });
    </script>
</body>

</html>