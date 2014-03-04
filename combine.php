<?php
$nouns = file('nouns.txt');
$adjectives =  file('adjectives.php');

foreach($nouns as $noun) {
   foreach($adjectives as $adjective) {
      echo $noun . $adjective;
   }
}