<?php
// KISS

/**
 * @param $day
 * @return string
 * @throws Exception
 */
function week($day) {

    switch ($day) {
        case 1:
            return "Понедельник";

            break;
        case 2:
            return "Вторник";

            break;
         case 3:
            return "Среда";

            break;
        default:
            throw new Exception("Error");
    }

}

function week2($day) {
    if($day < 1 || $day > 7) {
        throw new Exception("Error");
    }

    $days = [
        "Понедельник",
        "Вторник",
        "Среда",
    ];

    return $days[$day-1];
}


echo week(2);
echo week2(2);


//DRY
/*
$name =  "Ben";
$email =  "ben@gmail.com";
$user =  [$name, $email];

print_r($user);


$name =  "Ben";
$email =  "ben@gmail.com";
$user =  [$name, $email];

print_r($user);

function getUser($name, $email) {
    return [$name, $email];
}

print_r(getUser("Ben","ben@gmail.com"));
print_r(getUser("Ben","ben@gmail.com"));
print_r(getUser("Ben","ben@gmail.com"));
print_r(getUser("Ben","ben@gmail.com"));
print_r(getUser("Ben","ben@gmail.com"));
*/

///YAGNI
//You aint`t gonna need it





