<?php
    require_once __DIR__ . '/../app/configs/DBConnection.php';
    require_once __DIR__ . '/../app/models/User.php';

    $pdo = Database::connectDB();

echo " Database is connected!<br>";

$user = new User(1, 'lahcen', 'maskour', 'lahcen@lahcen.com', '123456');

echo "<b>Full Name:</b> " . $user->getFullName() . "<br>";
echo "<b>Email:</b> " . $user->getEmail() . "<br>";

$role = $user->getRole();
echo "<b>Role:</b> " . (is_object($role) ? $role->name : $role) . "<br>";

$savedHash = $user->getPassword();
echo "Saved Hash: " . $savedHash . "<br>";

?>