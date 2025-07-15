<?php
// goto statement in PHP

$number = 1;

goto skip;

echo "This will not be printed.\n";

skip:
echo "This is printed after goto.\n";

// Example: Using goto in a loop
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        goto end;
    }
    echo "Number: $i\n";
}

end:
echo "Loop ended at i = 3 due to goto.\n";
?>
