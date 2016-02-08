<?php
  class Parcel
  {
      private $length;
      private $width;
      private $height;
      private $weight;

      function __construct($length,$width,$height,$weight)
      {
          $this->length = $length;
          $this->width = $width;
          $this->height = $height;
          $this->weight = $weight;
      }
      function getLength()
      {
          return $this->length;
      }
      function getWidth()
      {
          return $this->width;
      }
      function getHeight()
      {
          return $this->height;
      }
      function getWeight()
      {
          return $this->weight;
      }

      function volume()
      {
          // $volume = $this->length * $this->width * $this->height;
          // return $volume;
          return $this->length * $this->width * $this->height;
      }

      function costToShip ()
      {
          return $this->volume()/10 + $this->weight/10;
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
        $length = $customer_parcel->getLength();
        $width = $customer_parcel->getWidth();
        $height = $customer_parcel->getHeight();
        $weight = $customer_parcel->getWeight();
        $volume = $customer_parcel->volume();
        $cost = $customer_parcel->costToShip();


        echo "<p> Parcel length: $length </P>";
        echo "<p> Parcel width: $width </P>";
        echo "<p> Parcel height: $height </P>";
        echo "<p> Parcel weight: $weight </P>";
        echo "<p> Parcel volume: $volume </P>";
        echo "<p> Parcel cost: $cost </P>";
     ?>
  </body>
</html>
