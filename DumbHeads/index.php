 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    
    .box{
    width:600px;
    height: auto;
    display: block;
    margin: auto;
    margin-top:100px;
    background-color: gainsboro;
    padding: 20px;
    border-radius: 10px;
}</style>
</head>

<body>

<div class="container">
    <div class="col-3"></div>
    <div class="col-6 box">
  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
  </div>
      <button class="btn btn-primary">Send</button>
</form>
        </div>
     <div class="col-3"></div>
</div>

</body>
</html> 