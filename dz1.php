<?
//Задание 1-4
//Создаём базовую сущность интернет магазина
class Master {
    public $name;//У любой сущности должно быть имя
    //Создаём конструктор который присваивает имя сущности
    public function __construct ($name) {
        $this->name = $name;
    }
    // Создаём общий для всеч метод переименования сущности
    public function rename ($newName) {
        $this->name = $newName;
    } 
    //Создаём общий для всех метод вывода имени сущности на экран
    public function viewName () {
        echo 'Name '.$this->name.'<br>';
    }
}
//пробуем, создаём сущность (предположительно user) с именем "Alex"
$a = new Master ("Alex");
// Задаём имя если нет конструктора
//$a->name = "Alex";
//Выводим имя на экран
$a->viewName();
//Переименовываем
$a->rename("Nik");
//Опять выводим имя на экран
$a->viewName();
//Создаём сущность наследник - товар
class Product extends Master {
    //Создаём ей дополнительные поля: "Цена", "Краткое описание", "Описание"
    var $price;
    var $laconic;
    var $description;
   
    //Создаём конструктор который присваивает Наименование товару и Цену и прочие поля
    function __construct ($name, $price, $laconic, $description) {
        //Для задания наименования используем родительский конструктор
        parent:: __construct ($name);
        //Цену задаём по месту
        $this->price = $price;
        $this->laconic = $laconic;
        $this->description = $description;
    }
    //Создаём метод вывода Цены
    public function viewPrice () {
        echo ' Price '.$this->price.'<br>';
    }
    //Создаём метод вывода Краткого описания
    public function viewLaconic () {
        echo ' Laconic '.$this->laconic.'<br>';
    }
    //Создаём метод вывода Описания
    public function viewDescription () {
        echo ' Description '.$this->description.'<br>';
    }
}
//Создаём экземпляр класса Товар
$compLaconic = 'brief description of goods computer';
$compDescription = 'full description of goods computer';
$b = new Product ("Comp", 500, $compLaconic, $compDescription);
//Выводим имя на экран
$b->viewName();
//Выводим цену на экран
$b->viewPrice();
//Выводим краткое описание на экран
$b->viewLaconic();
//Выводим полное описание на экран
$b->viewDescription();
//Переименовываем
$b->rename("Comp 555");
//Опять выводим имя на экран
$b->viewName();

//Создаём сущность наследник - Пользователь
class User extends Master {
    //Создаём ей дополнительное поле: "Пароль"
    var $password;
    //Создаём конструктор который присваивает Имя пользователя и Пароль
    function __construct ($name, $password) {
        //Для задания наименования используем родительский конструктор
        parent:: __construct ($name);
        //Цену задаём по месту
        $this->password = $password;
    }
    //Создаём метод вывода Пароля
    public function viewPassword () {
        echo ' Password '.$this->password.'<br>';
    }
}
//Создаём экземпляр класса Пользователь
$b = new User ("Nik", 12345);
//Выводим имя на экран
$b->viewName();
//Выводим цену на экран
$b->viewPassword();
//Переименовываем
$b->rename("Alex");
//Опять выводим имя на экран
$b->viewName();

//Задание 5
/*class A {
public function foo (){
static $x = 0;
echo ++ $x.'<br>';
}
}
$a1 = new A ();
$a2 = new A ();


$a1 -> foo ();
$a2 -> foo ();
$a1 -> foo ();
$a2 -> foo ();*/

//Задание 6-7
/*class A {
    public function foo (){
        static $x = 0;
    echo ++ $x.'<hr>';
    }
}
class B extends A {
}
    
$a1 = new A ();
$b1 = new B ();

$a1 -> foo ();
$b1 -> foo ();
$a1 -> foo ();
$b1 -> foo ();
$a1 -> foo ();
$b1 -> foo ();
*/