<?php

$data = [
    [
        "nama " => "Billy",
        "alamat" => "kota raja",
        "jk" => "L"
    ],
    [
        "nama " => "Axl",
        "alamat" => "Sentani",
        "jk" => "L"
    ],
    [
        "nama " => "Efati",
        "alamat" => "kota raja",
        "jk" => "P"
    ],
];
foreach ($data as $peserta )
{
    echo $peserta['nama']. "<br>";
    echo $peserta['alamat']. "<br>";

    if($peserta['jk'] === 'P'){
        $jk ='perempuan';
    }else{
        $jk ='laki-laki';
    }
    echo $jk ."<br>";
    echo "<br> <br>";

}