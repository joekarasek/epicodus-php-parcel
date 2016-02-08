<?php
  class Parcel
  {
      public $length;
      public $width;
      public $height;
      public $weight;

      function __construct($length,$width,$height,$weight)
      {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
      }

  }

  $customer_parcel = new Parcel($_GET["length"],$_GET["width"],$_GET["height"],$_GET["weight"]);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parcel Printout</title>
  </head>
  <body>
    <?php
      echo "<p> Parcel length: $customer_parcel->length </P>";
      echo "<p> Parcel width: $customer_parcel->width </P>";
      echo "<p> Parcel height: $customer_parcel->height </P>";
      echo "<p> Parcel weight: $customer_parcel->weight </P>";
     ?>
  </body>
</html>
