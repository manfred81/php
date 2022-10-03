<?php

// $name = readline("Привет, как тебя зовут?\n");
// echo "Рад знакомству, $name\n";

// $age = readline("Сколько тебе лет?\n");

// echo "ВАС ЗОВУТ, $name, ВАМ $age ЛЕТ\n";

// $task1 = readline("Какая задача стоит перед вами сегодня?\n");
// $time1 = readline("Сколько примерно времени эта задача займет?\n");
// $task2 = readline("Еще что планируете?\n");
// $time2 = readline("Сколько примерно времени эта задача займет?\n");
// $task3 = readline("Еще что планируете?\n");
// $time3 = readline("Сколько примерно времени эта задача займет?\n");
// $sum = $time1 + $time2 + $time3;

// echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
// -$task1 ($time1 ч)\n
// -$task2 ($time2 ч)\n
// -$task3 ($time3 ч)\n";

// echo "Примерное время выполнения плана = $sum ч";


// do {
//     $quaere = readline("В каком году произошло крещение Руси?». Варианты: 810, 988 или 740 год\n");
//     switch ($quaere) {
//         case '988':
//             echo "Верно";
//             break (2);
//         case '810':
//         case '740':
//             echo "не верно";
//             break (2);
//     }
// } while (true);

// do {
//     $task1 = readline("количество задач, запланированных вами сегодня?\n");
// } while ($task1 <= 0);

// $out = "сегодня у вас запланировано $task1 задач ";
// $sum = 0;

// for ($i = 0; $i <= $task1; $i++) {
//     $task2 = readline("Еще что планируете?\n");
//     $time2 = readline("Сколько примерно времени эта задача займет?\n");
//     $out .= "- $task2 ({$time2}ч).\n";
//     $sum += $time2;
// }
// echo $out;
// echo "Всего займет $sum ч.";

// $arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $arr2 = range(1, 10);
// $result = [];

// for ($i = 0; $i < count($arr1); $i++) {
//     $result[] = $arr1[$i] * $arr2[$i];
// }
// print_r($result);




// $wishes = ['счастья', 'здоровья', 'удачи', 'счастья', 'радости'];
// $epithets = ['огромного', 'отличного', 'безграничного', 'крепчайщего', 'небывалого'];

// $name = readline('Имя именинника?');
// $wishesLimit = 3;
// $wishesChosen = [];
// for ($i = 1; $i <= $wishesLimit; $i++) {
//     $wishesChosen[] = $epithets[array_rand($epithets)] . " " . $wishes[array_rand($wishes)];
// }

// $lastWish = array_pop($wishesChosen);

// $congratulations = " <<Дорогой $name, поздравляю, и желаю тебе " . implode(', ', $wishesChosen) . " и " . $lastWish . ">>.";

// echo $congratulations;

// $mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
// $evenOddCheck = function (int $el): string {
//     return $el & 1 ? 'нечетное' : 'четное';
// };
// $evenOdd = array_map($evenOddCheck, $mas);

// print_r($evenOdd);



// $massiv = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
// $data = function (array $num): array {
//     return [
//         'max' => max($num),
//         'min' => min($num),
//         'acg' => array_sum($num) / count($num),

//     ];
// };
// print_r($data($massiv));
require_once "User.php";
require_once "Task.php";
require_once "Comment.php";
require_once "TaskService.php";

$user = new User('Юзер1', 'mail@mail.ru');
$task = new Task($user, 'Первая задача', 6);

TaskService::addComment($user, $task, 'Побыстрее');
TaskService::addComment($user, $task, 'Второй');

echo "Коменты" . PHP_EOL;

foreach ($task->getComments() as $comment) {
    echo $comment->getText() . ", ";
    echo "имя" . $comment->getTask()->getDescription() . PHP_EOL;
}
