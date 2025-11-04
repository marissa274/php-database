<?php
  require_once "./app/db/database.php";
  require_once "./app/components/docktype.php";
  require_once "./app/components/header.php";
  require_once "./app/components/footer.php";

  $db = dbConnect();
  $result = dbQuery($db, "SELECT * FROM pokemon");
?>

<?php makeDoctype([
  "title" => "Pokemon List",
    "links" => [
        "./public/stylesheets/pages/pokemons.css"
    ]
]) ?>
<?php makeHeader(); ?>
     <main class="container">
      <div class = "container">
        <div class= "pokemon-filter">
           <button class="is-selected">All</button>
            <button>Fire</button>
            <button>Water</button>
        </div>
      </div>

       <div class = "container">
        <div class="row">
            <?php while ($row = pg_fetch_assoc($result)) { 
            $formattedId = str_pad($row['id'], 3, '0', STR_PAD_LEFT)
            ?>
            <a
                class="pokemon col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"
                href= "./pokemon.php"?id=<?= $row['id'] ?>>

                <figure>
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/<?=$formattedId?>.png" alt="" srcet="">
                </figure>

                <div class="pokemon-info">
                    <span>#<?= $formattedId ?></span>
                    <h4><?= $row['name'] ?></h4>
                    <div>

                    </div class="types">
                    <?php
                    $sql = "SELECT t.type FROM pokemon_type pt
                    JOIN type t ON pt.type_id = t.id
                    WHERE pt.pokemon_id = " . $row['id'];

                    $typeResult = dbQuery($db, $sql);
                    while ($type = pg_fetch_assoc($typeResult)) {
                    $minimizedType = strtolower($type['type']);

                    ?>
                    <span class="type <?= $minimizedType ?> -type">
                        <?= $type['type'] ?>
                    </span>
                    <?php } ?>

                </div>
                
            
            </a>
            <?php } ?>

        </div>          
       </div>
        </main>
 
<?php makeFooter();?>