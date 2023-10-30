<?php
function component($productname, $productprice, $productimg, $productid , $productdesc, $productlink){
    $element = sprintf("
    <div class=\"event\">
    <div class=\"event-left\">
      <div class=\"event-date\">
        <img src=\"$productimg\" alt=\"\"height=\"125\" width=\"125\">
      </div>
    </div>
    <div class=\"event-right\">
      <h3 class=\"event-title\">$productname</h3>
      <div class=\"event-description\">
        $productdesc 
      </div>
      <h3 class=\"event-1\">$productprice</h3>
      <div class=\"event-timing\">
        <a type=\"submit\" class=\"btn\" href=\"$productlink\">Learn More</a>
      </div>
    </div>
  </div>
    ");
    echo $element;
}


