<?php $a=file('pe.txt');$b=$a[array_rand($a)];header("Location:$b");
