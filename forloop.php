<?php
$title ="Forloop";
include 'includes/header.php';
?>
    <h1>Forloop</h1>
    
</div>
<br/>
<br/> 
<div>
    <?php 
    for($count = 0; $count < 5; $count++){
        echo '<p>Welcome to forloop</p>';
    }

    for($count = 0; $count < 5; $count ++)
        echo "<p>Counting down in: $count</p>";


    ?>
</div>
<br/>
<br/>
<div class="navbtn">
<a href="switchstatement.php" class="previous">&laquo; Previous</a>
<a href="whileloop.php" class="next">Next &raquo;</a>
</div>
  </div>
</div>
<?php require 'includes/footer.php' ?>