<?php
class projectile_distance {
    public $vel;
    public $theta;
    public $g;

    function __construct(int $vel, int $theta, float $g) {
        $this->vel = $vel;
        $this->theta = $theta;
        $this->g = $g;
    }
    function get_velocity() {
        return $this->vel;
    }
    function get_theta() {
        return $this->theta;
    }
    function get_g() {
        return $this->g;
    }
}

$distance = new projectile_distance(100, 45, 9.8);
echo "vel = " . $distance->get_velocity();
echo "<br>";
echo "angle = " . $distance->get_theta();
echo "<br>";
echo "value of g taken = " . $distance->get_g();
echo "<br>";
$dist = ((($distance->get_velocity())**2)*(sin(($distance->get_theta())*2)))/($distance->get_g());
echo "The range of the projectile is $dist meters";
?>