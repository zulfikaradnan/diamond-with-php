<?php

/**
 * @author Zulfikar Adnan
 * @copyright 12/02/2014
 * @mail zulfikar.adn@gmail.com
 * @function with do while loop
 */

function karakter_permata(){
  echo "*";
}

function karakter_spasi($n){
  $i = $n;
  do {
    echo ($i > 0) ? " " : "";
    $i--;
  } while ($i > 0);
}

function objek_penuh($n){
  $i = $n;
  do {
    echo ($i == 1) ? karakter_permata() : karakter_permata() . karakter_spasi(1);
    $i--;
  }while($i > 0);
}

function objek_kosong($n){
  echo ($n == 1) ? karakter_permata() : karakter_permata().karakter_spasi(($n+1) - 3).karakter_permata();
}

function permata($n = 5, $isi = true){
  $i = 1;
  do {
    echo karakter_spasi($n - $i).($isi == true) ? objek_penuh($i)."\n" : objek_kosong((2*$i)-1)."\n";
    $i++;
  } while($i <= $n);
  
  $i = $n-1;
  do {
    echo karakter_spasi($n - $i).($isi == true) ? objek_penuh($i)."\n" : objek_kosong((2*$i)-1)."\n";
    $i--;
  } while($i > 0);
}
