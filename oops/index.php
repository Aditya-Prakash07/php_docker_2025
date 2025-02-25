<?php 
class Player{
    public $name;
    public $speed = 500;
    public $running = false;
    function set_name($name){
        $this->name = $name;
    }
    function set_speed( $speed ){
        $this->speed = $speed;
    }
    function get_name(){
        return $this->name;
    }
    function get_speed(){
        return $this->speed;
    }
    function run( ){
        $this->running = true;
    }
    function stop(){
        $this->running = false;
    }

}
echo"Lets understand opps with gta";
$player1 = new Player();
$player1->set_name("Aditya");
echo $player1->get_name();
echo var_dump($player1->run());



?>