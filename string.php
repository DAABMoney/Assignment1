<?php
$title ="String Manipulation";
include 'includes/header.php';
?>
   <h1>String Manipulation</h1>
    
</div>
<br/>
<br/> 
<div>
    <?php 
   $phrase = "PHP is cool";
   $phrase = "PHP is a server side script";
   $name = " Duane ";
   echo '<br/>';
   echo '<br/>';

   echo 'Uppercase first letter:  ' . ucfirst($name).'<br/>';
   echo 'Uppercase first letter of each word  ' . ucwords($name).'<br/>';
   echo 'Repeat String:  ' . str_repeat('d', 4) . '<br/>';
   echo 'Repeat String - Nested Function:  ' . strtoupper(str_repeat('a',5)) . '<br/>'; 
    ?>

</div>
<br/>
<br/>
<br/>
<div class="navbtn">
<a href="array.php" class="previous">&laquo; Previous</a>
<a href="datetime.php" class="next">Next &raquo;</a>
</div>
  </div>
</div>
<?php require 'includes/footer.php' ?>