<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05 - Tabela</title>
    <style>
        table, tr, td, th{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1>Tabela de Alunos</h1>

    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>

    <?php
        for ($i=1; $i<=2; $i++) {
            echo "<tr>";
            for ($j=1; $j <=3 ; $j++) { 
                echo "<td>LInha $i coluna $j</td>";
            }
            echo "</tr>";
            
        }
    ?>

    </table>
    
</body>
</html>