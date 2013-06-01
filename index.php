<? include "IncludeMe.php"; ?>
<html>
<body>
        <?php 
       
        /** 
         *  Based on what variables are passed to index.php it will
         *  determine what schedule layout will be used as well as
         *  weatehr or not to display the code for the 
         *  file_get_contents call to embed it in a page.
         * **/
        if ($_GET["getDisplay"] == 1){
            
            echo file_get_contents(getcwd()."/display/schedule.table.php");
            
        } else if (($_GET["getDisplay"] == 1) && ($_GET["getEmbed"] == 1)) {
             echo file_get_contents(getcwd()."/display/schedule.table.php");
             echo "\n"; ?>
             <p>Code: file_get_contents(<? echo getcwd();?>"/index.php?getDisplay=1");</p>
        <?php  }  ?>
	
</body>
</html>	