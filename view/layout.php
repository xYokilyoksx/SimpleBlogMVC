<!DOCTYPE html>
<html lang="fr">
 <head>
  <title><?php echo $title; ?></title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 </head>
 <body>
    <p>
    <?php
        if( isset($error) && $error !=''){
            switch( $error ) {
                case 'not connected':
                    echo 'Veuillez svp vous authentifier';
                    break;
                case 'bad login/pwd':
                    echo 'Erreur de login et/ou de mot de passe';
                    break;
            }
        }
        elseif( isset($login) && $login!='' )
        {
            echo 'Connecté en tant que '.$login ;
            echo ' <a href="'.$logoutUri.'">Déconnexion</a>';
        }
    ?>
    </p>
    <?php echo $content; ?>
 </body>
</html>
