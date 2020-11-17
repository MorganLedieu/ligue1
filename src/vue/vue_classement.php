<?php
function vueClassement($db){
    
    echo'<h1><br><br><br>Classement</h1>';
     $db = new PDO('mysql:host=localhost;dbname=dblogin4158','login4158','NcaPeMOaPkuZPAP');
     
     $request = $db->query("SELECT * from classement ORDER BY points DESC");
      $rang=0;
      echo '<div class="classement"><h5><td>Rang</td>';
      echo'&nbsp; &nbsp;&nbsp;';
      echo ' | &nbsp;&nbsp;<td>Nom d\'utilisateur</td>&nbsp;&nbsp; |';
      echo'&nbsp;&nbsp;&nbsp;';
      echo '<td>Points</td>';
      echo '</h5>';
      
      while ($row = $request->fetch())  {
        $rang++;
        
        



      echo '<h5><tr><td>'; echo $rang; echo '</td></tr>';
      echo'&nbsp; &nbsp;&nbsp;';
      echo ' |&nbsp;&nbsp; <td>'; echo $row['pseudo'];  echo '&nbsp;&nbsp; |</td>';
      echo'&nbsp;&nbsp;&nbsp;';
      echo '<td>'; echo $row['points']; echo '</td>';
      
    echo'<span>';
    echo'</br>&nbsp';
      echo '</h5>';
      }
    }
    