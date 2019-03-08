<?php
  require('./config.php');

  session_start();
  if (!isset($_SESSION["user"])) {
    header('location: /index.php');
    die();
  } else {
    $user = $_SESSION["user"];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Editor</title>
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
<body>
  <h1>Welcome <?php echo $user["fullname"]; ?> <a class="logout" href="/logout.php">Logout</a></h1>
  <p>TinyMCE editor instance setup with Tiny Drive integated into the link, image and media dialogs and with a separate direct insertfile button.</p>
  <textarea></textarea>
  <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=<?php echo $config["apiKey"]; ?>"></script>
  <script src="assets/js/init.js"></script>
</body>
</html>
