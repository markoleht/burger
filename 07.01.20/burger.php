<?php
//esimene

class Burger
{
public  $nimetus = 'Hesburger';
public  $liha = 'Veis';
public  $sai = 'Valge';

public  $hind = 10.00;
public  $lisand1 = 'Juust';
public  $lisand1Hind = 1.50;
public  $lisand2 = 'Tomat';
public  $lisand2Hind = 1.00;
public  $lisand3 = 'Kurk';
public  $lisand3Hind = 1.00;
public  $lisand4 = 'Jalapenjo';
public  $lisand4Hind = 1.50;

public function getBurgerPrice()
    {
        return
            $this -> hind+
        $this -> lisand1Hind+
        $this -> lisand2Hind+
        $this -> lisand3Hind+
        $this -> lisand4Hind;
    }

public function orderSummary()


{
    return "Sinu tellimus: " .
        $this -> nimetus.
        "<br>Burgeri liha on:" .$this ->liha.
        "<br>Burgeri sai on:" .$this ->sai.
        "<br>Burgeri lisand1 on:" .$this ->lisand1.
        "<br>Burgeri lisand2 on:" .$this ->lisand2.
        "<br>Burgeri lisand3 on:" .$this ->lisand3.
        "<br>Burgeri lisand4 on:" .$this ->lisand4

        ;
}
}

//teine
class TervislikBurger extends Burger
{
    public $sai="must";
    public $tervisklikLisand1 = "Avokaado";
    public $tervisklikLisand1Hind = "2.00";
    public $tervisklikLisand2 = "Muna";
    public $tervisklikLisand2Hind = "1.75";

    public function getBurgerPrice()
    {
        return
        $this ->hind+
        $this -> lisand1Hind+
        $this -> lisand2Hind+
        $this -> lisand3Hind+
        $this -> lisand4Hind;
        $this -> tervisklikLisand1Hind+
        $this -> tervisklikLisand2Hind;
    }
    public function orderSummary()
    {
        return "Sinu tellimus: " .
            $this -> nimetus.
            "<br>Burgeri liha on:" .$this ->liha.
            "<br>Burgeri sai on:" .$this ->sai.
            "<br>Burgeri lisand1 on:" .$this ->lisand1.
            "<br>Burgeri lisand2 on:" .$this ->lisand2.
            "<br>Burgeri lisand3 on:" .$this ->lisand3.
            "<br>Burgeri lisand4 on:" .$this ->lisand4.
            "<br>Burgeri tervislik lisand 1 on:" .$this ->tervisklikLisand1.
            "<br>Burgeri tervislik lisand 2  on:" .$this ->tervisklikLisand2

            ;
    }
}


//kolmas
class LuxBurger extends Burger
{}

$tavaBurger = new burger();
$tervislikBurger = new tervislikBurger();
$LuxBurger = new luxBurger();

$LuxBurger -> nimetus = "Tervislik burger";

$LuxBurger -> lisand1 = "Peekon";
$LuxBurger -> lisand1Hind = "3.00";
$LuxBurger -> lisand2 = "Kalamari";
$LuxBurger -> lisand2Hind = "5.00";
$LuxBurger -> lisand3 = "Seened";
$LuxBurger -> lisand3Hind = "2.50";
$LuxBurger -> lisand4 = "Paprika";
$LuxBurger -> lisand4Hind = "1.45";


echo "<h1> Tavaline burger</h1>";
echo $tavaBurger ->orderSummary();
echo '<br> Summa maksta: ' .$tavaBurger -> getBurgerPrice();

echo '<br><h1>Tervislik burger</h1>';
echo $tervislikBurger ->orderSummary();
echo '<br>Summa maksta: ' .$tervislikBurger ->getBurgerPrice();

echo '<br><h1>Lux burger</h1>';
echo $LuxBurger ->orderSummary();
echo '<br>Summa maksta: ' .$LuxBurger ->getBurgerPrice();



