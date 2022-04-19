<?php
require_once "vendor/autoload.php";
use App\Classes\LoginRegister;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'login')
    {
        include "pages/login.php";
    }
    elseif ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }

    elseif ($_GET['page'] == 'register')
    {
        include "pages/register.php";
    }

    elseif ($_GET['page'] == 'logout')
    {
        session_start();
        if (session_destroy())
        {
            include "pages/login.php";
        }
    }
}
elseif (isset($_POST['logBtn']))
{
    $pass = $_POST['pass'];
    $db_name = "mysql:host=localhost; dbname=wpdeveloper";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);
    $sql = $conn->query("SELECT password, email FROM students");



    while ($row =$sql->fetch())
    {

        if ($row['password'] == $_POST['pass'] && $row['email'] == $_POST['email'])
        {
            $_SESSION['pass'] = $row['password'];
            include "pages/home.php";
            break;
        }

    }
    if ($row['password'] !== $_POST['pass'])
    {
        echo "Invalid Email or Password";
    }
}

elseif (isset($_POST['regBtn']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $db_name = "mysql:host=localhost; dbname=wpdeveloper";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);

    $sql = "INSERT INTO students (name,email, password) values (:name,:email,:password)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email'=> $email, 'password'=>$pass, 'name'=>$name]);

    include 'pages/login.php';
}

?>
