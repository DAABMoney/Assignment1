<?php
$title ="Date and Time";
include 'includes/header.php';
?>

    <h1>Date & Time Manipulation</h1>
     
</div>
<br/>
<br/> 
<div>
    <?php 
      
      $datenow = getdate();
      echo "Today's Date <br/>";
      echo $datenow['mday'] . '<br/>';
      echo $datenow['mon'] . '<br/>';
      echo $datenow['year'] . '<br/>';

      echo "Today's  Date " . $datenow['mday'] . '/' . $datenow['mon'] . 
      '/' . $datenow['year'] . '<br/>';

      print date("m/d/y G.i:s<br>", time()) . '<br/>';
      print "Today is ";
      print date("j of F Y, \a\\t g.i a", time()) . '<br/>';
    ?>
    
</div>
<br/>
<br/>
<br/>
<div class="navbtn">
<a href="string.php" class="previous">&laquo; Previous</a>
<a href="function.php" class="next">Next &raquo;</a>
</div>
</div>
<?php require 'includes/footer.php' ?>