<?php

function dd($datas) {
    echo("<br>");
    echo("<pre>");
    echo("<code>");
    var_dump($datas);
    echo("</code>");
    echo("</pre>");
}

class Square {
    // variable ==> attribut
    public $width;
    public $sides;
    public $perimeter;
    public $area;

    public function __construct($width, $sides = 4, $calculate = true)
    {
        $this->width = $width;
        $this->sides = $sides;
        if($calculate) {
            $this->perimeter = $this->perimeter();
            $this->area = $this->area();
        }
    }

    // fonction ==> méthode
    public function area_carre() {
        return $this->width * $this->width;
    }

    public function perimeter() {
        return $this->width * $this->sides;
    }

    public function area()
    {
        return $this->width * 2;
    }

}

// $c = new Square(3);
// dd($c);

class Rectangle extends Square {

    public $height;
    
    public function __construct($width, $height, $sides = 4)
    {
        parent::__construct($width, $sides, false);
        $this->height = $height;
        $this->perimeter = $this->perimeter();
        $this->area = $this->area();
    }
    
    public function area()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}

// $r = new Rectangle(2, 5);
// dd($r);

// public / protégé / privé ===> visibilité

class A {
    public $public = 1;
    protected $protected = 2;
    private $private = 3;
}

$a = new A();
dd($a);

// dd($a->public); ===> OK
// dd($a->protected); ===> KO
// dd($a->private); ===> KO

class B extends A {
    public function __construct(){
        dd($this->public);
        dd($this->protected);
        dd($this->private);
    }
}






$b = new B();
dd($b);








