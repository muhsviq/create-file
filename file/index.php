<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<body>
<div class="container">
<form action="file.php" method="POST">
  <div class="form-group">
    <label for="filetype">Select your file</label>
    <input type="text" class="form-control" name="fileName" placeholder="filename">
  </div>
  <div class="form-group">
    <label for="filetype">filetype</label>

    <select class="form-group" name="fileEx">
    	<option value=".jpg">img</option>
    	<option value=".mp3">mp3</option>
    	<option value=".css">css</option>
    </select>
    
  </div>
 <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>