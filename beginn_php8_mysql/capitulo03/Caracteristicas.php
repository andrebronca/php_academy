<?php

//característica
trait userFunctions {
    public function message1() {
        echo "user message1 <br>";
    }
}

class UserClass {
    use userFunctions;
}

class UserClass2 {
    use userFunctions;
}

$user = new UserClass();
$user2 = new UserClass2();

$user->message1();
$user2->message1();

