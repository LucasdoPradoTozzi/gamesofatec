<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Escape Room</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div id="game-div">
    <div data-toggle="modal" data-target="#modal_notebook" class="notebook-img"><img class="tiny_imgs" src="imgs/oldNotebook.png"></div>
    <div class="leave-door">
      <div id="locked_door_warning" class="alert alert-danger alert-dismissible fade show">A porta está trancada, talvez eu devesse procurar a chave...</div>
    </div>
    <div class="paper-img"><img class="tiny_imgs" src="imgs/paperOnTheTable.png"></div>

    <div class="second-room-door"></div>
  </div>




  <div class="modal fade" id="modal_notebook" tabindex="-1" role="dialog" aria-labelledby="modal_notebook_label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <input id="number_of_the_question" hidden value="1">
          <h5 class="modal-title" id="modal_notebook_label">Responda se for capaz...</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="x">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="modal_change_div" class="modal-body">
          <form>
            <h2>Quem é o melhor dev da letmein:</h2>
            <input type="radio" id="opcao1" name="opcao" value="1">
            <label for="opcao1">Rafa</label><br>
            <input type="radio" id="opcao2" name="opcao" value="2">
            <label for="opcao2">Edu</label><br>
            <input type="radio" id="opcao3" name="opcao" value="3">
            <label for="opcao3">Leandro</label><br>
            <input type="radio" id="opcao4" name="opcao" value="4">
            <label for="opcao4">Mauricio</label><br>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" id="send_notebook_question" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      localStorage.setItem("leaveDoorKey", 'noKey')
      const leaveDoorKey = localStorage.getItem("leaveDoorKey");


      $('#locked_door_warning').hide();

      $('.leave-door').on('click', function() {
        console.log(leaveDoorKey)
        if (leaveDoorKey == 'noKey') {
          $('#locked_door_warning').show();

          setTimeout(function() {
            $('#locked_door_warning').hide();
          }, 3000);
        }

      });

      $('#send_notebook_question').on('click', function() {
        $.ajax({
          type: 'POST',
          url: '/ajax/ajax_notebook_quiz.php',
          data: {
            awnser: $('input[name="opcao"]:checked').val(),
            numberOfTheQuestion: $('#number_of_the_question').val()
          },
          success: function(data) {

            data = JSON.parse(data);
            if (data.correct == 'resposta correta!') {
              $('#modal_notebook_label').html('Muito bem, próxima pergunta');
              $('#modal_change_div').html(data.html);
              $('#number_of_the_question').val(data.numberOfTheNextQuestion);
            } else {
              $('#modal_notebook_label').html('Lamentavel jovem, tente novamente');
              $('#modal_change_div').html(data.html);
              $('#number_of_the_question').val(1);
            }
          }
        });
      })




    });
  </script>
</body>

</html>