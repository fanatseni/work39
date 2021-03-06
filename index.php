<?php
abstract class Game{
	public $жизнь=100;
	public $раунд=1;
	abstract public function Урон();
	abstract public function Удар($v);	
	abstract public function ВыводУронаЖизни();
}

class Red extends Game
{
	public function Урон()
	{	
		return rand(23, 30);
	}
	public function Удар($v)
	{
		if($v->жизнь > 0)
		{
			$v->жизнь -= $this->Урон();
		}
		$v->ВыводУронаЖизни();		
	}
	public function ВыводУронаЖизни()
	{
		echo $this->жизнь;
	}	
}

class Blue extends Game
{
	public function Урон()
	{
		return rand(10, 40);
	}
	public function Удар($v)
	{
		if($v->жизнь > 0)
		{
			$v->жизнь -= $this->Урон();
		}	
		$v->ВыводУронаЖизни();
	}
	public function ВыводУронаЖизни()
	{
		echo $this->жизнь."<br>";
	}	
}

$red = new Red;
$blue = new Blue;

$red->ВыводУронаЖизни();
$red->Удар($blue);
$blue->Удар($red);

/*
class Red
{
	private $health;
	private $damage;
}
	function __construct($helth, $damage)
	{
		$this->health = $health;
		$this->damage = $damage;
	}
	public function getHealth()
	{
		return $this->health;
	}
	public function setHealth($health)
	{
		$this->health = $health;
	}
	public function getDamage()
	{
		return $this->damage;
	}
	public function setDamage($damage)
	{
		$this->damage = $damage;
	}
$obj = new Red();
$obj->setHealth(100);

echo "{$obj->getName()}  {$obj->getAge()} лет {$obj->getSalary()} рублей {$obj->getLangs()}";
echo "<br>";
$obj->Show();
echo "<br>";
echo $obj->name;






*class Employee
{
	protected $name;
	private $age;
	private $salary; // поле зарплата
	function __construct($name, $age, $salary){
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
	// Геттер зарплаты
	public function getSalary()
	{
		return $this->salary;
	}
	// Сеттер зарплаты
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function setAge($age)
	{
		$this->age = $age;
	}
}
class Programmer extends Employee{
	private $langs=array(); //private $langs=[];
	
	function __construct($name, $age, $salary,array $langs){
		parent::__construct($name, $age, $salary);
		$this->langs = $langs;
	}
	public function getLangs()
	{
		foreach($this->langs as $value){
			$str .= "$value ";
		}
		return $str;
	}
	public function setLangs(array $_langs)
	{
		$this->langs = $_langs;
	}
	function Show(){
		echo "<b>Имя:{$this->name}<br>
			  Возраст: {$this->getAge()} лет<br>
			  Зарплата: {$this->getSalary()} рублей<br>
			  Языки программирования: {$this->getLangs()}</b>";
	}
}
$obj = new Programmer("Александр",19,60000,array("C#", "PHP", "Pascal"));
//$obj->setName("Александр");
//$obj->setAge(19);
//$obj->setSalary(60000);
//$obj->setLangs(array("C#", "PHP", "Pascal"));

echo "{$obj->getName()}  {$obj->getAge()} лет {$obj->getSalary()} рублей {$obj->getLangs()}";
echo "<br>";
$obj->Show();
echo "<br>";
echo $obj->name;

*/