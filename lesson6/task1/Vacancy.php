<?php


class Vacancy
{
    private static $instance = null;
    private $observeres;
    private $vacancy;


    public static function getInstance(): ?Vacancy
    {
        if(self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function addObserver(Observer $observer)
    {
        $this->observeres[] = $observer;
    }


    public function getVacancy()
    {
        return $this->vacancy;
    }


    public function setVacancy($vacancy): void
    {
        $this->vacancy = $vacancy;
        $this->noticeObservers();
    }

    public function noticeObservers()
    {
        foreach ($this->observeres as $observer){
            $observer->notice($this->vacancy);
        }
    }


}