<?php
class fortnite{
    public $CityName;
    public $LootType;
    public $Description;


    function __construct(string $CityName, string $LootType, string $Description)
    {
        $this->CityName = $CityName;
        $this->LootType = $LootType;
        $this->Description = $Description;
    }
    function getTownName() {
        ( $var= "dit is " . $this->CityName . "<br>"
            . " " . " " . $this->Description . "<br>en dit is de Lootype die je daar kan krijgen: " . $this->LootType );
        return $var;
    }

}


?>