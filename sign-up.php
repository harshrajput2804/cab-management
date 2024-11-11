<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main" id="log">
        <h1>Sign up</h1>
        <h3>Please enter your credentials</h3>

        <form action="">
            <div class="form-item">
                <label for="firstname">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Enter your First Name" required>

                <label for="lastname">Last Name:</label>
                <input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required>
            </div>

            <div class="form-item">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email Address" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your Username" required>
            </div>

            <div class="form-item">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            </div>

            <div class="wrap">
                <button type="submit">Submit</button>
            </div>
        </form>

        <p>You Have an Account? <a href="index.php" style="text-decoration: none;">Login</a></p>
    </div>
</body>

</html>