<?php
    $title ="While / Do While Loop";
    include 'includes/header.php';
?>
    <h1>While / Do While Loop</h1>
    
</div>
<br/>
<br/> 
<div>
<h2>Do-While Loop</h2>
    <?php 
    $rate = 0;
    while($rate < 5){
        echo '<p>You got the top score of 90%</p>';
        $rate++;
    }
    echo 'Congratulation Loop ends!!';
    ?>
    <h2>Do-While Loop</h2>
    <?php 
        $rate = 0;
        do{
            echo '<p>You got the top score of 90%</p>';
            $rate++;
        }while($rate < 5);
        echo 'Congratulation Loop ends!!';
    ?>

</div>
<br/>
<br/>
<br/>
<div class="navbtn">
<a href="forloop.php" class="previous">&laquo; Previous</a>
<a href="array.php" class="next">Next &raquo;</a>
</div>
</div>
<?php require 'includes/footer.php' ?>