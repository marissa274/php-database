<?php
  require_once "./app/components/docktype.php";
  require_once "./app/components/header.php";
  require_once "./app/components/footer.php";
?>

<?php makeDoctype([
    "links" => [
        "./public/stylesheets/pages/index.css"
    ]
]) ?>

<?php makeHeader(); ?>
       

        <main class="container">
        <h1>Welcome to the Pokedex</h1>
        <ul>
            <li><a href="./pokemons.php">Liste des pokemons</a></li>
            
        </ul>
        </main>

<?php makeFooter(); ?>
       