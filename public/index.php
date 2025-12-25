<?php
    require_once __DIR__ . '/../app/configs/DBConnection.php';
    require_once __DIR__ . '/../app/models/User.php';
    require_once __DIR__ . '/../app/models/Admin.php';

    $pdo = Database::connectDB();

echo " Database is connected!<br>";

$user = new User(1, 'lahcen', 'maskour', 'lahcen@lahcen.com', '123456');
$admin = new Admin(1, 'lahcenAdmin', 'maskourAdmin', 'lahcenAdmin@lahcen.com', '123456');

echo "<b>Full Name:</b> " . $user->getFullName() . "<br>";
echo "<b>Email:</b> " . $user->gEmail() . "<br>";

echo "<b>Full Name:</b> " . $admin->getFullName() . "<br>";
echo "<b>Email:</b> " . $admin->getEmail() . "<br>";

$role = $user->getRole();
echo "<b>Role:</b> " . (is_object($role) ? $role->name : $role) . "<br>";


$savedHash = $admin->getPassword();
echo "Saved Hash: " . $savedHash . "<br>";


?>