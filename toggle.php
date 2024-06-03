<?php
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'style.css';
$timestamp = time();
$isDarkMode = $theme === 'style-dark.css';

if ($isDarkMode) {
    $greeting = "Good evening, user!";
} else {
    $greeting = "Good morning, user!";
}

function getFormattedTimestamp($timestamp) {
    return date("Y-m-d H:i:s", $timestamp);
}

$messages = array("new");

?>
   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dark/Light Mode Toggle with PHP</title>
  <link id="theme-stylesheet" rel="stylesheet" type="text/css" href="<?php echo $theme; ?>">
  <script src="script.js" defer></script>
</head>
<body>

  <div class="navbar">
    <a class="active" href="#home">Home</a>
    <a href="Projectpage.html">Projects</a>
    <a href="Inprogress.html">Photos</a>
    <a href="Contactme.html">Contact Info</a>
    <a href="AboutMe.html">About Me</a>
    <button id="toggle-button">Toggle Dark/Light Mode</button>
  </div>

  <div class="center-img">
    <img src="shifaaz-shamoon-Rl9l9mL6Pvs-unsplash.jpg" width="900" height="500" />
  </div>

  <div class="footer">
    <p>Made By Noah Green</p>
    <p>&copy; Copyright <?php echo date('Y'); ?>. All rights reserved.</p>
    <p><?php echo $greeting; ?></p>
    <p>Current Time: <?php echo getFormattedTimestamp($timestamp); ?></p>
    <p>Messages: <?php echo implode(" | ", $messages); ?></p>
  </div>

</body>
</html>
