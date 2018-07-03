<!DOCTYPE html>
<!-- File for taking user input data through textbox -->
<html lang="en">
<head>
  <title>PDF generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dude.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center">PDF generator</h2>
  <br>
  <form action ="pdf-action.php" method="post">
    <div class="form-group">
      <label for="comment">Please enter text here : </label>
      <textarea class="form-control" rows="5" id="comment" name="text_area" wrap="hard" required></textarea>
      <div id="hero">
      <button type="submit" class="btn btn-sample" name = "but">Convert to pdf</button>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-20XX Parth Poply</p>
    </div>

  </form>
</div>

</body>
</html>

