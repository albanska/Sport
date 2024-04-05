<?php
class Player {

    protected string $nom;
    protected string $prenom;
    protected string $Country;
    protected DateTime $yeardebut;
    protected DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $yeardebut, string $Country, string $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->Country = $Country;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->yeardebut = new DateTime($yeardebut);
    }

    public function addContract(Contract $Contract) {
        $this->Contracts[] = $Contract;
    }

// Getters
public function getNom(): string {
    return $this->nom;
}

public function getPrenom(): string {
    return $this->prenom;
}

public function getCountry(): string {
    return $this->Country;
}

public function getyeardebut(): DateTime {
    return $this->yeardebut;
}

public function getDateNaissance(): DateTime {
    return $this->dateNaissance;
}

  // Setters
  public function setNom(string $nom): void {
    $this->nom = $nom;
}

public function setPrenom(string $prenom): void {
    $this->prenom = $prenom;
}

public function setCountry(string $Country): void {
    $this->Country = $Country;
}

public function setyeardebut(string $yeardebut): void {
    $this->yeardebut = new DateTime($yeardebut);
}

public function setDateNaissance(string $dateNaissance): void {
    $this->dateNaissance = new DateTime($dateNaissance);
}


public function getRole(){

    echo $this. '<br>';
    foreach ($this->Contracts as $Contract) {
        echo 'Position Playing: ' . $Contract->getRole()->getNomRole().'<br>';
    }
}

public function __toString() {
    return $this->getPrenom().' '. $this->getNom().'<br> Born Country: ' . $this->getCountry().' <br>Date of debut: ' . $this->getyeardebut()->format('Y-m-d'). '<br> Born Date:' . $this->getDateNaissance()->format('Y-m-d');
}

}

?>