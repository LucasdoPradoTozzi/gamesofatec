<?php

$request = $_REQUEST;

if ($request['numberOfTheQuestion'] == 1) {

    if ($request['input'] == 'tasklist') {
        $awnser = 'yes';
        $htmlChange = " <pre>
        <p>1234@user: tasklist</p><br>
        
        <p>Image Name                     PID    Session Name        Memory Usage</p>
        <p>============================ ====== =================== ===============</p>
        <p>chrome.exe                    1234     Console             234,784 K</p>
        <p>firefox.exe                   5678     Console             187,231 K</p>
        <p>explorer.exe                  9012     Console             123,456 K</p>
        <p>notepad.exe                   3456     Console             21,890 K</p>
        <p>nemesisHelper.exe             1000     Console             3,072,000 K</p>
        </pre>";
    } else {
        $awnser = 'no';
        $htmlChange = " <p>1234@user: " . $request['input'] . "</p>
        <p>command not found</p>";
    }

    $arrayResponse = [
        'correct' => $awnser,
        'html' => $htmlChange,
        'numberOfTheNextQuestion' => 2
    ];
} elseif ($request['numberOfTheQuestion'] == 2) {


    $arrayResponse = [
        'correct' => $awnser,
        'html' =>    $htmlChange,
        'numberOfTheNextQuestion' =>  0
    ];
}

echo json_encode($arrayResponse);
