<html>


<!-- Global styles BEGIN -->
<link href="style/css/bootstrap.css" rel="stylesheet">
<!-- Global styles END -->
<title>Activation</title>
    
    
    
    
    
    <head>
    
    
    
    </head>

<body>
    
<div>
    <center>
    
  <?php
    
        
    @$key=$_POST["key"];
    @$v_key= md5("qjps");    
        
    if($key==$v_key)
    {
        
        echo "<h1 class='text-info'> Activation succesful, please continue to use your version of XAMPP for Macintosh</h1>";
            
            
            
    }
        
        elseif(!empty($key) && $key!=$v_key)
            
        {
            
        echo "<h1 class='text-danger'> Activation Unsuccesful, please tryagain with a valid license key</h1>";
            
        }
    
    ?>
    
    <h1>Welcome XAMPP FOR Macintosh !</h1>
    
    
    
    <form action="" method="post">
    
    
    <input type="text" value="" name="key" placeholder="Pelase enter activation code obtained" class="form-control" style="width:400px"/>
        <br/>
        <input type="submit" class="btn btn-danger btn-xl" value="Activate">
     
    </form>
    
    </center>
</div>    
    
    
</body>

</html>