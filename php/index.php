<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple File Viewer</title>
</head>
<body>

<h2>Files in the Current Directory</h2>

<?php
// Get the current directory
$currentDirectory = __DIR__;

// Get the list of files and directories
$items = scandir($currentDirectory);

// Display a list of files and directories
echo '<ul>';
foreach ($items as $item) {
    // Exclude . and ..
    if ($item != '.' && $item != '..') {
        $itemPath = $currentDirectory . '/' . $item;
        // Check if it's index.php
        if ($item == "index.php"){
            continue;
        }
        // Check if it's a file
        if (is_file($itemPath)) {
            echo '<li><a href="' . htmlspecialchars($item) . '">' . $item . '</a></li>';
        } else {
            echo '<li>' . $item . '</li>';
        }
    }
}
echo '</ul>';
?>

</body>
</html>

