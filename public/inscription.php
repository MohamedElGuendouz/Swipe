<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../decorations/inscription.css" />
	<meta name="viewport" content="width=device-width">
  <title>Inscription - Swipe</title>
</head>
<body class="news">
  <header>
    <div class="nav">
      <ul>
        <li class="home"><a href="../index.php">Accueil</a></li>
        <li class="tutorials"><a  href="porte-folio.php">PorteFolio</a></li>
        <li class="contact"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </header>
  <main>
    <div class="rubrique-inscription">
      <div class="sous-rubrique-inscription">

        <img src="../illustrations/logo-connexion.png" id="logo-connexion">
        <form action="../index.php">
          <label for="fname">Nom d'utilisateur</label>
          <input type="text" id="fname" name="firstname" placeholder="Insert ton nom d'utilisateur ici">

          <label for="lname">Mot de passe</label>
          <input type="password" id="lname" name="lastname" placeholder="Insert ton mot de passe ici">

          <label for="country">Langues</label>
          <select id="country" name="country">
            <option value="francais">Français</option>
            <option value="anglais">Anglais</option>
          </select>

          <a id="lien-connexion" href="../index.php">Déjà un compte ? Connecte-toi ici. </a>
          <input type="submit" value="Connexion">
        </form>
      </div>
    </div>
  </main>
</body>
</html>