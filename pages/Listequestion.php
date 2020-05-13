<?php
echo 'vous êtes sur la page Question';
?>

  <div class="right">
        <div id="nombreQuestion">
            <form action="" method="post">
                <label for="" id="nnbre">Nbre de question/Jeu</label>
                <input type="text" name="" id="inputs">
                <input type="submit" value="OK" id="inputOk">
            </form>
        </div>
        <div class="question-body">
        <?php

$question = file_get_contents('./data/question.json'); 
$question =json_decode($question,true);

        if (isset($_GET['liste'])) {
          $max=$_GET['liste']*2;
          $min=$max-2;
          for ($i=$min; $i <$max ; $i++) { 
            if($question[$i]['choix']=='texte'){
                echo "<h3>";
                echo  $question[$i]['question'];
              echo "</h3>";
              echo "<br>";
              $value=$question[$i]['choixtext'];
              echo "<input type='text' value='$value'>";
                    
                    echo "<br>"; 
            }
            if($question[$i]['choix']=='simple'){
               echo "<h3>";
                echo  $question[$i]['question'];
              echo "</h3>";
                echo "<br>";
                foreach ($question [$i]['reponses'] as $key) {
                    echo "<input type='radio'>";
                    echo $key;
                    echo "<br>"; 
                }
                
              }
              if($question[$i]['choix']=='multiple'){
                echo "<h3>";
                echo  $question[$i]['question'];
              echo "</h3>";
                echo "<br>";
                foreach ($question [$i]['reponse'] as $key) {
                    echo"<input type='checkbox'>";
                    echo $key;
                    echo "<br>";
                }
  
              }
        }

        }
       

          
            ?>
        </div>
        <div class="paginate-zone">
           
        </div>
    </div>