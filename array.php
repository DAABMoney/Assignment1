<?php
$title ="Arrays";
include 'includes/header.php';
?>
    <h1>Arrays</h1>
     
</div>
<br/>
<br/> 
<div>
    <?php 
    $num = 4;

    $nums = array(1, 3, 6, 9, 20, 35);
    echo $nums[2];

    echo "<p>$nums[4]</p>";

    $size = count($nums);
    echo "<p>The Array number size is: $size</p>";

    for($count = 0; $count < $size; $count++){
        echo "<p>$nums[$count]</p>";

    }
        
    ?>
</div>
<br/>
<div class="navbtn">
<a href="whileloop.php" class="previous">&laquo; Previous</a>
<a href="string.php" class="next">Next &raquo;</a>
</div>
  </div>
</div>
<?php require 'includes/footer.php' ?>