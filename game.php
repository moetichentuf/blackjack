<?php
class Blackjack {
    // Properties
    public $hit;
    public $stand;
    public $surrender;


    // Methods
    function set_hit($hit) {
        $this->hit = $hit;

        $keepChecking = true;
        $values = 0;
        $values2 = 0;
        $values3 = 0;
        $valuestotal = 0;
        while($keepChecking){
            $values = rand(1, 11);
            $values2 = rand(1, 11);
            $values3 = rand(1, 11);
            $valuestotal = $values + $values2 + $values3;
            if ($valuestotal === 21){
                $keepChecking = false;

            }
        }
        echo $values;
        echo '<br>';
        echo $values2;
        echo '<br>';
        echo $values3;
        echo "<br>";
        echo $valuestotal;
        $number = 21;
        $numbers = array();
        $iteration = 0;
        while($number > 0 && $iteration < 5) {
            $sub_number = rand(1,$number);
            if (in_array($sub_number, $numbers)) {
                continue;
            }
            $iteration++;
            $number -= $sub_number;
            $numbers[] = $sub_number;
        }

        if ($number != 0) {
            $numbers[] = $number;
        }

        print_r($numbers);

    }
    function get_hit() {
        return $this->hit;
    }
    function set_stand($stand) {
        $this->stand = $stand;
    }
    function get_stand() {
        return $this->stand;
    }
    function set_surrender($surrender) {
        $this->surrender = $surrender;
    }
    function get_surrender() {
        return $this->surrender;
    }
}


$apple = new Blackjack();
$apple->set_hit('');
$apple->set_stand('0');
$apple->set_surrender('');
echo " 
<form method=\"post\" action=\"\">
<input type=\"Submit\" name=\"hit\" value=\"Submit\">
</form> " . $apple->get_hit();

echo "<br>";
echo "<button type=\"button\" value=\"Start\" >Stand</button>" . $apple->get_stand();
echo "<br>";
echo "<button type=\"button\" value=\"Start\" onclick=\"location.href='home.php'\" >Surrender</button>" . $apple->get_surrender();





