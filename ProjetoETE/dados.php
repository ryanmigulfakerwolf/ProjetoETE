
                
    <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      
      <td>Nome</td>
      <td>E-mail</td>
      
    </tr>
    
    <tr>
       <?php 
       require 'conexao.php';
       $link = conectar();
       
       $sql = mysqli_query($link, "SELECT * FROM usuarios");
       while($col = mysqli_fetch_assoc($sql)){
           echo "<tr>";
           echo "<tr>".$col['usuario']."</td>";
           echo "<tr>".$col['email']."</td>";
           echo '</tr>';
           
       } 
       
       fecharConexao($link);
        ?>
        
        
        
  </table>
</body>
</html>     