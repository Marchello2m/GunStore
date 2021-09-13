<?php declare(strict_types=1);
class GunList


{
    private Guns $guns;
    private int $price;


    public function __construct(Guns $guns, int $price)
    {

        $this->guns = $guns;
        $this->price = $price;
    }
    public function getGuns(): Guns
    {
        return $this->guns;
    }
    public function getPrice(): int
    {
        return $this->price;
    }


}