<?php declare(strict_types=1);

class GunsStore
{


 protected array $guns=[];
   protected $gunsStore;


    public function __construct(array $guns)
    {

        $this->guns = $guns;
    }

    public function buyGun(): void
    {
        $selection = (int)readline("Enter guns  ID that you want to buy: ");
        if (isset($this->guns[$selection])) {
            $guns = $this->guns[$selection];
            echo "You bought {$guns->getGun()->getName()} {$guns->getGun()->getType()} for {$guns->getPrice()}$" . PHP_EOL;

        }
    }



}

