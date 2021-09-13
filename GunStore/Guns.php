<?php declare(strict_types=1);

class Guns
{


    private string $name;
    private string $type;
    private string $license;

    public function __construct(string $name, string $type, string $license )
{


    $this->name = $name;
    $this->type = $type;
    $this->license = $license;
}

    public function getName(): string
    {
        return $this->name;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }


    public function getType(): string
    {
        return $this->type;
    }
    public function getLicense(): string
    {
        return $this->license;
    }
}
