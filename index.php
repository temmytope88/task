
    <?php
      $files = glob("script/*"); 
      $num = count($files);
       
     
        for ($i = 0; $i<$num; $i++){
        $fil = $files[$i];     
        $var = explode(".",$fil);
    
        if ($var[1]=="py"){
        
         echo exec("python $fil")."<br>";
        }
        if ($var[1]=="js"){
          
          echo exec("node $fil")."<br>";
        }
       
        if ($var[1]=="php"){
         echo exec("php $fil")."<br>";
        }
      
     }

   
    ?>


</body>
</html>

