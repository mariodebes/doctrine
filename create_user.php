<?php
// create_user.php
require_once "bootstrap.php";

$newUsername = $argv[1];

$user = new User();
$user->setName($newUsername);

$entityManager->persist($user);
$entityManager->flush();

echo "User Created with ID " . $user->getId() . "\n";
