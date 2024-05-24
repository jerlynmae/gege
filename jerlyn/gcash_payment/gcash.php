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
            margin-top: 10px;
            font-size: 40px;
            text-align: center;
        }

        .payment-form h3 {
            margin-top: 0;
            font-size: 20px;
            text-align: center;
            border-bottom: 2px solid black;
            padding: 10px;
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
            padding: 5px;
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
            padding: 10px;
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

        .error {
            color: red;
            font-size: 20px;
            margin-left: 100px;
            margin-bottom: -10px;
            padding:10px;
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
            <a class="backbutton" href="../webpages/osbalance.php" onclick="showSection('name-user')"> » </a>
            <h2>Pay with GCash</h2>
            <h3> Log In to Pay with GCash</h3>
            <h3> Amount Due: PHP 120.00</h3>
            <form action="../PHPScript/about_to_pay2.php" method="POST">
                <label for="phone-number">GCash Phone Number:</label>
                <?php if (isset($_GET['errors']['phone-number'])): ?>
                    <div class="error"><?php echo htmlspecialchars($_GET['errors']['phone-number']); ?></div>
                <?php endif; ?>
                <input type="text" id="phone-number" name="phone-number" value="<?php echo htmlspecialchars($_GET['phone-number'] ?? ''); ?>" required>
                <label for="otp">GCash PIN: </label>
                <?php if (isset($_GET['errors']['otp'])): ?>
                    <div class="error"><?php echo htmlspecialchars($_GET['errors']['otp']); ?></div>
                <?php endif; ?>
                <input type="password" id="otp" name="otp" required>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 GCash. All rights reserved.
    </footer>
</body>
</html>
