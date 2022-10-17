<?php
$title ="If Statement";
include 'includes/header.php';
?>
    <h1>If Statement</h1>
     
</div>
<br/>
<br/> 
    <?php 

    $grade = 90;

    if($grade >= 90){
        echo '<h3 style="color: green">You pass the course</h3>';
    }
    else{
        echo '<h3 style="color: red">You faild the course</h3>';
    }
    
    $grade = 'F';

    if($grade == 'A'){
        echo '<h3 style="color: green">You pass the course</h3>';
    }
    elseif($grade == 'F'){
        echo '<h3 style="color: red">You faild the course</h3>';
    }
    ?>
<br/>
<br/>
<br/>
<div class="navbtn">
<a href="index.php" class="previous">&laquo; Previous</a>
<a href="switchstatement.php" class="next">Next &raquo;</a>
</div>
  </div>
</div>
<?php require 'includes/footer.php' ?>