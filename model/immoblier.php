<?
class immobiler{
    protected $reference,$proprietaire,$localite,$NbPiece,$domainUsage;

}
class appartement extends immobiler{
    private $SurfaceEspaceCommun;
    public function getRefrence(){
        return $this->reference;
    }
    public function getProprietaire(){
        return $this->proprietaire;
    }
    public function getLocalite(){
        return $this->localite;
    }
    
    public function getNbPiece(){
        return $this->NbPiece;
    }
    public function getDomainUsage(){
        return $this->domainUsage;
    }
    public function getSurfaceEspaceCommun(){
        return $this->SurfaceEspaceCommun;
    }


}