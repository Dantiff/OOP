<?php
namespace sharerides;
class Ride
{
    private $_rideNO;
    private $_depatureTime;
    private $_origin;
    private $_dest;
    private $_seats;
    private $_car;

    //each instantiated object will have these properties unless changed
    public function __construct($departureTime, $origin, $dest, $seats, $car)
    {
        $this->_rideNO = $rideNO;
        $this->_depatureTime = $depatureTime;
        $this->_origin = $origin;
        $this->_dest = $dest;
        $this->_seats = $seats;
        $this->_car = $car;

    }


    //the method for giving rides
    public function giveRide($newDepature, $newOrigin, $newDest, $newSeats, $newCar)
    {
        ++$this->_rideNO;
        $this->_depatureTime = $newDepature;
        $this->_origin = $newOrigin;
        $this->_dest = $newDest;
        $this->_seats = $newSeats;
        $this->_car = $newCar;
    }

    //the method for getting rides
    public function getRide()
    {


    }


}

//Create a new ride
$firstRide = new Ride ("", "1.00PM", "Cytonn", "Thika", 4, "BMW");
$secondRide = new Ride ("", "11.00PM", "Cytonn", "Thika", 2, "Nissan");



?>
