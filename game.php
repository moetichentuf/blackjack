<?php
class Blackjack {
    // Properties
    public $hit;
    public $stand;
    public $surrender;


    // Methods
    function set_hit($hit) {
        $this->hit = $hit;

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
$numbers = array();
$apple = new Blackjack();
$apple->set_hit('');
$apple->set_stand('0');
$apple->set_surrender('');
echo "<button type=\"button\" value=\"Start\" >Hit</button> " . $apple->get_hit();
function rand_num_generator() {
    return rand(1,11);
}

for($i=0;$i<4;$i++) {
    array_push($numbers, rand_num_generator());
}
print_r($numbers);
echo "<br>";
echo "<button type=\"button\" value=\"Start\" >Stand</button>" . $apple->get_stand();
echo "<br>";
echo "<button type=\"button\" value=\"Start\" onclick=\"location.href='home.php'\" >Surrender</button>" . $apple->get_surrender();





