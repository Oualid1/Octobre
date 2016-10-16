<?php
$titre = "Mon super blog";

function writeHeader(){
    global $titre;
    return '<header class="header">'.$titre."</header>";
}

$header = writeHeader();

$footer = '<footer><a href="mailto:toto@gmail.com">contact</a></footer>';

$articles = [
  [
    "titre"=> "article1",
    "contenu"=> "lorem ipsum 1"
  ],
  [
    "titre"=> "article2",
    "contenu"=> "lorem ipsum 2"
  ],
  [
    "titre"=> "article3",
    "contenu"=> "lorem ipsum 3"
  ]
];

$articleListes = "<h3>Derniers articles</h3><ul>";

for( $i = 0; $i < count($articles);$i++){

  $article = $articles[$i];
  $articleListes .= "<li><a href=\"#\">".$article['titre']."</a></li>";
}

$articleListes .= "</ul>";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $titre; ?></title>
    <style media="screen">
      body{
        margin:0;
        font-family:Arial,sans-serif;
        background-color:#ccc;
      }

      header{
        background-color:#aaa;
        color:white;
      }
    </style>
  </head>
  <body>
    <?php echo $header; ?>

    <div class="contenu">
      <?php echo $articleListes; ?>
    </div>

    <?php echo $footer; ?>
  </body>
</html>
