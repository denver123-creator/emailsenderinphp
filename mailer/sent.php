<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Form - Success</title>
</head>
<body>

<!-- Your success message goes here -->
<div>
    <?php
        if (isset($_GET['error']) && $_GET['error'] == true) {
            echo '<h2>Message not sent!</h2>';
        } else {
            echo '<h2>Message has been sent successfully!</h2>';
        }
    ?>
    <a href="index.php"><p>Go back</p></a>
</div>

</body>
</html>
