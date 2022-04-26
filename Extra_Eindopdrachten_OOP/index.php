<?php
class taxibedrijf {
    public $start_time;
    public $end_time;
    public $day;
    public $distance;

    public $cost_km = 0.50;
    public $cost_min = 0.17;
    public $bonus = 1.15;

    function __construct($start_time, $end_time, $day, $distance){
        $this->start = $start_time;
        $this->end = $end_time;
        $this->day = $day;
        $this->distance = $distance;
    }

    function getInfo(){
        return
        "Kosten van gereden km: " . $this->distance * 0.50 . " euro <br>" .
        "Kosten van gereden min: " . ($this->end - $this->start) * 0.17 . " euro <br>";
    }    
    





}
$newCar = new taxibedrijf(1000, 1600, "Tuesday", 100);
echo $newCar->getInfo();





?>