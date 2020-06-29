<!DOCTYPE html>
<html>
  <head>
   
  </head>
  <body>
 <h1>gfgf</h1>
    
 <p>Hi</p>
                 <p>This is a info by all username</p>
                 @foreach ($flowers as $u)
    <h4>{{$u->name}}</h4>
    <h4>{{$u->color}}</h4>
@endforeach
  
  </body>
</html>