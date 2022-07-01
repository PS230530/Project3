<?php
    class StandpuntDB
    {
        const DSN = "mysql:host=localhost;dbname=verkiezingenprj3";
        const USER = "root";
        const PASSWD = "";
           
     
        function SelectStandpunt(){
            try{
                $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
                $statement = $pdo->prepare("SELECT thema.thema, standpunt.standpunt
                FROM thema
                INNER JOIN standpunt ON standpunt.thema_id=thema.thema_id;");
                $statement->execute();
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $rows;
            }
            catch(PDOException $e) {
            return false;
            }
        }

        function SelectStandpuntperThema($thema){
            try{
                $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
                $statement = $pdo->prepare("SELECT thema.thema, standpunt.standpunt
                FROM thema
                INNER JOIN standpunt ON standpunt.thema_id=thema.thema_id
                WHERE thema.thema = :thema; ");
                $statement ->bindValue(":thema",$thema);
                $statement->execute();
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $rows;
            }
            catch(PDOException $e) {
            return false;
            }
        }
    
    }

?>
