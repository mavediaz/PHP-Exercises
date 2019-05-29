<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
    "Pizza",
    "Pasta",
    "Sushi",
    "Cheesecake"
];

    
/*
Print every array element in a new line.
*/

echo "<pre>";
print_r($food);
echo "</pre>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul><li>" .$food[0]. "</ul></li>";
echo "<ul><li>" .$food[1]. "</ul></li>";
echo "<ul><li>" .$food[2]. "</ul></li>";
echo "<ul><li>" .$food[3]. "</ul></li>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    "Pizza" => "junk food",
    "Pasta" => "main dish",
    "Sushi" => "finger food",
    "Cheesecake" => "dessert"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "Pizza | ".$food_assoc["Pizza"];
echo "<br>";
echo "Pasta | ".$food_assoc["Pasta"];
echo "<br>";
echo "Sushi | ".$food_assoc["Sushi"];
echo "<br>";
echo "Cheesecake | ".$food_assoc["Cheesecake"];
echo "<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$origin = [
    "junk food" => "Italia",
    "main dish" => "Italia",
    "finger food" => "Japan",
    "dessert" => "America"
];

$food_assoc = [
    "Pizza" => $origin,
    "Pasta" => $origin,
    "Sushi" => $origin,
    "Cheesecake" => $origin,
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "Pizza | junk food". " | " .$food_assoc["Pizza"]["junk food"];
echo "<br>";
echo "Pasta | main dish". " | " .$food_assoc["Pasta"]["main dish"];
echo "<br>";
echo "Sushi | finger food". " | " .$food_assoc["Sushi"]["finger food"];
echo "<br>";
echo "Cheesecake | dessert". " | " .$food_assoc["Cheesecake"]["dessert"];
echo "<br>";
    
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

$origin = [
    "junk food" => "Italia",
    "main dish" => "Italia",
    "finger food" => "Japan",
    "dessert" => "America"
];

$food_assoc = [
    "Pizza" => $origin,
    "Pasta" => $origin,
    "Sushi" => $origin,
    "Cheesecake" => $origin,
];

echo 
    "<table>
      <tr>
        <th>food</th>
        <th>type</th>
        <th>origin</th>
      </tr>
      <tr>
        <td>{$food[0]}</td>
        <td>junk food</td>
        <td>{$food_assoc['Pizza']['junk food']}</td>
      </tr>
      <tr>
        <td>{$food[1]}</td>
        <td>main dish</td>
        <td>{$food_assoc['Pasta']['main dish']}</td>
      </tr>
      <tr>
        <td>{$food[2]}</td>
        <td>finger food</td>
        <td>{$food_assoc['Sushi']['finger food']}</td>
      </tr>
      <tr>
        <td>{$food[3]}</td>
        <td>dessert</td>
        <td>{$food_assoc['Cheesecake']['dessert']}</td>
      </tr>
    </table>";

?>