<?php
        mysql_connect("localhost","root","yushin9012703");
           mysql_select_db("laravel",$mysql_connect);
		   mysql_query("SET NAMES 'utf8'"); 
		   mysql_query("SET CHARACTER_SET=utf8"); 
           mysql_query("SET CHARACTER_SET_CLIENT=utf8"); 
           mysql_query("SET CHARACTER_SET_RESULTS=utf8");
    ?>
    <?php
   $sql=mysql_query("select * from favorite where fid=1");
   $info=mysql_fetch_array($sql);?>
   <?php echo $info['rid'] ?>