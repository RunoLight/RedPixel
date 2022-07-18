<?php
    $mysql = new mysqli('localhost','root','root','redpixel');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $about = $_POST["about"];

    $mysql->query("insert into feedback (name, email, phone, description) values (\"$name\", \"$email\", \"$phone\", \"$about\")");

    $feedback = $mysql->query("select count(*) as c from feedback where email like \"%$email%\" and phone like \"%$phone%\"")->fetch_assoc();
    if ($feedback["c"] > 0) {
        echo 'true';
    }
    else {
        echo "insert into feedback (name, email, phone, description) values (\"$name\", \"$email\", \"$phone\", \"$about\")";
    }
?>