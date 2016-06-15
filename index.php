<!DOCTYPE html>
<html>
  <head>
    <title>Phpone Book</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
<?php
$jsondata = file_get_contents("entries.json");
$json = json_decode($jsondata, true);
 ?>
    <h1>Phpone Book</h1>

    <!-- <form method="get" action="entries.json">
    <h2>Jenny Jennyson</h2>
    <p>(123)867-5309</p>
    <button class="delete">Delete</button> -->


 <!-- // $entries = jason_decode("entries.json", true);

//when clicking on add, do below
//need to make a while loop for entries.length to replace entries[0] -->
<?php
for ($i = 0; $i < count($json); $i++){
?>
  <h2><?php
    echo $json[$i]["name"];
  ?></h2>

  <p><?php
    echo $json[$i]["number"];
  ?></p>
  <button class="delete">Delete</button>
<?php }; ?>






<!-- // sometime later
echo $html;

//button Add, post it to the json and then retrieve(get)

//add delete button on the end of every entry, after json
//button Delete, remove from json
?> -->

<form method="post" action="entries.json">

<h2><input type="text" name="number" placeholder="Name"></h2>
<p><input type="text"  name="number" placeholder="xxx-xxx-xxxx"></p>

    <button class="add">Add</button>
</form>

  </body>
</html>
