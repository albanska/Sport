<?php

class Country {
    private string $Name;
    private array $Teams = [];

    public function __construct(string $Name) {
        $this->Name = $Name;
    }

    public function getName(): string {
        return $this->Name;
    }

    public function addTeam(Team $team) {
        $this->Teams[] = $team;
    }
}

?>
