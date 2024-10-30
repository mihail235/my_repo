<?php
$number = intval(readline("Введите цифру от 1 до 5: "));
switch ($number) {
    case 1:
        echo "Вы ввели единицу!\n";
        break;
    case 2:
        echo "Вы ввели двойку.\n";
        break;
    case 3:
        echo "Вы ввели тройку.\n";
        break;
    case 4:
        echo "Вы ввели четверку.\n";
        break;
    case 5:
        echo "Вы ввели пятерку.\n";
        break;
    default:
        echo "дебил\n";
}
?>