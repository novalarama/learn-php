<?php
$person = [
    ["name"=>"Gopal","weight"=>"80","height"=>"1.7" ],
    ["name"=>"Kaizo","weight"=>"70","height"=>"1.65" ],
    ["name"=>"Kokoci","weight"=>"60","height"=>"1.20" ],
]

/**
 * class : person
 * attributes : name, height, weight
 * behaviour : count BMI and get category
 */

 class Person
 {

    //atribut itu diimplementasikan sebagai variabel class
    public $name, $weight, $height;

    //constructor adalah fungsi yang pertama kali dijalankan saat proses pembuatan objek baru(ada keyword "new")
    public function __construct($name, $weight, $height){
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
    }

    //behaviour diimplementasikan sebagai method/fungsi
    public function countBMI (){
        //this digunakan untuk mengakses atribut dari class
        $bmi = $this-> weight / ($this->height * $this->height);
        return $bmi;
    }
    public function category(){
        $bmi = $this->countBMI();
        if ($bmi < 18.5) {
            return "Berat Badan Kurang";
        } elseif ($bmi >= 18.5 && $bmi <= 23 ) {
            return "Berat Badan Normal";
        }elseif ($bmi >= 23){
            return "Berat Badan Cenderung Obesitas";
        }elseif ($bmi >= 30){
            return "Obesitas";
        }
    }
}
//create object
$person1 = new Person ("Gopal",1.7,80 );
echo "BMI dari person 1 adalah ".$person1->countBMI();
echo "dengan kategori  ".$person1->category();
echo nl2br ("\n"); // nl2br digunakan untuk breakline
?>