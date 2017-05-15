<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Dispatch Assistant</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <header><h1>Dispatch Assistant</h1></header>

    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>Error message: <?php echo $error_message; ?></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Seth.</p>
    </footer>
</body>
</html>