<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<header>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">accueil</a></li>
        <li><a href="index.php">inscription</a></li>
        <li><a href="index.php">connexion</a></li>
        <li><a href="index.php">rechercher</a></li>

      </ul>
    </div>
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
<footer class="page-footer">
          
                <h5 class="white-text">liens</h5>
                <ul>
                <li><a href="index.php">accueil</a></li>
        <li><a href="index.php">inscription</a></li>
        <li><a href="index.php">connexion</a></li>
        <li><a href="index.php">rechercher</a></li>
                </ul>
              
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Text
            </div>
          </div>
        </footer>

</body>


</html>