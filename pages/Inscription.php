<?php
if (!empty ($_POST)) {
$admin=array();

$admin['nom']=$_POST['Nom'];
$admin['prenom']=$_POST['Prenom'];
$admin['login']=$_POST['Login'];
$admin['password']=$_POST['Password'];
$admin['ConfirmerPassword']=$_POST['ConfirmerPassword'];





$js = file_get_contents('./data/admin.json'); 
$js =json_decode($js,true);



$js[]=$admin;     
  $js = json_encode($js);                    
file_put_contents('./data/admin.json',$js); 

}
 
?>

<div class="dans">
    <div class="dans-header">
        <div class="dedans">s'inscrire</div>
        <b>Pour proposer des quizz</b>
        <div class="diviseur"></div>
        <div class="img-form">
            
            <h5> Avatar Admin</h5>
        </div>
    </div>
    <div class="dans-corps">
            <form action="" method="POST" id="">
            <div class="dans-form">
              <div class="direct"> Prénom</div>
              <input type="text" class="in-control" name="Prenom" id="" > 
            </div>
            <div class="dans-form">
            <div class="direct"> Nom</div>
              <input type="text" class="in-control" name="Nom" id="" > 
            </div>   
            <div class="dans-form">
            <div class="direct"> Login</div>
              <input type="text" class="in-control" name="Login" id="" > 
            </div>   
            <div class="dans-form">
            <div class="direct"> Password</div>
              <input type="password" class="in-control" name="Password" id="" > 
            </div>   
            <div class="dans-form">
            <div class="direct"> Confirmer Password</div>
              <input type="password" class="in-control" name="ConfirmerPassword" id="" > 
            </div> 
            <h5>Avatar</h5>
            <div><button type="submit" class="choix" name="btn_submit" id="" value="">
                 <a href="" class="avance">Choisir un fichier</a></button></div> 
            <div><button type="submit" class="compte" name="btn_submit" id="" value="">
                 Créer compte</button></div>     
            </form>
    </div>
</div>