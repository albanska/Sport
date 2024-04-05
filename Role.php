<?php

class Role {
    private string $nomRole;
    private array $Contracts =[];
    
    
    public function __construct(string $nomRole) {
        $this->nomRole = $nomRole;
        
    }
    
    public function getNomRole() {
        return $this->nomRole;
    }


    public function addContract(Contract $Contract)
    {
        $this->Contracts[] = $Contract;
    }
    public function __toString()
    {
        return $this->getNomRole();
    }
  
}

?>
