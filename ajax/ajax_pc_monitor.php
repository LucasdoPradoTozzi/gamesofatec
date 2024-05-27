<?php

$request = $_REQUEST;

$permissionToTheFolder = 0;
$openLastDoor = 0;

if ($request['numberOfTheQuestion'] == 1) {

    if ($request['input'] == 'tasklist') {
        $awnser = 'yes';
        $htmlChange = " <pre>
        <p>1234@user: tasklist</p><br>
        
        <p>Image Name                    PID     Session Name        Memory Usage</p>
        <p>============================ ====== =================== ===============</p>
        <p>chrome.exe                    1234     Console             234,784 K</p>
        <p>firefox.exe                   5678     Console             187,231 K</p>
        <p>explorer.exe                  9012     Console             123,456 K</p>
        <p>notepad.exe                   3456     Console             21,890 K</p>
        <p>nemesisHelper.exe             1000     Console             3,072,000 K</p>
        </pre>";
    } elseif ($request['input'] == 'ls') {
        $awnser = 'yes';
        $htmlChange = " <pre>
        <p>1234@user: ls</p><br>

        <p>box-access</p>
        </pre>";
    } elseif ($request['input'] == 'cd box-access') {
        $awnser = 'yes';
        if ($request['folderAccess'] = 'yes') {
            $htmlChange = " <pre>
            <p>1234@user: cd box-access</p><br>
    
            <p>open-door.exe</p>
            </pre>";
        } else {
            $htmlChange = " <pre>
            <p>1234@user: cd box-access</p><br>
    
            <p>bash: cd box-access: Permission denied</p>
            </pre>";
        }
    } elseif ($request['input'] == './open-door.exe') {
        $awnser = 'yes';
        $htmlChange = " <pre>
        <p>1234@user: './open-door.exe'</p><br>
        <p>the door is now open, but are you really prepared to go in?</p>
        </pre>";
        $openLastDoor = 1;
    } elseif ($request['input'] == 'sudo chmod 755 box-access') {
        $awnser = 'yes';
        $htmlChange = " <pre>
        <p>1234@user: sudo chmod 755 box-access</p><br>
        </pre>";
    } elseif ($request['input'] == 'taskkill nemesisHelper.exe') {
        $awnser = 'virusIsPissedOff';
        $htmlChange = "";
    } else {
        $awnser = 'no';
        $htmlChange = " <p>1234@user: " . $request['input'] . "</p>
        <p>command not found</p>";
    }

    $arrayResponse = [
        'correct' => $awnser,
        'html' => $htmlChange,
        'numberOfTheNextQuestion' => 2,
        'folderPermission' => $permissionToTheFolder,
        'openLastDoor' => $openLastDoor
    ];
}

echo json_encode($arrayResponse);
