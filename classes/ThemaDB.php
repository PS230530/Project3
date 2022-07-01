<?php
    class ThemaDB
    {
        const DSN = "mysql:host=localhost;dbname=verkiezingenprj3";
        const USER = "root";
        const PASSWD = "";
           
     
        function selectPartijen(){
            try{
                $pdo = new PDO(self::DSN, self::USER, self::PASSWD);
                $statement = $pdo->prepare("SELECT * FROM thema;");
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
