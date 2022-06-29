<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style/MyStyle.css">
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body id="MyContactPageBody">
<?php include "style/navbar.html"; ?>
<div class="ContactForm border-dark ">
    <h3>Contact</h3>
    <form action="index.php" method="post">
        <label for="ContactNameInput">Name</label>
        <input type="text" required placeholder="Name" id="ContactNameInput" name="name">
        <label for="ContactEmailInput">Email</label>
        <input type="email" required id="ContactEmailInput" name="email" placeholder="Email">
        <label for="ContactMessageInput">Feedback</label>
        <textarea style="resize: none;" id="ContactMessageInput" required name="feedback" placeholder="Feedback"></textarea>
        <input type="submit" class="btn" id="ContactSubmit" value="Log in">
    </form>

</div>
</form>

</body>
</html>