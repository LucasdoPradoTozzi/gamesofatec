<?php

$request = $_REQUEST;

$awnser = 'lamentavel jovem!';
$numberOfNextQuestion = 99;

$htmlChange = '<form>
                      <h2>O que o comando "top" exibe?</h2>
                      <input type="radio" id="opcao1" name="opcao" value="1">
                      <label for="opcao1">Uso de recursos dos processos em execução (CPU, memória, tempo de CPU)</label><br>
                      <input type="radio" id="opcao2" name="opcao" value="2">
                      <label for="opcao2">Lista de todos os processos em execução no sistema</label><br>
                      <input type="radio" id="opcao3" name="opcao" value="3">
                      <label for="opcao3">Informações sobre o uso de memória por cada processo</label><br>
                      <input type="radio" id="opcao4" name="opcao" value="4">
                      <label for="opcao4">Opções para ordenar e filtrar os processos listados</label><br>
                      </form>';

if ($request['numberOfTheQuestion'] == 1) {

    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 2;
        $htmlChange = '<form>
                   <h2>O que o comando "cd" faz?</h2>
                   <input type="radio" id="opcao1" name="opcao" value="1">
                   <label for="opcao1">Muda o diretório de trabalho atual</label><br>
                   <input type="radio" id="opcao2" name="opcao" value="2">
                   <label for="opcao2">Navega para o diretório raiz do sistema</label><br>
                   <input type="radio" id="opcao3" name="opcao" value="3">
                   <label for="opcao3">Muda para o diretório pessoal do usuário</label><br>
                   <input type="radio" id="opcao4" name="opcao" value="4">
                   <label for="opcao4">Acesse diretórios especificando seus caminhos completos</label><br>
                   </form>';
    }
} elseif ($request['numberOfTheQuestion'] == 2) {


    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 3;
        $htmlChange = '<form>
                   <h2>O que o comando "ls" faz?</h2>
                   <input type="radio" id="opcao1" name="opcao" value="1">
                   <label for="opcao1">Lista arquivos e diretórios no diretório de trabalho atual</label><br>
                   <input type="radio" id="opcao2" name="opcao" value="2">
                   <label for="opcao2">Exibe detalhes adicionais sobre os arquivos e diretórios listados</label><br>
                   <input type="radio" id="opcao3" name="opcao" value="3">
                   <label for="opcao3">Permite filtrar a listagem por nome, tipo ou data de modificação</label><br>
                   <input type="radio" id="opcao4" name="opcao" value="4">
                   <label for="opcao4">Exibe o conteúdo de arquivos de texto</label><br>
                   </form>';
    }
} elseif ($request['numberOfTheQuestion'] == 3) {

    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 4;
        $htmlChange = '<form>
        <h2>O que o comando "bash" faz?</h2>
        <input type="radio" id="opcao1" name="opcao" value="1">
        <label for="opcao1">Executa comandos shell</label><br>
        <input type="radio" id="opcao2" name="opcao" value="2">
        <label for="opcao2">Escreve e executa scripts shell</label><br>
        <input type="radio" id="opcao3" name="opcao" value="3">
        <label for="opcao3">Fornece um ambiente interativo para digitar comandos</label><br>
        <input type="radio" id="opcao4" name="opcao" value="4">
        <label for="opcao4">Suporta redirecionamento de entrada e saída</label><br>
        </form>';
    }
} elseif ($request['numberOfTheQuestion'] == 4) {


    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 5;
        $htmlChange = '<form>
                   <h2>O que o comando "sudo" faz?</h2>
                   <input type="radio" id="opcao1" name="opcao" value="1">
                   <label for="opcao1">Permite a execução temporária de um comando com privilégios de root</label><br>
                   <input type="radio" id="opcao2" name="opcao" value="2">
                   <label for="opcao2">Instala pacotes de software</label><br>
                   <input type="radio" id="opcao3" name="opcao" value="3">
                   <label for="opcao3">Cria novos usuários</label><br>
                   <input type="radio" id="opcao4" name="opcao" value="4">
                   <label for="opcao4">Edita arquivos de texto</label><br>
                   </form>';
    }
} elseif ($request['numberOfTheQuestion'] == 5) {

    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 6;
        $htmlChange = '<form>
                   <h2>O que o comando "chmod" faz?</h2>
                   <input type="radio" id="opcao1" name="opcao" value="1">
                   <label for="opcao1">Altera permissões de arquivos (leitura, escrita, execução)</label><br>
                   <input type="radio" id="opcao2" name="opcao" value="2">
                   <label for="opcao2">Cria novos diretórios</label><br>
                   <input type="radio" id="opcao3" name="opcao" value="3">
                   <label for="opcao3">Envia sinais para processos em execução</label><br>
                   <input type="radio" id="opcao4" name="opcao" value="4">
                   <label for="opcao4">Exibe informações sobre o uso de recursos do sistema</label><br>
                   </form>';
    }
} elseif ($request['numberOfTheQuestion'] == 6) {

    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 7;
        $htmlChange = '<form>
        <h2>O que o comando "kill" faz?</h2>
        <input type="radio" id="opcao1" name="opcao" value="1">
        <label for="opcao1">Lista arquivos e diretórios no diretório de trabalho atual</label><br>
        <input type="radio" id="opcao2" name="opcao" value="2">
        <label for="opcao2">Muda o diretório de trabalho atual</label><br>
        <input type="radio" id="opcao3" name="opcao" value="3">
        <label for="opcao3">Envia um sinal para um processo, possivelmente encerrando-o</label><br>
        <input type="radio" id="opcao4" name="opcao" value="4">
        <label for="opcao4">Executa scripts shell</label><br>
        </form>';
    }
} elseif ($request['numberOfTheQuestion'] == 7) {

    if ($request['awnser'] == '3') {
        $awnser = 'resposta correta!';
        $numberOfNextQuestion = 0;
        $htmlChange = "<h1>Parabéns! Você concluiu esse desafio, agora afaste-se do notebook pois ele irá explodir em 3...2...1...</h1>";
    }
}

$arrayResponse = [
    'correct' => $awnser,
    'html' =>    $htmlChange,
    'numberOfTheNextQuestion' =>  $numberOfNextQuestion
];

echo json_encode($arrayResponse);
