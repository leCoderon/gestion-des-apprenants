
<?php
class User{

    public string $id;
    public string $name;
    public string $email;
    public string $password;
}

function createUser($email, $password)
{

    if (require("src/lib/database.php")) {

        $statement = $db->prepare("INSERT INTO users
         (email, password) VALUES (?, ?)");

        $affectedLines =  $statement->execute(
            [$email, $password]
        );

        return ($affectedLines > 0);
    }
}


function getUser($email)
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("SELECT * FROM users WHERE email = ?");
        $affectedLines = $statement->execute([$email]);

        if($affectedLines > 0){
            $data = $statement->fetch();

            return $data;
        }else{
            return false;
        }
    }
}


