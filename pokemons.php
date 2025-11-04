<?php
  require_once "./app/components/docktype.php";
  require_once "./app/components/header.php";
  require_once "./app/components/footer.php";
?>
<?php makeDoctype([
  "title" => "Pokemon List",
    "links" => [
        "./public/stylesheets/pages/pokemons.css"
    ]
]) ?>
<?php makeHeader(); ?>
     <main class="container">
        <h1>List of pokemons</h1>
        </main>
 
<?php makeFooter();?>