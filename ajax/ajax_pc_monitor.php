<?php

$request = $_REQUEST;

$permissionToTheFolder = 0;
$openLastDoor = 0;



if ($request['input'] == 'top') {
    $awnser = 'yes';
    $htmlChange = ' <pre style="color: green;">
        1234@user: top
        
        PID     USUARIO   PR  NI    VIRT     RES    SHR   S %CPU %MEM  TEMPO+  COMANDO   
        =================================================================================
        43950   user      20   0   1131,7g 234300 126172  S 19,7  2,9  1:51.11 chrome
         3131   user      20   0     32,8g 119548  74372  S  4,6  1,5 42:01.72 chrome
        43145   user      20   0   1133,3g 267444 108128  S  2,0  3,4  0:22.05 code
         2029   user      20   0   1585948  59816  27224  S  1,6  0,7 56:15.08 Xorg
         2219   user      20   0   5159992 168004  46520  S  1,3  2,1 42:42.55 gnome-shell
        43010   user      20   0    899324  56344  40648  S  1,3  0,7  0:07.55 gnome-terminal
        44231   user      20   0     13396   4352   3456  R  1,0  0,1  0:00.12 top
          688   systemd+  20   0     14836   4736   4480  S  0,3  0,1  2:26.42 systemd-oomd
          739   root      20   0    484232  13740  10796  S  0,3  0,2  0:21.24 NetworkManager
         2941   user      20   0     32,7g 286624 145244  S  0,3  3,6 27:08.88 chrome
        43085   user      20   0   1123,4g 161476 120064  S  0,3  2,0  0:07.49 code
        43186   root      20   0   1123,2g  87260  68480  S 70,9 50,1  0:03.42 nemesis-helper
        43371   user      20   0    479900  42256  12032  S  0,3  0,5  0:03.17 docker-compose
            1   root      20   0    167012   8900   5956  S  0,0  0,1  0:08.08 systemd
        </pre>';
} elseif ($request['input'] == 'ls') {
    $awnser = 'yes';
    $htmlChange = " <pre>
        1234@user: ls
        box-access
        </pre>";
} elseif ($request['input'] == 'cd box-access') {
    $awnser = 'yes';
    if ($request['folderAccess'] = 'yes') {
        $htmlChange = " <pre>
            1234@user: cd box-access
            open-door.exe
            </pre>";
    } else {
        $htmlChange = " <pre>
            1234@user: cd box-access
            bash: cd box-access: Permission denied
            </pre>";
    }
} elseif ($request['input'] == 'bash open-door.sh') {
    $awnser = 'yes';
    $htmlChange = " <pre>
        1234@user: 'bash open-door.sh'
        the door is now open, but are you really prepared to go in?
        </pre>";
    $openLastDoor = 1;
} elseif ($request['input'] == 'sudo chmod 755 box-access') {
    $awnser = 'yes';
    $htmlChange = " <pre>
        1234@user: sudo chmod 755 box-access
        </pre>";
} elseif ($request['input'] == 'kill nemesis-helper') {
    $awnser = 'virusIsPissedOff';
    $htmlChange = "";
} else {
    $awnser = 'no';
    $htmlChange = "<pre>
        1234@user: " . $request['input'] . "
        command not found
        </pre>";
}

$arrayResponse = [
    'correct' => $awnser,
    'html' => $htmlChange,
    'folderPermission' => $permissionToTheFolder,
    'openLastDoor' => $openLastDoor
];


echo json_encode($arrayResponse);
