<?php
$title ="Switch Statement";
include 'includes/header.php';
?>
    <h1>Switch Statement</h1>
     
</div>
<br/>
<br/> 
<div>
    <?php 
     $grade = 90;

     switch($grade){
         case '90':
             echo '<h3 style="color: green">You pass 90%<h3/>';
             break;
         case '80':
             echo '<h3  style="color: green">You pass 80%<h3/>';
             break;
         default:
             echo '<h3  style="color: green">You fail 40%<h3/>';
     } 
    ?>
    </div>    
<br/>
<br/>
<br/>
<div class="navbtn">
<a href="ifstatement.php" class="previous">&laquo; Previous</a>
<a href="forloop.php" class="next">Next &raquo;</a>
</div>
  </div>
</div>
<?php require 'includes/footer.php' ?>