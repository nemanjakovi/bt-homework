 <?php

    if (isset($_GET["submit"])) {

        $name = $_GET["name"];
        $lastName = $_GET["last_name"];
        $gender = $_GET["gender"];
        $email = $_GET["email"];
        $password = $_GET["password"];
        $retypePassword = $_GET["r_password"];
        $courses = $_GET["courses"];

        if (
            empty($name) ||  empty($lastName)
            || empty($gender) ||  empty($email)
            || empty($password) ||  empty($retypePassword)
            ||  empty($gender) || empty($courses)
        ) {
            header("Location:register.html?You must fill all fildes");
            exit();
        }

        if ($password != $retypePassword) {
            header("Location:register.html?Password dose not match");
            exit();
        }


        if ($gender == "male") {
            $yourGender = "Poštovani ";
        } else if ($gender == "female")
            $yourGender = "Poštovana";

        echo $yourGender . " " . $name .  " " . $lastName . " <br>Uspesno ste se registrovali na nasem sajtu. <br>";
        echo  "Vasa lozinka je: " . $password . "<br> Vas username je: " . $email . "<br>";
        echo  "Vasi odabrani kursevi su: <br>";

        foreach ($courses as $course) {
            echo $course . " <br>";
        }
    }
