<?php
session_start();

session_destroy();

print "<script>top.location = 'login.php'</script>"
?>
