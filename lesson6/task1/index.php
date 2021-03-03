<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$resume1 = new Person('Alexey','alexey@mail.ru', 10, true);
$resume2 = new Person('Ivan', 'ivan@mail.ru', 5, true);


Vacancy::getInstance()->setVacancy('Разработчик');

