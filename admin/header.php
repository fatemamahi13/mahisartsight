<?php 
include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2e2e2e;
            color: white;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #111;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #bbb;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
            color: white;
        }

        .header {
            background-color: #333;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            color: white;
            text-align: center;
        }

        .content {
            margin-left: 250px;
            padding-top: 70px;
            padding: 20px;
        }

        .card {
            background-color: #333;
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            margin: 10px;
            color: #fff;
        }

        .card p {
            color: #bbb;
        }

        .stat-card {
            display:  flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-card div {
            text-align: center;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0px;
            
        }

        .product-table th, .product-table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #444;
        }

        .product-table th {
            background-color: #333;
            color: white;
        }

        .product-table tr:hover {
            background-color: #575757;
        }

        .action-buttons button {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #888;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center; color:white;">Product Dashboard</h2>
        <a href="home.php">Dashboard</a>
        <a href="#">Products</a>
        <a href="#">Orders</a>
        <a href="#">Categories</a>
        <a href="logout.php" class="btn btn-warning text-light"><strong>Logout </strong></a>
    </div>

    <div class="header">
        <h1>Welcome to the Product Dashboard</h1>
    </div>