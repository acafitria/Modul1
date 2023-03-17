<!DOCTYPE html>
  <html>
  <head>
    <style>
      th { background-color :Red;
           font-weight: bold;
            padding:15px;
          }
    </style>
  </head>
<body>
    <?php 
    $hp = array("satu"=>"S22", "dua"=>"S22+", "tiga"=>"A03", "empat"=>"Xcover5");
    
 echo "<table border='1'>";
        echo "<tr><th> Daftar Smartphone Samsung</th></tr>";
        echo "<tr><td> Samsung Galaxy" . $hp['satu'] . "</td></tr>";
        echo "<tr><td> Samsung Galaxy" . $hp['dua'] . "</td></tr>";
        echo "<tr><td> Samsung Galaxy" . $hp['tiga'] . "</td></tr>";
        echo "<tr><td> Samsung Galaxy" . $hp['empat'] . "</td></tr>";

  echo "</table>";
    ?>
</body>
</html>


