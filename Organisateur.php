<?php

Class Organisateur extends User
{
    private string $fonction;

    public function __construct($id_user=NULL, $nom_user=NULL, $prenom_user= NULL, $mdp_user=NULL, $mail_user= NULL, $phone_user = NULL, $adresse_user=NULL, $cd_postal_user= NULL,$fonction= NULL)
    {
      if(!is_null($id_user))
      {
        parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
        $this->fonction = $fonction;
      }
    }

    public function GetFonction()
    {
      return $this->fonction;
    }

    public function SetFonction($fonction)
    {
       $this->fonction = $fonction;
    }
}

?>
