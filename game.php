<?php
class Blackjack {
    // Properties
    public $hit;
    public $stand;
    public $surrender;


    // Methods
    function set_hit($hit) {
        $this->hit = $hit;

        $number = 21;
        $numbers = array();
        $iteration = 0;
        while($number > 0 && $iteration < 2) {
            $sub_number = rand(1,$number);
            if (in_array($sub_number, $numbers)) {
                continue;
            }
            $iteration++;
            $number -= $sub_number;
            $numbers[] = $sub_number;
        }

        if ($number < 11) {
            $numbers[] = $number;
        }

        echo $numbers[0]+= $numbers[1];

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





