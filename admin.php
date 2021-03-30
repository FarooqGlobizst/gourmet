<?php

include 'function.php';
?>
<?php
if(isset($_GET['submit'])){
    $name = $_GET['pizza'] ;
    $desc = $_GET['desc'] ;

    $p = new Pizza($name, $desc);
    array_push($pizzas, $p);

    
?>
<pre>
    <?php var_dump($pizzas) ?>
</pre>
    
<?php }

?>
<form action="#" method="get">
    <input type="text" name="pizza" >
    <input type="textarea" name="desc">
    <input type="submit" name="submit">
</form>
<?php
include 'includes/footer.php';
?>