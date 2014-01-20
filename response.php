<?php

if (isset($_GET['charset']))
    header('Content-Type: text/html;charset=' . $_GET['charset']);
else
    echo 'No charset given!';

?>