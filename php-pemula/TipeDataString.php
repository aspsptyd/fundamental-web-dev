<?php
    echo 'Name : ';
    echo 'Eko Kurniawan Khannedy';
    echo "\n";

    echo "Name : ";
    echo "Eko\t Kurniawan\t Khannedy\n";

    echo "\n";

    echo <<<EKO
    Selamat belajar PHP
    sekarang, kita belajar tipe data string
    ini adalah cara ke-3 membuat string
    bisa menggunakan heredoc
    EKO;

    echo "\n";
    echo "\n";

    echo <<<'EKO'
    Selamat belajar PHP
    sekarang, kita belajar tipe data string
    ini adalah cara ke-3 membuat string
    bisa menggunakan heredoc
    EKO;

    echo "\n";
    echo "\n";

    $tampungString = "Handi Firmansyah";
    echo 'Nama Saya ' . $tampungString;
?>