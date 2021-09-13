<?php
class GunsStoreMain
{
    protected GunsStore $gunsStore;

    public function __construct(GunsStore $gunsStore)
{

    $this->gunsStore = $gunsStore;
}

    public function gunsInStore():void
{
    foreach ($this->gunsStore as $key => $gun) {
        echo "ID: $key | Name: {$gun->getGun()->getName()} | Type: {$gun->getGun()->getType()} |  | Price: {$gun->getGun()}$" . PHP_EOL;
    }
}



    public function main(): void
{
    while (true) {
        echo "Gun Store" . PHP_EOL;
        echo "1 Buy a GUN" . PHP_EOL;
        echo "2 Exit" . PHP_EOL;


        $input = (int)readline("Enter your choice: ");

        switch ($input) {
            case 1:
                $this->gunsStore->buyGun();
                exit;
            case 2:
                exit;
            default:
                echo "Invalid selection!!!" . PHP_EOL;
                break;
        }
    }
}

}
