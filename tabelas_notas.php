<! DOCTYPE html>
<html lang="en">
<cabeça>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <título>Cadastro de Notas</título>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anônimo">
</cabeça>
<corpo>
    <h1>Notas cadastradas! </h1>
    <div class="container">
        <?php
        ecoar "<cável class='table'>";
        eco "<thead>";
        eco "<tr>";
        eco "<th scope='col'>ID</th>";
        eco "<th scope='col'>NOME</th>";
        eco "<th scope='col'>Disciplina</th>";
        eco "<th scope='col'>Nota 1</th>";
        eco "<th scope='col'>Nota 2</th>";
        eco "</tr>";
        eco "</thead>";
        

        classe TableRows estende RecursiveIteratorIteratorIterator {
            
            função __construct ($it){
                pai ::__construct($it, self::LEAVES_ONLY);
            }
            função atual(){
                retornar "<td>". pai :: atual() . "</td>";
            }

            função começar Crianças(){
                eco "<tr>";
            }

            endChildren função (){
                eco "</tr>". "\n";
            }

        }

        incluir "conexão.php";
        $conn = conexão();

        tentar {
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * from shsa1lefvhriyzml.notas");
            $stmt->execute();

            
            $stmt->setFetchMode (PDO::FETCH_ASSOC);
            foreach (novo TableRows(novo RecursiveArrayIterator($stmt->fetchAll())) como $k => $v) {
                eco $v;
            }
        } captura (PDOException $e) {
            eco "Deu erro" . $e->getMessage();
        }
        $conn = nulo;
        eco "</tabela>";

        ?>
    </Div>

</corpo>
</html>
