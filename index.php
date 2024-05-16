<?php
    /* 
    nome repo: php-oop-1
    Create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    */

    class Movie {
        public $title;
        public $director;
        public $genre;

        function __construct($_title, $_director, $_genre) {
            $this->title = $_title;
            $this->director = $_director;
            $this->genre = $_genre; 
        }

        public function getMovieDetails() {
            return $this->title . ' - Regista: ' . $this->director . ' - Genere: ' . $this->genre;
        }
    }

    $eva = new Movie('Evangelion: 1.0 You Are (Not) Alone', 'Hideaki Anno', 'Anime');
    //var_dump($eva);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Oop</title>
</head>
<body>
    <div>
        Film: <?php echo $eva->getMovieDetails(); ?>
    </div>
</body>
</html>