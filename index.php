<?php
require './classe/User.class.php';
require './classe/admin.class.php';

$user1 = new User('Perfect','0000');
$user2 = new User('Parfait','1212');
$admin = new Admin('Perfecto','9090', true);

echo $user1->getName(). '<br>';
echo $user1->getPassord(). '<br>';
echo  '####################Admin <br>';
echo $admin->getName(). '<br>';
echo $admin->getPassord(). '<br>';
echo $admin->getAdmin();

