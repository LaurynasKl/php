<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $users = file_get_contents(__DIR__.'/data/users.ser');
        $users = unserialize($users);
        $user = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        $users[] = $user;
        file_put_contents(__DIR__.'/data/users.ser', serialize($users));
        header('Location: http://localhost/BIT-backend/php/013auth/index.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Forest</title>
</head>
<body>  
    <h1>Register to Forest</h1>
    <form action="">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>


</body>
</html>
