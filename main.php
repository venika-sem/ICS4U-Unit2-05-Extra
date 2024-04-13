<?php

require_once 'Vehicle.php';

echo "Created Ford focus\n";
$fordFocus = new Vehicle('white', 'B40-C4RR0', 4, 284);

echo "Status:\n";
$fordFocus->status();

echo "Accelerating, 10 of power for 10 sec.\n";
$fordFocus->accelerate(10, 10);
echo "New speed: {$fordFocus->status()['speed']}\n";

echo "Changing colour to black:\n";
$fordFocus->setColor('black');
echo "New color: {$fordFocus->getColor()}\n\n";

// Create new Ferrari
echo "Created a Ferrari\n";
$ferrari = new Vehicle('red', 'VHD-35HU', 2, 320);

echo "Status:\n";
$ferrari->status();

echo "Accelerating, 100 of power for 4 sec.\n";
$ferrari->accelerate(100, 4);
echo "New speed: {$ferrari->status()['speed']}\n";

echo "Breaking, 10 of power for 10 sec.\n";
$ferrari->brake(10, 10);
echo "New speed: {$ferrari->status()['speed']}\n";

echo "Changing color:\n";
$ferrari->setColor('racing red!');
echo "New color: {$ferrari->getColor()}\n\n";

// Create new Citroen Ami
echo "Created a Citroen Ami\n";
$citroenAmi = new Vehicle('blue', 'FS-695-DQ', 2, 45);

echo "Status:\n";
$citroenAmi->status();

echo "Accelerating, 5 of power for 10 sec.\n";
$citroenAmi->accelerate(5, 10);
echo "New speed: {$citroenAmi->status()['speed']}\n";

echo "Breaking, 2 of power for 10 sec.\n";
$citroenAmi->brake(2, 10);
echo "New speed: {$citroenAmi->status()['speed']}\n";

echo "Changing color:\n";
$citroenAmi->setColor('purple');
echo "New color: {$citroenAmi->getColor()}\n\n";

echo "\nDone.";
?>
