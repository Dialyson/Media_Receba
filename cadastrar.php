
<?php
incluir "conexao.php";
$conn = conexao(); 


tentar {
   $conn->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $nome = (isset($_POST["nome"]) && $_POST["nome"] !=null) ? $_POST['nome'] :"";
    $disciplina = (isset($_POST["disciplina"]) && $_POST["disciplina"] !=null) ? $_POST["disciplina"] :"";
    $nota_1 = (isset($_POST["nota_1"]) && $_POST["nota_1"] !=null) ? $_POST["nota_1"] :"";
    $nota_2 = (isset($_POST["nota_2"]) && $_POST["nota_2"] !=null) ? $_POST["nota_2"] :"";
    
    $stmt = $conn->prepare("INSERIR EM shsa1lefvhriyzml.notas (nome,disciplina,nota1,nota2) 
 VALORES (:nome, :d isciplina, :nota1, :nota2)");
    $stmt ->bindParam(':nome',$nome);
    $stmt ->bindParam(':disciplina',$disciplina);
    $stmt ->bindParam(':nota_1',$nota_1);
    $stmt ->bindParam(':nota_2',$nota_2);
    eco $nome;
    eco $nota1;
se ($nome != "" e $disciplina != "" ) {
        se ($nota_1!="" e $nota_2 !=""){
        se ($stmt->executo()) {
            eco "Cadastro realizado com sucesso!";
        } mais {
            eco "Erro ao tentar efetiva cadastro";
        } 
}
}mais {
    eco "nome ou disciplina errados!";
}
    
    
} captura (PDOException $e) {
    eco "Erro" . $e->getMessage();
}
$conn = nulo;
cabeçalho ("Localização: tabela_notas.php");
?>


