<?php $a=file('img.txt');$b=$a[array_rand($a)];header("Location:$b");
