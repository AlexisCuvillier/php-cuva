
 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'includes/head.inc.html' ?>
</head>

<body>
    <header>
        <?php include 'includes/header.inc.html';?>
    </header>
    <div class="container">
        <div class="row">  
            <nav class="col-sm-3 my-2 "> 
                <a href="index.php" class="btn btn-outline-secondary mx-auto btn-block col-12 "> Home</a>
                <?php
  
                    if(!empty($_SESSION['table'])){
                         $table = $_SESSION['table'];
                        include 'includes/ul.inc.html'; 
                    } 
                    else{} 
                ?> 
            </nav>
 
            <section class=" col-sm-9 my-2"> 
           
            
                <?php /* si la page contiens add inclure le formulaire */
                    if(isset($_GET['add'])) {
                    include 'includes/form.inc.html';  
                } 
             
                
                    
                    elseif(isset($_POST['submit'])){  
              
                         $_SESSION['table']=[
                        'first_name'=>htmlspecialchars($_POST['first_name']),
                        'last_name'=>htmlspecialchars($_POST['last_name']),
                        'age'=>$_POST['age'],
                        'size'=>$_POST['size'],
                        'situation'=>$_POST['situation']
                        ];
                        echo "<h2 class='text-center'>Donnée sauvegardée</h2>";
               
                    } 
                    //  Supression des données de la table

                    elseif(isset($_GET['del'])){
                        unset($_SESSION['table']);
                        echo "<h2 class = 'text-center'>Les données ont bien été supprimées";
                    }

                    // Lire un tableau avec print_r

                    elseif(isset($_GET['debugging'])){
                        echo "<h2>Débogage</h2> <br> <p> ===> Lecture du tableau à l'aide de la fonction print_r()";
                        print "<pre>";
                        print_r($table);
                        print "</pre>"; 
                    }

                    // Concaténation

                    elseif (isset($_GET['concatenation'])) {
                        echo "<h2>Concaténation</h2> <br> <p> ===> Construction d'une phrase avec le contenu du tableau </p>";
                
                        echo "
                        <h3>".$table['first_name']." " .$table['last_name']."</h3>"
                        ;
                        echo "
                        <p>" .$table['age']. " ans, je mesure " .$table['size']. "m et je fais partie des " .$table['situation']. " de la promo Simplon. </p> ";

                        echo "<br> <p> ===> Construction d'une phrase après MAJ du tableau: </p> "; //Ajouter en majsucule le last-name

                        $table['last_name']= strtoupper($table['last_name']);
                        echo " 
                        <h3>".$table['first_name']." " .$table['last_name']."</h3>"
                        ;
                        echo "
                        <p>" .$table['age']. " ans, je mesure " .$table['size']. "m et je fais partie des " .$table['situation']. " de la promo Simplon. </p> ";

                
                        echo "<br> <p> ===> Affichage d'une virgule à la place du point pour la taille : </p> "; // Changer le point en virgule

                        $table['size']= str_replace("." , "," ,$table['size']);
                        echo " 
                        <h3>".$table['first_name']." " .$table['last_name']."</h3>"
                        ;
                        echo "
                        <p>" .$table['age']. " ans, je mesure " .$table['size']. "m et je fais partie des " .$table['situation']. " de la promo Simplon. </   p> ";
                 
                    } 


                    elseif (isset($_GET['loop'])) { // La boucle
                        echo "
                        <h2> Boucle </h2>";
                        echo "
                        <p> ===> Lecture du tableau à l'aide d'une boucle foreach </p>"; 
                        $i=0;
                        foreach ($table as $key => $value) {
                  
                        echo  'à la ligne n° ' .$i++. ' correspond la clé "' .$key. '" et contient "' .$value. '"<br>'  ; 
                    }
                    }

                    elseif (isset($_GET['function'])) { // La fonction
                        echo "
                        <h2> Fonction </h2>";
                        echo "
                        <p> ===> J'utilise ma fonction readTable() </p>";
                        function readTable($table){ // Je crée ma fonction qui englobera ma boucle
                        $i=0;
                        foreach ($table as $key => $value) {
                  
                        echo  'à la ligne n° ' .$i++. ' correspond la clé "' .$key. '" et     contient "' .$value. '"<br>'  ; 
                    }
                    }
                    readTable($table); // je lance ma fonction 
                }
            
                   else{
                    echo '<a href="/index.php?add" type="button" method="GET"class="btn btn-primary  ">Ajouter des données</a>'; // sinon j'affiche le btn ajouter des données
                
                }
                ?>
            


            </section>
        </div>
    </div>
    <footer>

    <?php 
    include 'includes/footer.inc.html';

    ?>
    </footer>
</body>