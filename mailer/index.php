<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Contact</h1>

    <form method="post" action="sender.php" onsubmit="disableSubmitButton()">
        <label for="name">Name</label> <span>eRROR</span>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>

        <label for="message">Message</label>
        <textarea name="message" id="message" required style="resize: none;"></textarea>
        <br>
        <button type="submit" id="submitButton">Send</button>
    </form>
    
    <script src="security/disabler.js">

</script>
</body>
</html>
