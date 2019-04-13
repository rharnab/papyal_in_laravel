<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
  <form action="{{ route('create-payment') }}" method="post">
    @csrf

    <input type="submit"  value="Pay Now">
  </form>
</body>
</html>