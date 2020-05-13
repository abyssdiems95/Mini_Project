<?php
  if(!empty($_POST)){
    $js = file_get_contents('./data/utilisateur.json'); 
  $js =json_decode($js,true);
  $joueur=array();
  $joueur['prenom']=$_POST['Prenom'];
  $joueur['nom']=$_POST['Nom'];
  $joueur['login']=$_POST['Login'];
  $joueur['password']=$_POST['Password'];
  $joueur['profil']="joueur";
  $joueur['photo']="joueur.jpg";
  


  $js[]=$joueur;                            //rajouter le tableau dans le tableau json converti
    $js = json_encode($js);                    //le mettre comme type objet javascript
  file_put_contents('./data/utilisateur.json',$js);//rajouter le type objet javascript dans le fichier json    

  }
?>
<br>
<a href="index.php?statut=logout">Deconnexion</a>


<div class="sur">
    <div class="sur-header">
        <div class="surlecoté">s'inscrire</div>
        <b>Pour tester votre niveau de culture générale</b>
        <div class="file"></div>
        <div class="img-form1">
            
            <h5> Avatar du Joueur</h5>
        </div>
    </div>
    <div class="sur-corps">
            <form action="" method="POST" id="">
            <div class="sur-form">
              <div class="direct1"> Prénom</div>
              <input type="text" class="on-control" name="Prenom" id="" > 
            </div>
            <div class="sur-form">
            <div class="direct1"> Nom</div>
              <input type="text" class="on-control" name="Nom" id="" > 
            </div>   
            <div class="sur-form">
            <div class="direct1"> Login</div>
              <input type="text" class="on-control" name="Login" id="" > 
            </div>   
            <div class="sur-form">
            <div class="direct1"> Password</div>
              <input type="password" class="on-control" name="Password" id="" > 
            </div>   
            <div class="sur-form">
            <div class="direct1"> Confirmer Password</div>
              <input type="password" class="on-control" name="Confirmer_Password" id="" > 
            </div> 
            <h5>Avatar</h5>
            <div><button type="submit" class="choix1" name="btn_submit" id="" value="">
                 <a href="" class="avance">Choisir un fichier</a></button></div> 
            <div><button type="submit" class="compte1" name="btn_submit" id="" value="">
                 Créer compte</button></div>     
            </form>
    </div>
</div>



