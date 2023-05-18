<?php
class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }    

    public function getInfo() {
        return "Hewan ini adalah $this->nama, jenisnya $this->jenis.";
    }
}

class Cat extends Animal
{
    public $info;

    public function __construct($jenis)
    {
        $this->nama = "Kucing";
        $this->jenis = $jenis;
        $this->info = "Kucing adalah hewan yang sangat lucu dan menggemaskan";
    }

    public function getInfo(){
        return "Hewan ini adalah $this->jenis jenis $this->nama . $this->info";
    }
}

class Dog extends Animal
{
    public $info;

    public function __construct($jenis)
    {
        $this->nama = "Anjing";
        $this->jenis = $jenis;
        $this->info = "Anjing adalah hewan yang punya gigi tajam";
    }

    public function getInfo(){
        return "Hewan ini adalah $this->jenis jenis $this->nama . $this->info";
    }
}

$Animal = new Animal("Harimau","Karnivora");
echo $Animal->getInfo();
echo "<br>---------------------------------------------------------";
echo "<br>";

$cat = new Cat("Kitty");
echo $cat->getInfo();
echo "<br>---------------------------------------------------------";
echo "<br>";

$dog = new Dog("Buddy");
echo $dog->getInfo();
echo "<br>---------------------------------------------------------";
echo "<br>";