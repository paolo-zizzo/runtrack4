<html>

<head>

</head>

<header>
<nav class="menu">
  <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="index.php">Connexion</a></li>
    <li><a href="index.php">inscription</a></li>
    <li><a href="index.php">rechercher</a></li>

  </ul>
</nav>

</header>

<body>
<form>

<p>Civilité:</p>

  <input type="radio" id="homme" name="genre" value="homme"
         checked>
  <label for="homme">homme</label>

  <input type="radio" id="femme" name="genre" value="femme">
  <label for="femme">femme</label> <br><br>

  <input type="text" placeholder="nom" id="name" name="name" required>
        <input type="text"  placeholder="prenom"id="name" name="prenom" required>
        <input type="texte"  placeholder="adresse"id="adresse" name="adresse" required>
        <input type="texte"  placeholder="email"id="email" name="name" required>
        <input type="password" placeholder= "Mot de passe" required  name="password"/> 
        <input type="password" placeholder="confirmer mot de passe" name="password1">

        <p>Hobbies:</p>

  <input type="checkbox" id="sport" name="sport"
         >
  <label for="sport">sport</label>

  <input type="checkbox" id="voyages" name="voyages"
         >
  <label for="sport">voyages</label>

  <input type="checkbox" id="informatique" name="informatique"
         >
  <label for="sport">informatique</label>

  <input type="checkbox" id="lecture" name="lecture"
         >
  <label for="sport">lecture</label>

<br><br>





        <input type="submit" name="valider" value="valider"/>





</form>


</body>


</html>