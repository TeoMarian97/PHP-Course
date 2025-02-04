<?php

/**
 * Get the base path
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * @param string $name
 * @return void
 */
function loadView($name)
{
    $viewPath = basePath("Views/{$name}.view.php");
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$viewPath} not found";
    }
}

/**
 * Load partials
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    $partialPath = basePath("Views/Partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "View '{$partialPath} not found";
    }
}

/**
 * Inspect a value
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value and die
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
