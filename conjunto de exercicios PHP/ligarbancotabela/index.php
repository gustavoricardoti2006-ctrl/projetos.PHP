<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php 
     $serv = 'localhost';
     $bco = 'faetecjv02';
     $usu = 'root';
     $sen = '';
     
     $cnx = new PDO("mysql:host=$serv;dbname=$bco", $usu,$sen);
     $cnx = $cnx->prepare("SELECT * FROM $tab");
     $sql->setFetchMode(PDO::FETCH_ASSOC);
     $sql->execute();


     ?>
     <main>
          <h1>banco dados php</h1>
          <table>
               <tr>
               <th>cod</th>
               <th>Nome</th>
               <th>Bairro</th>
               <th>Estado</th>
               </tr>
               <?php 
               while($pess = $sql->fetch()){
                    echo"<tr><td>{$pess['cod']}</td>";
                    echo"<td>{$pess['nome']}</td>";
                    echo"<td>{$pess['bairro']}</td>";
                    echo"<td>{$pess['bairro']}</td></tr>";

               }
               $cnx = null;
               ?>
          </table>
    
     </main>
</body>
</html>