<?php
$output = null;

/*

Y - year
m - month
d - day
D - day of the week, short name
l - full day of the week name
h - hour
i - minute
s - second
a - AM/PM

*/

$output = date('Y');

$output = date('Y', 936345600); //the timestamp is an integer Unix timestamp that defaults to current local time if not given

$output = date('Y', strtotime('1999-09-01'));

$output = date('m');

$output = date('D');
$output = date('l');

$output = date('Y-m-d');
$output = date('d-m-Y');

$output = date('h');
$output = date('h:i:s');

$output = date('a');
$output = date('Y-m-d h:i:s a');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>