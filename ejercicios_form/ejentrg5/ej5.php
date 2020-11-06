<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";

$email = trim($_REQUEST["email"]);

$email2 = trim($_REQUEST["email2"]);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($email == $email2) {
        print"iguales";
    } else {
        print"no iguales";
    }
    print"es correcto";
}else {
        print "no es correcto";
    }

$spam = trim ($_REQUEST["spam"]);

if($spam == ""){
print"spam no introducido";
}else{
    print "<p> spam:$_REQUEST[spam]";
}

    



?>