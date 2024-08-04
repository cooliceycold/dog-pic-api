<?php $a=file('pc.txt');$b=$a[array_rand($a)];header("Location:$b");
