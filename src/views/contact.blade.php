<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact</title>
</head>
<body>
    <form action="{{route('contact')}}" method="POST">@csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
          </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Your Message</label>
           <textarea name="msg" class="form-control"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
</body>
</html>