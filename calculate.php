<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/main.css"/>
    </head>
        <h3>Simple Calculator Using PHP Script and Codenvy.com </h3>
        <h4>PHP on Google App Engine with Codenvy</h4>
    <body>
        <?php
        
        if(isset($_POST) && ($_POST['num1'] != "") && ($_POST['num2'] != ""))
          {
            $n1=$_POST['num1'];
				$n2=$_POST['num2'];

			   $btn=$_POST['btn'];
            
            switch($btn)
              {
                case "Add";
                  $result=$n1+$n2;
                  break;
                  
                  case "Sub";
                  $result=$n1-$n2;
                  break;
                  
                  case "Mul";
                  $result=$n1*$n2;
                  break;
                  
                  case "Div";
                  $result=$n1/$n2;
                  break;
              }
                  echo 'The result is: ' . $result;
                  unset($_POST);
          }
                  
        ?>
          
        <form action="/calculate" method="post">
                  <fieldset>
                  <legend>PHP Calci</legend>
          Enter Number 1: <input type="text" name="num1" required autofocus>
          Enter Number 2: <input type="text" name="num2" required autofocus>
            
            <input type="Submit" Value="Add" Name="btn">
              <input type="Submit" Value="Sub" Name="btn">
                <input type="Submit" Value="Mul" Name="btn">
                  <input type="Submit" Value="Div" Name="btn">
          </fieldset>
        </form>
    </body>
</html>