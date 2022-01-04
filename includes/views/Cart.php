<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            font-family: arial;
        }

        .navbar {
            height: 100%;
            width: 100%;
            position: sticky;
            z-index: 1;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: row;
            background-color: #534c4c;
            overflow-y: auto;
        }

        .topnav {
            overflow: hidden;
            text-align: center;
            margin-top: 0px;
        }

        .topnav p {
            color: #750b49;
            font-size: 50px;
        }

        .navbutton {
            width: 150px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            background: #383838;
            color: #fff;
            border-radius: 25px;
            text-transform: capitalize;
            border: none;
            cursor: pointer;
            display: block;
            margin: 10px auto;

            box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
            -moz-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
            -webkit-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
            -o-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
            -ms-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
        }

        .navbar a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            padding: 10px;
            margin-left: 20px;
            height: 8vh;
            width: 100%;
            margin-top: 20px;
            display: flex;
            flex-direction: row;
        }

        .navbar a {
            text-decoration: none;
            font-size: 25px;
            color: white;
            padding: 10px;
            margin-left: 20px;
            height: 10vh;
            width: 100%;
            display: block;
        }

        .navbar p {
            font-size: 25px;
            color: white;
            margin-bottom: 0px;
            padding: 10px;
            margin-top: 30px;
            margin-left: 20px;
            margin-bottom: 0px;
        }

        .navbar a:hover {
            color: #778DA9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-page {
            margin-left: 300px;
            padding: 0x 20px;
        }

        .cart {
            margin-left: 350px;
        }

        .cart-table {
            display: table;
            border-collapse: collapse;
            width: 80%;
            color: #140f0f;
            font-size: 1.5em;
            min-width: 400px;
            text-align: left;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            font-family: arial;
            margin-top: 40px;
            /* margin-left: 150px; */

        }

        .cart-table td,
        .cart-table th {
            padding: 12px;
        }

        .cart-table thead tr {
            background-color: #e64d00;
            color: #ffffff;
            font-weight: bold;
        }

        .cart-table tr a {
            text-decoration: none;
            font-size: 0.5em;
            color: red;
        }

        td:last-child,
        td:nth-child(4) {
            text-align: right;
        }

        th:last-child,
        th:nth-child(4) {
            text-align: right;
        }

        tr:nth-last-child(2) {
            border-top: 3px solid black;
        }


        .button {
            width: 150px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            background: #383838;
            color: #fff;
            border-radius: 25px;
            text-transform: capitalize;
            border: none;
            cursor: pointer;
            display: block;
            margin: -2px auto;
        }

        .button1 {
            background-color: #4CAF50;
        }

        .button2 {
            background-color: #008CBA;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="home"><button class=navbutton>Home</button></a>
        <a href="products"><button class=navbutton>Products</button></a>
        <a href="sale"><button class=navbutton>Sales</button></a>
        <a href="shortage"><button class=navbutton>Shortage</button></a>
        <a href="update"><button class=navbutton>Update</button></a>
        <a href="employees"><button class=navbutton>Employees</button></a>
        <a href="companies"><button class=navbutton>Companies</button></a>
        <a href="representatives"><button class=navbutton>Representatives</button></a>
        <a href="logout"><button class=navbutton>log out</button></a>
    </div>
    <div class="topnav">

        <p style="font-size: 50px;">Cart</p>
    </div>


    <?php
    function clear()
    {
        require 'connection.php';
        echo 'hello';
        header(' Location: Login.html');
    }
    ?>
    <div class="container">

        <div class="cart">
            <table class="cart-table">

                <thead>
                    <th>Product Name</th>
                    <th>Remove</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>

                </thead>
                <tbody>



        </div>
    </div>
</body>

</html>
