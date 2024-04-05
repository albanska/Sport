<?php

class Contract {
    private Player $Player;
    private Team $Team;
    private Role $role;

    public function __construct(Player $Player, Role $role, Team $Team) {
        $this->Player = $Player;
        $this->role = $role;
        $this->Team = $Team;
        $Player->addContract($this);
        $role->addContract($this);
        $Team->addContract($this);
    }

    //getter
    public function getPlayer(){
        return $this->Player;
    }
    public function getrole(){
        return $this->role;
    }
    public function getTeam(){
        return $this->Team;
    }

    //setter

    public function setPlayer($Player): void {
        $this->Player = $Player;
    }
    public function setTeam($Team): void {
        $this->Team = $Team;
    }
    public function setRole($Role): void {
        $this->Role = $Role;
    }
}

?>




