<?php 

// jualan produk
// Komik
// Game
class produk{
  // property
  public $judul,
         $penulis,
         $penerbit,
         $harga;
  // end property

  // Ini Construct
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  // End Construct
         
  // ini method
  public function getLabel() {
    // $this artinya agar variabel yang di tuju adalah variabael yang ada di property
    // return adalah menegmbalikan nilai
    return "$this->penulis, $this->penulis, $this->penerbit, $this->harga";
  }

  // end method

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

$produk1 = new produk("Naruto","Masashi Kishimoto","Shonen Jump",40000);
$produk2 = new produk("One Piece","Neil Drickmann", "Sony Computer", 500000);

echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
