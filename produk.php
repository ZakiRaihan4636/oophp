<?php 

// jualan produk
// Komik
// Game
class produk{
  // property
  public $judul  = "judul",
         $penulis = "penulis",
         $penerbit = "penerbit",
         $harga = "0";
         
  // ini method
  public function getLabel() {
    // $this artinya agar variabel yang di tuju adalah variabael yang ada di property
    // return adalah menegmbalikan nilai
    return "$this->penulis, $this->penerbit";
  }


  // Method
  // public function sayHello(){
  //   return "Hello World";
  //   echo "Hello World!";
  // } 
}


// $produk1 = new produk();
// $produk1->judul = "One Piece";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Resident Evil";
// var_dump($produk2->judul);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mahashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 40000;


$produk4 = new produk();
$produk4->judul = "Resident Evil";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Somy computer";
$produk4->harga = 247777;

echo "Komik : ". $produk3->getLabel();
echo "<br>";
echo "Game : ". $produk4->getLabel();
