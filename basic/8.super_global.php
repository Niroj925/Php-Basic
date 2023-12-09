<?php

?>


<html>
<head>
    <title>super gloabla</title>
</head>
<body>
    <ul>
        <li>Host:<?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root:<?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>server name:<?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>server port:<?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>current file:<?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>rew url:<?php echo $_SERVER['REQUEST_URL']; ?></li>
        <li>software server:<?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>client address:<?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>REMOTE_ADDR:<?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    </ul>
</body>
</html>
