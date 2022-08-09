<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post.php</title>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

            
<form action="" method="post" id="regform">
<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" name="username" placeholder="Enter username">
  </div>
  <div class="mb-3 mt-3">
    <label for="rollno" class="form-label">Roll No:</label>
    <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">class:</label>
    <input type="text" class="form-control" id="class" placeholder="Enter class" name="class">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>
 

  <button type="submit" name="registerbtn" id="submitbtn" class="btn btn-primary">Submit</button>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#submitbtn").click(function(){

$.ajax('/jquery/submitData', {
    type: 'POST',  // http method
    data: { myData: 'This is my data.' },  // data to submit
    success: function (data, status, xhr) {
        $('p').append('status: ' + status + ', data: ' + data);
    },
    error: function (jqXhr, textStatus, errorMessage) {
            $('p').append('Error' + errorMessage);
    }
});

  });
});
</script>

</form>
</body>
</html>