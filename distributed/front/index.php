<body style="width: 800px">



<?php

$files = scandir('.');

echo "<div style='margin: 75px'>";
echo "<ul>";
foreach ($files as $file) {
    if ($file == '.' || $file == '..' || $file == 'index.php') {
        continue;
    }

    echo "<li><a href='/distributed/front/$file'>$file</a></li>";
}
echo "</ul>";
echo "</div>";