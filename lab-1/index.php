<?php
session_start();

$password = $_POST["password"];
$login = $_POST["login"];
$user_data = $login ." ". $password;
//echo "$user_data";

class  User
{
    public $name;
    public $surname;
    public $role;
    public $pass;
    public $log;


}

class Admin extends User
{
    function  __construct()
    {
        $this->pass = "ashosav35";
        $this->log = "Admin";
        $this->role = "Админ";
        $this->name = "Ада";
        $this->surname = "Байрон";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }
//Здравствуйте админ Ада Байрон. Вы можете на сайте делать всё
}


class Client extends User
{
    function  __construct()
    {
        $this->pass = "259784";
        $this->log = "Cldld1542";
        $this->role = "Клиент";
        $this->name = "Афанасий ";
        $this->surname = "Авдотьев";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }
//Здравствуйте клиент Афанасий Авдотьев. Вы можете на сайте просматривать информацию 
}


class Manager extends User
{
    function  __construct()
    {
        $this->pass = "asdx";
        $this->log = "manager";
        $this->role = "менеджер";
        $this->name = "даша ";
        $this->surname = "лазаренко";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Добрый день Дар'я.Вы можете на сайте изменять, удалять и создавать клиентов";
    }
}

if ($login == "Adminchik228" and $password == "ashosav35") {
    $adm = new Admin();
    $adm -> printInfo();
}
elseif ($login == "Clientik1488" and $password == "259784") {
    $cli = new Client();
    $cli -> printInfo();
}
elseif ($login == "Manageer1337" and $password == "asdx") {
    $man = new Manager();
    $man -> printInfo();
}else {
    echo " Логин или пароль неверные ";
}


?>


<p><a href="index.php">Главная</a></p>
</hr>
Это страница авторизации.
</br>

<form  method="post">
   Username: <input type="text" name="login" ><br/>
   Password: <input type="password"  /><br/>

<input type="submit" name="submit" value="Войти"  />
</form>