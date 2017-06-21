<!Doctype html>
    <html>
<meta charset="utf-8">
<title>Домашнее задание 1</title>
<h1>пункт 5</h1>
<?php
class A{
    public function foo(){
        static $x=0;
        echo ++$x;
    }
}
$a1=new A();
$a2=new A();
$a1->foo();//выведет на единицу больше 1
$a2->foo();// выведет на единицу больше, было 1 станет 2
$a1->foo();//выведет на единицу больше, было 2 станет 3
$a2->foo();//выведет на единицу больше, было 3 станет 4
?>

<h1>пункт6</h1>
<?php
class B extends A{
}
$a1=new A;
$b1=new B;
$a1->foo();//выведет на единицу больше, было 4 станет 5
$b1->foo();//наследование класса А и значение будет 1
$a1->foo();//выведет на единицу больше , было 5 станет 6
$b1->foo();//выведет на единицу больше, было 1 станет 2
?>

<h1>Пункт 1,2,3,4</h1>
<?php
class Products{
    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct($id, $name, $description, $price)
    {

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }


    function vew() {
        echo "<h1>$this->name</h1><p>$this->description</p><p>$this->price</p>";
    }
}
$a = new Products(1,'Носки', 'Носки из 100% хлопка', 200);
$a->vew();

class Products1 extends Products {

}
$b = new Products1(2,'Носки', 'носки из бамбука',300);
$b->vew();
?>
</html>