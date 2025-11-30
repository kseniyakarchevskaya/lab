<?php
class MoneyTask
{
    public $nominal;
    public $count;
    public function __construct($n, $c)
    {
        $this->nominal = $n;
        $this->count = $c;
    }
    public function info()
    {
        return "Номинал: " . $this->nominal . ", Количество: " . $this->count;
    }
    public function process()
    {
        $sum = $this->nominal * $this->count;
        return "Сумма купюр = " . $sum;
    }
}
class DateObj
{
    public $day;
    public $month;
    public $year;
    public function __construct()
    {
        $args = func_get_args();

        if (count($args) == 3) {
            $this->day   = $args[0];
            $this->month = $args[1];
            $this->year  = $args[2];
        } else {
            $this->day   = 1;
            $this->month = 1;
            $this->year  = 2000;
        }
    }
    public function __destruct()
    {
        echo "Объект DateObj уничтожен<br>";
    }
    public function isLeap()
    {
        if ($this->year % 4 == 0) {
            return "Год является високосным";
        } else {
            return "Год не является високосным";
        }
    }
    public function addFiveDays()
    {
        $day = $this->day + 5;
        $month = $this->month;
        $year = $this->year;

        $daysInMonth = array(
            1 => 31, 2 => 28, 3 => 31, 4 => 30,
            5 => 31, 6 => 30, 7 => 31, 8 => 31,
            9 => 30, 10 => 31, 11 => 30, 12 => 31
        );
        if ($this->year % 4 == 0) {
            $daysInMonth[2] = 29;
        }
        if ($day > $daysInMonth[$month]) {
            $day = $day - $daysInMonth[$month];
            $month++;
            if ($month > 12) {
                $month = 1;
                $year++;
            }
        }
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;

        return "Дата увеличена на 5 дней";
    }
    public function info()
    {
        return "Дата: " . $this->day . "." . $this->month . "." . $this->year;
    }
}
class ComputerBase
{
    public $cpu;
    public $freq;
    public $ram;
    public function __construct($cpu, $freq, $ram)
    {
        $this->cpu  = $cpu;
        $this->freq = $freq;
        $this->ram  = $ram;
    }
    public function quality()
    {
        $Q = (0.1 * $this->freq) + $this->ram;
        return $Q;
    }
    public function info()
    {
        return "Компьютер: процессор = " . $this->cpu .
            ", частота = " . $this->freq .
            " МГц, память = " . $this->ram . " Мб";
    }
}
class ComputerPro extends ComputerBase
{
    public $P;
    public function __construct($cpu, $freq, $ram, $P)
    {
        parent::__construct($cpu, $freq, $ram);
        $this->P = $P;
    }
    public function quality()
    {
        $Q  = parent::quality();
        $Qp = $Q + (0.5 * $this->P);
        return $Qp;
    }
    public function info()
    {
        return parent::info() . ", HDD = " . $this->P . " Гб";
    }
}



echo "<b>Купюры</b><br>";
$task = new MoneyTask(10, 5);
echo $task->info() . "<br>";
echo $task->process() . "<br><br>";
echo "<b>Дата</b><br>";

$date = new DateObj(27, 2, 2024);

echo $date->info() . "<br>";
echo $date->isLeap() . "<br>";
echo $date->addFiveDays() . "<br>";
echo $date->info() . "<br><br>";


echo "<b>Компьютер</b><br>";

$base = new ComputerBase("Intel Core i3", 3200, 4096);
echo $base->info() . "<br>";
echo "Качество Q = " . $base->quality() . "<br><br>";

$pro = new ComputerPro("Intel Core i5", 3600, 8192, 500);
echo $pro->info() . "<br>";
echo "Качество Qp = " . $pro->quality() . "<br>";

?>
