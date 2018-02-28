<?php
    include_once 'engines/flash.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/f-awesome/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-grid.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/todolists.css">
    <link rel="stylesheet" href="stylesheets/helpers.css">
    <title>to do list</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>  -->
    <script src="scripts/script.js"></script>
  </head>
  <body>
    <header>
      <section class="navbar navbar-inverse main-menu">
        <nav>
          <span class="btn btn-primary btn-lg active hidden" id='authorize'>Вход</span>
          <span class="btn btn-primary btn-success btn-lg hidden" id='register_link'>Регистрация</span>
          <span class="active hidden" id="my_lists">Мои дела</span>
          <span class="hidden" id="exit">Выйти</span>
        </nav>
      </section>
    </header>
    <main class="fon">
      <?php setFlash(); ?>
      <section class="authentication hidden">
       <? include_once 'partials/_registration.php' ?>
       <? include_once 'partials/_login.php' ?>
      </section>
      <section class="todolists hidden">
        <h1>GrowUp Todo</h1>
        <button type="button" class="add-todolist">
          <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
          Add new todo
        </button>
        <div class="todolists_wrapper"></div>
      </section>
    </main>
    <footer>
    </footer>
    <!-- <script src="scripts/auth.js"></script>
    <script src="scripts/password-conf-pass.js"></script>
    <script src="scripts/email_checker.js"></script> -->
    <script src='scripts/render.js'></script>
    
  </body>
</html>
