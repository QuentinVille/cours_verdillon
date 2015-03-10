<html>
 <head>
  <title>Authentification</title>
 </head>
 <body>
 <header>
  <h1>Jeu du nombre PHP</h1>
</header>
  <form method="post" action="index.php?action=login">
   <table border="0" width="400" align="center">
    <tr>
     <td width="200">Utilisateur</td>
     <td width="200">
      <input type="text" name="login" autofocus>
     </td>
    </tr>
    <tr>
     <td width="200">Mot de passe</td>
     <td width="200">
      <input type="password" name="password">
     </td>
    </tr>
    <tr>
     <td colspan="2">
      <input type="submit" name="submit" value="login" autofocus>
     </td>
    </tr> 
   </table>
   <p><a href="?action=inscription">S'inscrire</a></p>
  </form>
 </body>
</html>