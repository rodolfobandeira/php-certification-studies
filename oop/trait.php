<?php 
trait RoadVehicle { 
    public function goWhere(){ 
        echo "Driving down the road"; 
    } 
}   
class VehicleA { 
    use RoadVehicle; 
    public function goWhat() { 
        echo "In my automobile"; 
    } 
} 
class VehicleB { 
    use RoadVehicle; 
        public function goWhat() { 
            echo "In my motorcycle"; 
        } 
} 

$vehicle = new VehicleA(); 
$vehicle->goWhere(); 
$vehicle->goWhat(); 


