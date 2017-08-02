<?php
header('Expires: ' . gmdate('D, d M Y H:i:s', time()+5) . ' GMT');
echo date('H:i:s');
?>
<hr>
<a href="browser_cache.php">SELF</a>