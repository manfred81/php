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

$quaere = readline("В каком году произошло крещение Руси?». Варианты: 810, 988 или 740 год\n");
$variant1 = '810';
$variant2 = '988';
$variant3 = '740';

while ($quaere !== $variant2) {
    $quaere = readline("В каком году произошло крещение Руси?». Варианты: 810, 988 или 740 год\n");
    if ($quaere == $variant1) {
        echo "не верно\n";
    }
    if ($quaere == $variant3) {
        echo "не верно\n";
    }
}
echo "Верно";
