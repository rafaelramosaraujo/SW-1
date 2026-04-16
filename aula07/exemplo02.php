<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02 - Tabela</title>
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
            echo "<td>LInha $i coluna $i</td>";
            echo "<td>LInha $i coluna $i</td>";
            echo "<td>LInha $i coluna $i</td>";
            echo "</tr>";
            
        }
    ?>
<!--         
        <tr>
            <td>LINHA 1 COLUNA 1</td>
            <td>LINHA 1 COLUNA 2</td>
            <td>LINHA 1 COLUNA 3</td>
        </tr>
        <tr>
            <td>LINHA 2 COLUNA 1</td>
            <td>LINHA 2 COLUNA 2</td>
            <td>LINHA 2 COLUNA 3</td>
        </tr> -->
    </table>
    
</body>
</html>