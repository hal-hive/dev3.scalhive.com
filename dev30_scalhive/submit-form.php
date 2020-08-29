<?php
$url = "https://docs.google.com/forms/d/e/1FAIpQLSfe81PlJUN9TADLxnlg4XdRUa5Dv3bByhgLAu_6za66rp8hhQ/formResponse";
$data = array(
    'entry.1346394884' => $_POST['username'],
    'entry.1415409259' => $_POST['useremail'],
    'entry.1570028755' => $_POST['userphone'],
    'entry.1795969303' => $_POST['usermessage']
);

$opts = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($opts);

$file = file_get_contents($url, false, $context);
?>
