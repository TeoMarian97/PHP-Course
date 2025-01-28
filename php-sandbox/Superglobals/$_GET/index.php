<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

var_dump($_GET);

echo $_GET['name']; //use isSet if unsure if it's used, prevents errors if your query is empty

echo htmlspecialchars($_GET['name']); //this is such that it doesnt execute the script
