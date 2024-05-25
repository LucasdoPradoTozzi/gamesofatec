<?php

$request = $_REQUEST;

$htmlFirstQuestion = '<form>
                    <h2>Quem é o melhor dev da letmein:</h2>
                    <input type="radio" id="opcao1" name="opcao" value="1">
                    <label for="opcao1">Rafa</label><br>
                    <input type="radio" id="opcao2" name="opcao" value="2">
                    <label for="opcao2">Edu</label><br>
                    <input type="radio" id="opcao3" name="opcao" value="3">
                    <label for="opcao3">Leandro</label><br>
                    <input type="radio" id="opcao4" name="opcao" value="4">
                    <label for="opcao4">Mauricio</label><br>
                    </form>';

if ($request['numberOfTheQuestion'] == 1) {

    $htmlChange = '<form>
                <h2>Quem é o melhor suporte da letmein:</h2>
                <input type="radio" id="opcao1" name="opcao" value="1">
                <label for="opcao1">Brenin</label><br>
                <input type="radio" id="opcao2" name="opcao" value="2">
                <label for="opcao2">Luiz</label><br>
                <input type="radio" id="opcao3" name="opcao" value="3">
                <label for="opcao3">Alexandre</label><br>
                <input type="radio" id="opcao4" name="opcao" value="4">
                <label for="opcao4">Mauricio</label><br>
                </form>';

    if ($request['awnser'] == '4') {
        $awnser = 'resposta correta!';
    } else {
        $awnser = 'lamentavel jovem!';
        $htmlChange = $htmlFirstQuestion;
    }


    $arrayResponse = [
        'correct' => $awnser,
        'html' => $htmlChange,
        'numberOfTheNextQuestion' => 2
    ];
} elseif ($request['numberOfTheQuestion'] == 2) {
    $htmlChange = '<form>
                <h2>Abacaxi não faz xixi na boca do...</h2>
                <input type="radio" id="opcao1" name="opcao" value="1">
                <label for="opcao1">Saci</label><br>
                <input type="radio" id="opcao2" name="opcao" value="2">
                <label for="opcao2">Curupira</label><br>
                <input type="radio" id="opcao3" name="opcao" value="3">
                <label for="opcao3">Mula Sem Cabeça</label><br>
                <input type="radio" id="opcao4" name="opcao" value="4">
                <label for="opcao4">Lobisomem</label><br>
                </form>';

    if ($request['awnser'] == '1') {
        $awnser = 'resposta correta!';
    } else {
        $awnser = 'lamentavel jovem!';
        $htmlChange = $htmlFirstQuestion;
    }


    $arrayResponse = [
        'correct' => $awnser,
        'html' =>    $htmlChange,
        'numberOfTheNextQuestion' =>  3
    ];
}
echo json_encode($arrayResponse);
