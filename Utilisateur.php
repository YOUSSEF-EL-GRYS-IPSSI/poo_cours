<?php



class Utilisateurs
{

    private $nom;
    private $prenom;
    private $age;
    private $email;



    public function __construct($nom, $prenom, $email)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
    }

    //  Setter qui permettent de mettre à jour les attributs nom, Prenom, age, et email

    public function setNom($nom)
    {

        $this->nom = $nom;
    }


    public function setPrenom($prenom)
    {


        $this->prenom = $prenom;
    }

    public function setAge($age)
    {

        $this->age = $age;
    }


    public function setEmail($email)
    {


        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Veullez saisir un email valide";
        }
    }


    // Getters pour recuperer les valeurs des attributs nom, prenom, age, email //


    public function getNom()
    {

        return $this->nom;
    }

    public function getPrenom()
    {

        return $this->prenom;
    }

    public function getAge()
    {

        return $this->age;
    }

    public function getEmail()
    {

        return $this->email;
    }
}
