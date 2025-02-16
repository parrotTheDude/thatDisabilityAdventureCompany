<?php
// Check if email is passed via URL
$email = isset($_GET['email']) ? filter_var($_GET['email'], FILTER_SANITIZE_EMAIL) : '';
?>

<!-- This page is responsibile for handling clients who come from the link in the newsletter. It takes their email if it has it and adds it to the form box. Users can then edit it or add their own email in to subscribe to the newsletter. This is just form handling. The user is then sent to admin/process-subscription.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Subscription | TDAC Australia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 3rem 0rem;
        }
        form {
            display: inline-block;
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        input {
            padding: 8px;
            width: 95%;
            font-size: 1rem;
            margin-bottom: 10px;
        }
        label {
            text-align: left !important;
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        button {
            background-color: #327892;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        .logo {
            width: 12rem;
            height: auto;
        }
    </style>
</head>
<body>
    <img class="logo" alt="TDAC Logo" src="icons/logo.webp">
    <h2>Newsletter Subscription</h2>
    <p>Enter your email below to confirm your subscription.</p>
    
    <form action="admin/process-subscription" method="POST">
        <label>Email Address:</label>
        <input type="email" name="email" required placeholder="Enter your email">
        <button type="submit">Subscribe</button>
    </form>
</body>
</html>