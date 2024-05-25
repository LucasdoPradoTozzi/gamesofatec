<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Escape Room</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .modal-content {
      background-color: black;
      color: green;
      width: 100%;
      height: 100% ;
    }
  </style>
</head>
<body>
<div id="game-div">
  <div data-toggle="modal" data-target="#modal_notebook" class="notebook-img"><img class="tiny_imgs" src="imgs/oldNotebook.png"></div>
  <div class="leave-door"><div id="locked_door_warning" class="alert alert-danger alert-dismissible fade show" >A porta está trancada, talvez eu devesse procurar a chave...</div></div>
  <div class="paper-img"><img class="tiny_imgs" src="imgs/paperOnTheTable.png"></div>
</div>
<div class="modal fade" id="modal_notebook" tabindex="-1" role="dialog" aria-labelledby="modal_notebook_label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_notebook_label">Responda se for capaz...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="x">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Conteúdo do modal vai aqui...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('#locked_door_warning').hide();

    $('.leave-door').on('click', function() {
        $('#locked_door_warning').show();

        setTimeout(function() {
          $('#locked_door_warning').hide();
      }, 3000);
    });
  });
</script>
</body>
</html>
