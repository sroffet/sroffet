<?PHP
    class user
    {
        private ?int $ID = null;
        private ?string $NOM = null;
        private ?int $TEL = null;
        private ?string $ADRESSE = null;
        private ?string $EMAIL = null;
        private ?string $PASSE = null;
        
        
            
        function __construct( string $NOM, int $TEL,string $ADRESSE ,string $EMAIL ,string $PASSE  )
        {
            $this->NOM=$NOM;
            $this->TEL=$TEL;
            $this->ADRESSE=$ADRESSE;
            $this->EMAIL=$EMAIL;
            $this->PASSE=$PASSE;
            
        }
        
        function getID(): int{
            return $this->ID;
        }
        function getNOM(): string{
            return $this->NOM;
        }
        function getTEL(): int{
            return $this->TEL;
        }
        function getADRESSE(): string{
            return $this->ADRESSE;
        }
        function getEMAIL() :string {
            return $this->EMAIL;
        }
        function getPASSE(): string{
            return $this->PASSE;
        }
    

        function setNOM(string $NOM): void
        {
            $this->NOM=$NOM;
        }
        function setTEL(int $TEL): void
        {
            $this->PRIX=$TEL;
        }
        function setADRESSE(string $ADRESSE): void
        {
            $this->IMAGE=$ADRESSE;
        }
        function setEMAIL( string $EMAIL): void
        {
            $this->DATE=$EMAIL;
        }
        function setPASSE(string $PASSE ): void
        {
             $this->QTE=$PASSE;
        }
       
        
    }
?>
