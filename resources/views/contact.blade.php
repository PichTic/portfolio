<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Portfolio</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <div id="header">
                <h1><a href="index.html" title="Retour à l'accueil"><img src="images/logo_pht.png" alt="Logo de la page"></a></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="cv.html" title="Vers mon CV">CV</a></li>
                    <li><a href="unilim.html" title="Vers mes projets unilim">Projets</a></li>
                    <li><a href="propos.html" title="A propos de moi">A propos</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <h2>Contactez-moi</h2>
                <form action="/contact" method="post">
                    {{ csrf_field() }}

                        @if (session('test'))

                        <p>Votres message a bien été envoyé à Vincent</p>

                        @endif
                    <fieldset>



                        <p>
                            <label for="nom">Nom : </label><br>
                            <input type="text" value="{{ old('nom') }}" name="nom" id="nom">
                        @if ($errors->has('nom'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nom') }}</strong>
                            </span>
                        @endif
                        </p>
                        <p>
                            <label for="prenom">Prénom : </label><br>
                            <input type="text" value="{{ old('prenom') }}" name="prenom" id="prenom">
                        @if ($errors->has('prenom'))
                            <span class="help-block">
                                <strong>{{ $errors->first('prenom') }}</strong>
                            </span>
                        @endif
                        </p>
                        <p>
                            <label for="mail">E-mail : </label><br>
                            <input type="email" value="{{ old('mail') }}" name="mail" id="mail">
                        @if ($errors->has('mail'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mail') }}</strong>
                            </span>
                        @endif
                        </p>
                        <p>
                            <label for="text">Votre message : </label><br>
                            <textarea cols="50" rows="10" name="text" id="text">{{ old('text') }}</textarea>
                        @if ($errors->has('text'))
                            <span class="help-block">
                                <strong>{{ $errors->first('text') }}</strong>
                            </span>
                        @endif
                        </p>
                        <p>
                            <button type="submit" id="envoi" name="envoi">Envoyer</button>
                        </p>

                    </fieldset>

                </form>
            </section>
        </main>
        <footer>
            <p>
                <a href="https://twitter.com/Pich_Tic" title="Allez vers mon profil Twitter"><img src="images/Twitter.png" alt="Logo Twitter"></a>
                <a href="https://www.linkedin.com/in/vincent-pichot-14b09a138/" title="Allez vers mon profil LinkedIn"><img src="images/Linkedin.png" alt="Logo Linkedin"></a>
                <a href="https://www.facebook.com/profile.php?id=100013998103916" title="Allez vers mon profil Facebook"><img src="images/Facebook.png" alt="Logo Facebook"></a>
            </p>
        </footer>
    </body>
</html>
