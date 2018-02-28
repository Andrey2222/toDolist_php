<?php include_once 'engines/flash.php'; ?>
<?php include_once 'engines/todolist/select.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylesheets/f-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.css">

        <link rel="stylesheet" href="stylesheets/style.css">
        <link rel="stylesheet" href="stylesheets/todolists.css">
        <link rel="stylesheet" href="stylesheets/helpers.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="scripts/todo_actions.js"></script>
        <title>to do list</title>
    </head>
    <body>
        <?php include_once 'partials/_header_for_authorized.php' ?>
    <main>
      <?php setFlash(); ?>
      <div class="flash-js">
          
      </div>
      <section class="todolists">
      	<form class="" action="engines/todolist/create.php" method="post">
	        <h1 style="color: blue">GrowUp Todo</h1>
	        <button type="submit" class="add-todolist">
	          <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
	          Add new todo
	        </button>
    	</form>
        <div class="todolists_wrapper">
        	<?php 
        		foreach (selectTodolists() as $todolist) {
        			include 'partials/todolist/_todolist.php';
        		}
        	?>
        </div>
      </section>
    </main>
    <footer></footer>
    <script src='scripts/render.js'></script>
    </body>
</html>


