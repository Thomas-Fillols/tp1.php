<form action="data-processing.php" method="post">
    <input type="text" name="identifiant"/>Identifiant<br/><br/>

<input type="radio" name="sexe" value="homme">Homme<br/>
<input type="radio" name="sexe" value="femme">Femme<br/><br/>

<input type="text" name="E-mail">E-mail<br/><br/>

<input type="password" name="mdp">Mot de passe<br/>
<input type="password" name="mdp">Verification de mot de passe<br/><br/>

<input type="text" name="telephone">Numero de téléphone<br/><br/>

<select name="nomPays">
    <option value="France">France</option>
    <option value="Bresil">Bresil</option>
    <option value="Belgique">Belgique</option>
    <option value="Italie">Italie</option>
    <option value="Espagne">Espagne</option>
</select><br/><br/>

<input type="checkbox" name="condition">Condition d'utilisation<br/><br/>

<input type="submit" name="action" value="mailer">
</form>