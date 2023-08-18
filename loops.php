<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>

  <style>
    #heading{
      text-align:center;
      background-color:purple;
      color:white;
      padding:5px;
      border-radius:20px;
    }

    .title{
      text-align:center;
      background-color:purple;
      color:white;
      padding:5px;
      border-radius:20px;
    }

    div{
      height:100%;
      width:23%;
      border : solid purple 2px;
      padding:5px;
      margin:5px;
    }

    .ForLoop
    {
      position:relative;
      float:left;
    }
    .WhileLoop
    {
      position:relative;
      float:left;
    }
    .DoWhileLoop
    {
      position:relative;
      float:left;
    }
    .ForEachLoop
    {
      position:relative;
      float:left;
    }
  </style>

</head>
<body>
  <h1 id="heading">Sparkout Tech Solutions</h1>
  <h2 class="title">Loops in php</h2>

  <div class="ForLoop">
    <?php
      echo "For Loop : <br><br>";
      for($i=1;$i<=20;$i++)
      {
        echo "$i <br>";
      }
    ?>
  </div>

  <div class="WhileLoop">
    <?php
        $i=1;
        echo "While Loop : <br><br>";
        while($i<=20)
        {
          echo "While Loop : $i <br>";
          $i++;
        }
    ?>
  </div>

  <div class="DoWhileLoop">
    <?php
      echo "Do While Loop : <br><br>";
      $i=1;
      do{
        
        echo "Do While : $i <br>";
        $i++;
      }while($i<=20);
    ?>
  </div>

  <div class="ForEachLoop">
      <?php
        echo "For Each Loop : <br><br>";

        $names = Array("BALAJI N","HARIKRISHNAN","PRASANTH","SHEIK DAWOOD","KATHIR PANEERSELVAM","JOEL","GARUNYAA");

        foreach($names as $fe)
        {
          echo "For Each : $fe <br>";
        }
      ?>
  </div>
</body>
</html>