<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 Contact Form</title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<div class="container mt-5">
 
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

    <x-contact />
</div>
 
</body>
</html>