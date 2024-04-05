<?php

require_once 'Team.php'; 
require_once 'Player.php';
require_once 'Role.php'; 
require_once 'Country.php';
require_once 'Contract.php'; 

// Creating Countries
$country = new Country(" France");
$country2 = new Country("Spain ");
$country3 = new Country("Brazil");

// Creating Players
$Player1 = new Player("Kylian", "Mbappe", "2013-01-01", "France", "1998-12-20");
$Player2 = new Player("Vinicius", "Junior", "2017-01-01", "Brazil", "2000-07-12");


// Creating Teams
$Team1 = new Team("Real Madrid ", "1902-03-06", $country2);
$Team2 = new Team("PSG", "1902-03-08", $country); 

// Creating Roles 
$role1 = new Role("Left Winger");
$role2 = new Role("Forward");

// Conctract
$Contract = new Contract($Player1, $role2, $Team2);
$Contract2 = new Contract($Player2, $role1, $Team1);

echo $Player1->getRole();
echo $Team1->getName();
echo $Team1->getCountry()->getName(); 

echo $Player2->getRole();
echo $Team2->getName();
echo $Team2->getCountry()->getName();

?>
