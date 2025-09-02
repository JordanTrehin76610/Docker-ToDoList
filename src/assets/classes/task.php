<?php 

class task {

    private string $title;
    private bool $isDone;

    public function __construct(string $title, bool $isDone) { //Au tout début, sert à définir un nouvelle objet
        $this->setTitle($title);
        $this->setIsDone($isDone);
    }


    // SETTER
    public function setTitle(string $title) { //Setter pour modifier la propriété privée
        $this->title = $title;
    }

    public function setIsDone(bool $isDone) { //Setter pour modifier la propriété privée
        $this->isDone = false;
    }



    // GETTER
    public function getTitle() { //Setter pour modifier la propriété privée
        return $this->title;
    }

    public function getIsDone() { //Setter pour modifier la propriété privée
        return $this->isDone;
    }


    //Action
    public function toggle() {
        if ($this->isDone == false) {
            $this->isDone = true;
        } else {
            $this->isDone = false;
        }
    }

    public function __toString() {
            return $this->title;
    }

}


?>