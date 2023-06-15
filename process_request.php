<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $instagramUsername = $_POST['instagram_username'];
  $message = $_POST['message'];

  // Create the request string
  $requestString = "Instagram Username: $instagramUsername\n";
  $requestString .= "Message: $message\n";

  // Write the request to a text file
  $file = 'requests.txt';
  $handle = fopen($file, 'a');
  fwrite($handle, $requestString);
  fclose($handle);

  // Redirect the user to a thank you page
  header('Location: thank_you.php');
  exit();
}
?>
