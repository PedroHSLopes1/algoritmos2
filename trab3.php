<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="processa.php" name="formulario" method="post">
            Nome: <input name="nome" type="text"><br>
            Sexo: <input  type="radio" name="sexo" value="masculino">Masculino
                  <input  type="radio" name="sexo" value="feminino">Feminino<br>
            Cor dos olhos: <select name="cor_olhos">
                  <option value="marrom">Marrom</option>
                  <option value="verde">Verde</option>
                  <option value="azul">Azul</option>
                  <option value="preto">Preto</option>
            </select><br>
            Marque as que se aplicam: <input type="checkbox" name="mark[]" value="over6">Over 6 feet tall
                                      <input type="checkbox" name="mark[]" value="over200">Over 200 pounds<br>
            
            
            Descreva suas habilidades atléticas:<br><textarea name="texta" rows="5" cols="40"></textarea><br>

            <input name="btnEnviar" type="submit" value="Enviar">
        </form>
    </body>
</html>