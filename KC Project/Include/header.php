<!-- File: /Include/header.php -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kitutu Chache Constituency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ✅ RELATIVE PATH FROM /Public -->
    <link rel="stylesheet" href="../Styles/css/main.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
