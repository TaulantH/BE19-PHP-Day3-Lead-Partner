<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "Full-Stack";
    } elseif ($i % 3 === 0) {
        echo "Back-End";
    } elseif ($i % 5 === 0) {
        echo "Front-End";
    } else {
        echo $i;
    }

    echo "<br>";
}
?>
