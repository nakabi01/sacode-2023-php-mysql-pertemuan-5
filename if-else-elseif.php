<?php

$umur =16;

// if, else = satu  kondisi
if($umur > 17)
{
    echo "sudah dewasa";
}
// if, else = dua kondisi
if($umur > 17)
{
    echo "<br> sudah dewasa";
} else{
    echo "<br> belum dewasa";
}

// if, elseif, else 
 $nilai =40;
 if($nilai >= 90)
 {
    echo "<br> Nilai A";
 }

elseif($nilai >= 80)
{
    echo "<br> Nilai B";
}
elseif($nilai >= 70)
{
    echo "<br> Nilai C";
}
else
{
    echo "<br> Nilai D";
}
?>