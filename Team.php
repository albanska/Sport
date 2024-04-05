<?php

class Team {
    private string $Name;
    private DateTime $Dateofcreation;
    private Country $Country;
    private array $Contracts = [];
    public function __construct(string $Name, string $Dateofcreation, Country $Country) {
        $this->Name = $Name;
        $this->Dateofcreation = new DateTime($Dateofcreation);
        $this->Country = $Country;
        $Country->addTeam($this);
    }
    public function addContract(Contract $Contract) {
        $this->Contracts[] = $Contract;
    }

    public function getName(): string {
        return $this->Name ;
    }

    public function getDateofcreation(): DateTime {
        return $this->Dateofcreation;
    }

    public function getCountry(): Country {
        return $this->Country;
    }

    public function getPlayer() {
        foreach ($this->Contracts as $Contract) {
            echo 'Player of:'. $Contract->getPlayer()->getNom() . '<br> '  . $Contract->getPlayer()->getPrenom().'<br>' ;
        }
    }

    public function __toString() {
        return $this->Name;
    }
}

?>
