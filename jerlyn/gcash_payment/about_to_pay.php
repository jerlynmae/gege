<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCash Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: beige;
            color: #333;
        }

        header {
            background-color: #0077c0;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
            height: 200px;
        }

        header .logo {
            position: absolute;
            left: 20px;
            top: 10px;
            width: 60px;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
            margin-top: 20px;
        }

        header .logo {
            width: 400px;
            height: 100px;
            margin-left: 1050px;
            margin-top: 50px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        .payment-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 900px;
            height: 700px;
            margin-top: 50px;
        }

        .payment-form h2 {
            margin-top: 50px;
            font-size: 50px;
            text-align: center;
        }

        .payment-form h3 {
            margin-top: 0;
            font-size: 30px;
            text-align: center;
            border-bottom: 2px solid black;
            padding: 20px;
        }

        .payment-form h4 {
            margin-top: 0;
            font-size: 20px;
            text-align: center;
            padding: 20px;
            color: grey;
        }
        .payment-form a {
            font-size: 50px;
            text-decoration: none;
            color: black;
        }
        .payment-form label {
            display: block;
            margin: 15px 0 5px;
            margin-left: 100px;
        }

        .payment-form input {
            width: 700px;
            height: 50px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 100px;
            font-size: 40px;
        }

        .payment-form button {
            background-color: #0077c0;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 30px;
            width: 700px;
            height: 100px;
            margin-top: 50px;
            margin-left: 110px;
        }

        .payment-form button:hover {
            background-color: #005f90;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #0077c0;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <img src="../images/gcashh.png" alt="GCash Logo" class="logo">
    </header>
    <div class="container">
        <div class="payment-form">
            <a class="backbutton" href="../gcash_payment/gcash.php"  onclick="showSection('name-user')"> » </a>
            <form action="../PHPScript/process-payment.php" method="post"> 
                <h2>Pay with GCash</h2>
                <h3> YOU ARE ABOUT TO PAY</h3>
                <h3> TOTAL: PHP 120.00</h3>
                <h4> Please review to ensure that the details are <br>correct before you proceed.</h4>
                <button type="submit">Pay Now</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 GCash. All rights reserved.
    </footer>
</body>
</html>
