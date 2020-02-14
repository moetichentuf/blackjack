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

$count=0;
$i=0;
$target=99;

while( $i!=$target ){
    $i=rand(1,100);
    $count++;
}
printf('it took %u attempts to reach %u',$count,$target);



$apple = new Blackjack();
$apple->set_hit('');
$apple->set_stand('0');
$apple->set_surrender('');
echo "<button type=\"button\" value=\"Start\" >Hit</button> " . $apple->get_hit();

echo "<br>";
echo "<button type=\"button\" value=\"Start\" >Stand</button>" . $apple->get_stand();
echo "<br>";
echo "<button type=\"button\" value=\"Start\" onclick=\"location.href='home.php'\" >Surrender</button>" . $apple->get_surrender();





