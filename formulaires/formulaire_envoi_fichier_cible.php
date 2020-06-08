<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
  <body>
       
    <!-- Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur -->
    
    <p>
      Nom du fichier............................:  <?php echo $_FILES['monfichier']['name'];     ?> <br>
      
      Type de fichier ...........................:  <?php echo $_FILES['monfichier']['type'];     ?> <br>

      Taille du fichier en ko.................:  <?php echo $_FILES['monfichier']['size'];     ?> <br> 

      Dossier temporaire de stockage..:  <?php echo $_FILES['monfichier']['tmp_name']; ?> <br>
    
      Envoi (OK si code retour=0)......:  <?php echo $_FILES['monfichier']['error']; ?> <br>

      <?php
      
      $infosfichier = pathinfo($_FILES['monfichier']['name']);
      
      $extension_upload = $infosfichier['extension'];

      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'doc');
      
      ?>
    
    </p>

    <?php
    
    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
    {

          if ($_FILES['monfichier']['size'] < 1000000 )
          {

              if (in_array($extension_upload, $extensions_autorisees)) 
              {

                if (!file_exists('uploads')) { mkdir('uploads', 0777, true); }

                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                echo "L'envoi a bien été effectué !";
              }
             
              else

              {
                echo "Extension '" . $extension_upload . "' non Autorisée" ;
              }  
          }      
          else
          {  
              echo "La taille du fihier " .  $_FILES['monfichier']['name'] . " dépasse le Mo";
          }
         
    }
    else
    {
      echo "Il y a des erreurs dans l'upload su fichier";
    }  



    ?>
	 
   	</p>
 
   </body>
   </html>