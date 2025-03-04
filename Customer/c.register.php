<?php require_once '../Homepage/session.php'; ?>
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Register Page</title>  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
    <style>
        body {
            background-image: url(../image/bgDel.png);
            background-size: cover;
            color: #444;
        }
        .login-container {
            background: linear-gradient(135deg, rgba(255, 223, 186, 0.8) 0%, rgba(255, 159, 159, 0.8) 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-title, .input-label {
            color: #7a2005;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>  
<body class="bg-gray-100">
    <?php include '../Homepage/header.php';?>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm login-container">
            <h2 class="text-2xl font-bold mb-6 text-center login-title">Register</h2>
            <form action="c_register.php" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium input-label">Username</label>
                    <input type="text" id="username" name="username" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium input-label">Password</label>
                    <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium input-label">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium input-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium input-label">Address</label>
                    <input type="text" id="address" name="address" required class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Register !</button>
            </form>
            <button onclick="window.location.href='c.login.php'" class="w-full mt-4 bg-orange-500 text-white p-2 rounded-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Back to Login</button>
        </div>
    </div>
</body>  
</html>