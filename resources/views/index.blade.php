<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search Unique Code </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Search Unique Code</h2><br  />
      <form method="post" action="/AMS/public/search">
    <input type="text" name="uniqueCode" placeholder="Unique Code">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Search">
</form>
    </div>
    <div>
     
    </div>
  </body>
</html>