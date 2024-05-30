<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Escape Room</title>
    <link rel="stylesheet" href="css/stylesSecondRoom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div id="game_div">
        <div id="pc_monitor" data-toggle="modal" data-target="#modal_pc_monitor"></div>
        <div id="go_back_door"></div>
        <div id="cabinet"></div>
    </div>
    <div class="modal fade" id="modal_pc_monitor" tabindex="-1" role="dialog" aria-labelledby="modal_notebook_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div id="modal_content" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_pc_monitor_label">CMD.exe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="x">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal_change_div" class="modal-body">
                    <br><br>
                    <br><br>
                </div>
                <input id="cmd_input" style="background-color: black; color: green;">
                <button type="button" id="send_pc_monitor"></button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_images">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="title_modal_images" class="modal-title">Título do Modal</h4>
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
            $folderAccess = 'no';
            $firstHtmlVirusPissed = '<p class="typewriter"> YOU KILLED HIM!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>';
            $secondHtmlVirusPissed = '<p class="typewriter"> YOU KILLED MY FRIEND!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>';
            $thirdHtmlVirusPissed = '<p class="typewriter"> NOW I WILL... NOW I WILL............................</p>';
            $fourthHtmlVirusPissed = '<p class="typewriter">I WILL KILL YOU!! I WILL DELETE YOUR EXISTENCE!!!!!!!!!!!!!!!!</p>';
            $fifthHtmlVirusPissed = '<p class="typewriter"> KILL KILL KILL KILL KILL KILL KILL KILL KILL KILL KILL KILL</p>';
            $sixthHtmlVirusPissed = '<p class="typewriter"> THE END OF YOUR LIFE IS NEAR! WAIT FOR ME.......</p>';

            if (localStorage.getItem("notebookFound") == 'Yes') {
                $("#cabinet").remove();
            }

            $("#cmd_input").keypress(function(event) {
                if (event.keyCode === 13) {
                    $("#send_pc_monitor").click();
                }
            });

            $('#go_back_door').on('click', function() {
                window.location.href = 'firstRoom.php';
            });

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Q' || event.key === 'q') {
                    event.preventDefault();
                    if (localStorage.getItem("notebookFound") == 'Yes') {
                        alert('Não posso usar isso aqui, devo aguardar o momento certo...');
                    }
                }
            });

            $('#cabinet').on('click', function() {
                $("#title_modal_images").html('Você encontrou um notebook! Ele parece estar conectado a rede local, talvez ele seja útil em algum lugar...(para utilizar o notebook, pressione a tecla "Q")');
                $('#img_modal').attr('src', 'imgs/notebookConnected.png');
                $('#modal_images').modal('show');
                $("#cabinet").remove();
                localStorage.setItem("notebookFound", 'Yes');
            });

            $("#send_pc_monitor").on('click', function() {
                let folderAccessGetter = localStorage.getItem("folderAccess");
                if (folderAccessGetter != null) $folderAccess = 'yes';
                $.ajax({
                    type: 'POST',
                    url: '/ajax/ajax_pc_monitor.php',
                    data: {
                        input: $('#cmd_input').val(),
                        numberOfTheQuestion: $('#number_of_the_question').val(),
                        folderAccess: $folderAccess
                    },
                    success: function(data) {
                        data = JSON.parse(data);
                        if (data.correct == 'yes') {
                            $('#modal_change_div').html(data.html);
                            $('#cmd_input').val('');
                            if (data.folderPermission == 1) {
                                localStorage.setItem("folderAccess", 'Yes')
                            }
                            if (data.openLastDoor == 1) {
                                localStorage.setItem("leaveDoorKey", 'Key')
                            }
                        } else if (data.correct == 'virusIsPissedOff') {
                            $('#cmd_input').val('');
                            $('#modal_change_div').html($firstHtmlVirusPissed);
                            setTimeout(function() {
                                $("#modal_content").addClass("virus");
                                $('#modal_change_div').html($secondHtmlVirusPissed);
                                setTimeout(function() {
                                    $('#modal_change_div').html($thirdHtmlVirusPissed);
                                    setTimeout(function() {
                                        $('#modal_change_div').html($fourthHtmlVirusPissed);
                                        setTimeout(function() {
                                            $('#modal_change_div').html($fifthHtmlVirusPissed);
                                            setTimeout(function() {
                                                $('#modal_change_div').html($sixthHtmlVirusPissed);
                                                setTimeout(function() {
                                                    $("#modal_content").removeClass("virus");
                                                    $('#modal_change_div').html('<br><br><br><br><br>');
                                                }, 10000);
                                            }, 3000);
                                        }, 4000);
                                    }, 3000);
                                }, 3000);
                            }, 3000);
                        } else {
                            $('#modal_change_div').html(data.html);
                            $('#cmd_input').val('');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>