<?php
$title ="Function";
include 'includes/header.php';
?>
   
   <h1>Function</h1>
     
</div>
<br/>
<br/> 
<div>
    <?php 
      
      function writeMessage(){
        echo "This is a very good skill to have on one's tool kit <br/><br/>";
      }

      writeMessage();

        function addFunction($num1, $num2)
      {
        $subt = $num1 - $num2;
        echo "The difference between $num1 and $num2 is: $subt <br/>";
      }
      addFunction(157, 298);

      function changeNum(&$num){
        $num = $num + 10;

        changeNum($num);
        echo $num . '<br/>';
      }
    ?>
    
</div>
<br/>
<br/>
<div class="navbtn">
<a href="datetime.php" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>
</div>
</div>
<?php require 'includes/footer.php' ?>