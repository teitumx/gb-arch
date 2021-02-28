<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$resume1 = new Person('Alexey','kirik241@ya.ru', true);


Vacancy::getInstance()->setVacancy('Разработчик');
