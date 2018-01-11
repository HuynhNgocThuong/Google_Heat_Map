<?php
 
$file = fopen("heatjson.txt",'w');
 
$string = "
 
Sed condimentum commodo felis a iaculis. Vestibulum nec bibendum arcu. Proin facilisis sit amet enim et commodo. Donec gravida tortor eget lobortis varius. Donec at dolor a enim lacinia tempus. Vivamus id odio a nisl sagittis lacinia. Nulla rutrum tempus rutrum. Cras pulvinar neque ac interdum ullamcorper. Fusce turpis dolor, elementum quis magna quis, pharetra dapibus mauris. Maecenas auctor aliquam neque id euismod. Aliquam rhoncus, libero non vehicula faucibus, arcu leo pulvinar velit, a ornare erat lorem ac odio.";
 
fwrite($file,$string);
 
?>