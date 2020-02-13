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

$apple = new Blackjack();
$apple->set_hit('0');
$apple->set_stand('0');
$apple->set_surrender('');
echo "Hit: " . $apple->get_hit();
echo "<br>";
echo "Stand: " . $apple->get_stand();
echo "<br>";
echo "Surrender" . $apple->get_surrender();