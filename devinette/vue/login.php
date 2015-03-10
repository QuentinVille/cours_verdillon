<html>
 <head>
  <title>Authentification</title>
 </head>
 <body>
  <form method="post" action="index.php?action=login">
   <table border="0" width="400" align="center">
    <tr>
     <td width="200"><b>Utilisateur</b></td>
     <td width="200">
      <input type="text" name="login">
     </td>
    </tr>
    <tr>
     <td width="200"><b>Mot de passe<b></td>
     <td width="200">
      <input type="password" name="password">
     </td>
    </tr>
    <tr>
     <td colspan="2">
      <input type="submit" name="submit" value="login">
     </td>
    </tr> 
   </table>
   <p><a href="?action=inscription">S'inscrire</a></p>
  </form>
 </body>
</html>