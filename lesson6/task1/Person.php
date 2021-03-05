<?php

class Person implements Observer
{
    public $name;
    public $email;
    public $experience;
    public $noticeStatus = false;

    public function __construct($name, $email, $experience, $noticeStatus)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
        $this->noticeStatus = $noticeStatus;

        Vacancy::getInstance()->addObserver($this);
    }

    public function notice($data)
    {
        $message = $this->name . ", По вашей подписке появилась новая вакансия $data" . PHP_EOL;

        if ($this->noticeStatus == true) {

            mail($this->email,
                'Появилась новая вакансия',
                $message);

            echo $message;
        }

    }

}