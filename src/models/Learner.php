<?php
class Learner
{
    public string $id;
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $phone;
    public string $city;
    public string $paid;
}

function getLearners():array
{
    if (require("src/lib/database.php")) {
        $results = $db->query("SELECT * FROM learners ORDER BY id DESC");

        if ($results->rowCount() > 0) {
            $learners = [];

            while ($row = $results->fetch()) {
                $learner = new Learner();

                $learner->id = $row["id"];
                $learner->firstname = $row["firstname"];
                $learner->lastname = $row["lastname"];
                $learner->email = $row["email"];
                $learner->city = $row["city"];
                $learner->phone = $row["phone"];
                $learner->paid = $row["paid"];

                $learners[] = $learner;
            }

            return $learners;
        }
        return [];
    }
}

function storeLearner($firstname, $lastname, $email, $phone, $city, $paid): bool
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("INSERT INTO learners (firstname, lastname, email, phone, city, paid) 
        VALUES (?, ?, ?, ?, ?, ?)");
        $affectedLines = $statement->execute([$firstname, $lastname, $email, $phone, $city, $paid]);
        return ($affectedLines > 0);
    }
}

function updateLearner($firstname, $lastname, $email, $phone, $city, $paid, $id): bool
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("UPDATE learners SET firstname = ?, lastname = ?, email =?,
         phone=?, city=?, paid=? WHERE id = ? 
       ");
        $affectedLines = $statement->execute([$firstname, $lastname, $email, $phone, $city, $paid, $id]);
        return ($affectedLines > 0);
    }
}

function showLearner($id)
{
    if (require('src/lib/database.php')) {
        $statement = $db->prepare("SELECT * FROM learners WHERE id = ?");
        $statement->execute([$id]);
        $learner = new Learner();
        $row = $statement->fetch();
        $learner->id = $row['id'];
        $learner->firstname = $row['firstname'];
        $learner->lastname = $row['lastname'];
        $learner->email = $row['email'];
        $learner->phone = $row['phone'];
        $learner->city = $row['city'];
        $learner->paid = $row['paid'];
        return $learner;
    }
}

function deleteLearner($id): bool
{
    if (require("src/lib/database.php")) {
        $statement = $db->prepare("DELETE  FROM learners WHERE id = ?"); //Request
        $affectedLines =  $statement->execute([$id]);

        return ($affectedLines > 0);
    }
}

// var_dump(getLearners());
