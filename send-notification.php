<?php

// Get user ID and notification data from POST request
$user_id = $_POST['user_id'];
$notification = $_POST['notification'];

// Send notification to all users with the user_id cookie
// This is where you would add your own notification code
$notification_data = [
  'title' => $notification['title'],
  'body' => $notification['body'],
  'icon' => $notification['icon']
];
setcookie('notification_data', json_encode($notification_data), time() + (86400 * 30), "/");

?>
