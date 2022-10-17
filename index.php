<?php
    $title ="Index";
include 'includes/header.php';
?>


<div>
<div class="header">  
  <h1>Assignment 1 PHP Basics</h1>
</div>
<br/>
<br/> 
<div>
    <br/>
        <?php
             $name = 'Duane Burke';
             echo '<h2>This first assignment is done by '.$name.' 1917008770</h1>'
        ?>

    <?php
        echo 'This is a test or use of the echo syntax.';
        echo '<br/>';
        echo 'Web applications are very cool.';
        echo '<br/>';
        echo 'This basic web page was done by '.$name.'';
    ?>
</div>
<br/>
<br/>
<br/>
<br/>
<div class="navbtn">
<a href="#" class="previous">&laquo; Previous</a>
<a href="ifstatement.php" class="next">Next &raquo;</a>
</div>
<?php require 'includes/footer.php' ?>