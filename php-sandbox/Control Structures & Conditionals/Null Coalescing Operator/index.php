<?php
$favoriteColor = 'red';
$secondFavColor = 'green';
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

$color = $favoriteColor ?? 'blue';

$color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavColor) ? $secondFavColor : 'blue');
$color = $favoriteColor ?? $secondFavColor ?? 'blue';
echo $color;
