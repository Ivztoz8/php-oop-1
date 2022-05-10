<?php

class Movie {
    
    // Istanze 
    public $titolo;
    public $cover;
    public $anno;
    public $lingua;
    public $originalanguage;
    public $risposta;

    // Constructor
    public function __construct($_titolo, $_cover, $_anno, $_lingua)
    {
        $this -> titolo = $_titolo;
        $this -> cover = $_cover;
        $this -> anno = $_anno;
        $this -> lingua = $_lingua;
    }

    // Metodi
        // Set function
    public function setOriginalanguagel($originalanguage)
    {
       if($originalanguage == $this -> lingua ){
            $this -> risposta = "Il film è in lingua originale.";
       }
    }
    public function setLingua($lingua)
    {
       $this -> lingua = $lingua; 
       
    }
        // Get Function
    public function getOriginalanguage()
    {
        return $this -> risposta;
    }
    
    public function getLingua()
    {
        return $this -> lingua;
    }  
}

// Istanziare 2 Oggetti
$Dune = new Movie ("Dune", "https://www.warnerbros.it/wp-content/uploads/2020/04/Dune_Poster-Italia.jpg", "2021", "inglese");
$MatrixResurrections = new Movie ("Matrix Resurrections", "https://pad.mymovies.it/filmclub/2019/09/069/locandinapg1.jpg", "2021", "italiano");

$Dune -> setOriginalanguagel("inglese");
$MatrixResurrections -> setOriginalanguagel("inglese");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>PHP OOP 1</title>
</head>
<body >
    <header class="">
        <div class="container-fluid p-3">
            <div class="class="d-flex row row-cols-2 justify-content-center align-items-center p-3">
            <a href="#"><i class="fa-solid fa-clapperboard text-white"></i></a> 
            </div>
        </div>
    </header>
    <main class="bg-dark">
        <div class="container-fluid p-5 justify-content-center ">
            <div class="d-flex row row-cols-2 justify-content-center align-items-center p-3 vh-50"> 
                <h1 class="text-secondary">Choose your film and take the tape</h1>
            </div>
            <div class="d-flex row row-cols-2 justify-content-center align-items-start">
                <div class="d-flex justify-content-center">
                    <div class=" col-3 flex-column bg-secondary p-2 rad_1" type="button">
                        <h4 class="text-white text-center"><?php echo $Dune -> titolo ?></h4>
                        <img src="<?php echo $Dune -> cover ?>" alt="<?php echo $MatrixResurrections -> titolo ?>" class="img-fluid">
                        <p class="text-dark text-center mt-2"><?php echo $Dune -> anno ?></p> <!-- Anno -->
                        <p class="text-warning text-center"><?php echo $Dune -> getLingua() ?></p> <!-- Lingua -->
                        <p class="text-white text-center"><?php echo $Dune -> getOriginalanguage() ?></p> <!-- Risposta -->
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class=" col-3 flex-column bg-secondary p-2 rad_1" type="button">
                        <h4 class="text-white text-center"><?php echo $MatrixResurrections -> titolo ?></h4>
                        <img src="<?php echo $MatrixResurrections -> cover ?>" alt="<?php echo $MatrixResurrections -> titolo ?>" class="img-fluid">
                        <p class="text-dark text-center mt-2"><?php echo $MatrixResurrections -> anno ?></p> <!-- Anno -->
                        <p class="text-warning text-center"><?php echo $MatrixResurrections -> getLingua() ?></p> <!-- Lingua -->
                        <p class="text-white text-center"><?php echo $MatrixResurrections -> getOriginalanguage() ?></p> <!-- Risposta -->
                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  
</body>
</html>