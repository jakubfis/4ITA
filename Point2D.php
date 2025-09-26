<?php
class Point2D
{
    private float $x;
    private float $y;

    public function __construct()
    {
        $this->setPosition(x: 0, y: 0);
    }

    public function setX(float $value): self
    {
        //Způsob na více řádků

        // if ($value < 0) {
        //     $value = 0;
        // } elseif ($value > 800) {
        //     $value = 800;
        // }
        // $this->x = $value;

        //Způsob na 1 řádek
        $this->x = ($value < 0 ? 0 : ($value > 800 ? 800 : $value));

        return $this;
    }

    public function setY(float $value): self
    {
        if ($value < 0) {
            $value = 0;
        } elseif ($value > 600) {
            $value = 600;
        }
        $this->y = $value;
        return $this;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setPosition(float $x, float $y): self
    {
        return $this->setX(value: $x)->setY(value: $y);
    }

    public function getDistance(Point2D $otherPoint): float
    {
        $dx = $this->x - $otherPoint->x;
        $dy = $this->y - $otherPoint->y;
        return ($dx ** 2 + $dy ** 2) ** 0.5;
    }
}