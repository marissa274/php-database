<?php function makeDoctype() {?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pokedex</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="./public/stylesheets/styles.css">

<?php foreach($data['links'] ?? [] as $href) { ?>
<link rel="stylesheet" href="<?= $href ?>">
<?php } ?>

<?php foreach($data['scripts'] ?? [] as $type => $src) { ?>
<script type="<?= $type ?>" src="<?= $src ?>"></script>
<?php } ?>

<title>Pokedex <?= isset($data['title']) ? '- ' .$data['title'] : ''?>
</title>

</head>
<body>
<?php }?>