<?php include_once 'engines/flash.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylesheets/f-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="stylesheets/style.css">
        <link rel="stylesheet" href="stylesheets/todolists.css">
        <link rel="stylesheet" href="stylesheets/helpers.css">
        <title>to do list</title>
    </head>
    <body>
        <?php include_once 'partials/_header_for_authorized.php' ?>
    <main>
      <?php setFlash(); ?>
      <section class="todolists">
        <h1>GrowUp Todo</h1>
        <button type="button" class="add-todolist">
          <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
          Add new todo
        </button>
        <div class="todolists_wrapper"></div>
      </section>
    </main>
    <footer></footer>
    <script src='scripts/render.js'></script>
    </body>
</html>


