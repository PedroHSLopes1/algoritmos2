<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if(isset($_POST["nome"]) == true){
                $nome = $_POST["nome"];
                echo $nome."<br>";
            }

            if(isset($_POST["sexo"]) == true){
                $sexo = $_POST["sexo"];
                echo $sexo."<br>";
            }

            if(isset($_POST["cor_olhos"]) == true){
                $cor_olhos = $_POST["cor_olhos"];
                echo $cor_olhos."<br>";
            }

            if(isset($_POST["mark"]) == true){
                $vetor_m = $_POST["mark"];
                foreach($vetor_m as $vetor_marcado){
                    echo $vetor_marcado."<br>";
                }
            }

            if(isset($_POST["texta"]) == true){
                $text_area = $_POST["texta"];
                echo $text_area."<br>";
            }

        ?>
    </body>



</html>