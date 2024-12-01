<?
class crudAppartement{
    private  $connexion;
    public function __construct()
    {
        $config=new config();
        $this->connexion=$config->getConfig();
    }
    public function AjouterApp(appartement $a){
        $r=$a->getRefrence();
        $p=$a->getProprietaire();
        $l=$a->getLocalite();
        $n=$a->getNbPiece();
        $d=$a->getDomainUsage();
        $s=$a->getSurfaceEspaceCommun();
        $sql="INSERT INTO immoblier (reference, proprietaire, localite,nbPiece,domaineUsage,surfaceCommune)
        VALUES ($r, '$p', '$l', $n, '$d',$s)";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    public function RecupererApp($ref){
        $sql="SELECT * from immoblier where reference=$ref";
        $res=$this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function ModifierApp(appartement $a){
        $r=$a->getRefrence();
        $p=$a->getProprietaire();
        $l=$a->getLocalite();
        $n=$a->getNbPiece();
        $d=$a->getDomainUsage();
        $s=$a->getSurfaceEspaceCommun();
        $sql = "UPDATE immoblier 
SET proprietaire='$p', localite='$l', nbPiece=$n, domaineUsage='$d', surfaceCommune=$s 
WHERE reference=$r";

        $res=$this->connexion->exec($sql);
        return $res;

    }
    public function SupprimerApp($ref){
        $sql="DELETE from immoblier where reference=$ref";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    public function ListerApp(){
        $sql="SELECT * from immoblier";
        $res=$this->connexion->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
class crudVilla{
    private  $connexion;
    public function __construct()
    {
        $config=new config();
        $this->connexion=$config->getConfig();
    }
    public function AjouterApp(appartement $a){
        $r=$a->getRefrence();
        $p=$a->getProprietaire();
        $l=$a->getLocalite();
        $n=$a->getNbPiece();
        $d=$a->getDomainUsage();
        $s=$a->getSurfaceEspaceCommun();
        $sql="INSERT INTO immoblier (reference, proprietaire, localite,nbPiece,domaineUsage,surfaceCommune)
        VALUES ($r, '$p', '$l', $n, '$d',$s)";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    public function RecupererApp($ref){
        $sql="SELECT * from immoblier where reference=$ref";
        $res=$this->connexion->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function ModifierApp(appartement $a){
        $r=$a->getRefrence();
        $p=$a->getProprietaire();
        $l=$a->getLocalite();
        $n=$a->getNbPiece();
        $d=$a->getDomainUsage();
        $s=$a->getSurfaceEspaceCommun();
        $sql = "UPDATE immoblier 
SET proprietaire='$p', localite='$l', nbPiece=$n, domaineUsage='$d', surfaceCommune=$s 
WHERE reference=$r";

        $res=$this->connexion->exec($sql);
        return $res;

    }
    public function SupprimerApp($ref){
        $sql="DELETE from immoblier where reference=$ref";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    public function ListerApp(){
        $sql="SELECT * from immoblier";
        $res=$this->connexion->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}