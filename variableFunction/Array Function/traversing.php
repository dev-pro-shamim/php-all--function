<?php


$fruit = ['kathal', 'Amm','Jam', 'lichu'];


echo "<b>Current :</b>" . current($fruit)."<br>";
echo "<b>Key :</b>" . key($fruit)."<br>";

echo "<b>pos :</b>" . pos($fruit)."<br>";

next($fruit);
echo "<b>Current :</b>" . current($fruit)."<br>";

next($fruit);
echo "<b>Current :</b>" . current($fruit)."<br>";

prev($fruit);
echo "<b>Current :</b>" . current($fruit)."<br>";

end($fruit);
echo "<b>Current :</b>" . current($fruit)."<br>";

end($fruit);
echo "<b>key:</b>" . key($fruit);


reset($fruit);
echo "<b>Current :</b>" . current($fruit)."<br>";

echo "<pre>";
print_r(each($fruit));

echo "</pre>";


?>