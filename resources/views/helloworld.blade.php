<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo progetto Laravel</title>
</head>
<body>
 <h1>{{$title}}</h1>  
 <p>{{$paragraph}}</p> 
 <hr>
 <ul>
  @forelse($usedtools as $tool)
   <li>{{$tool}}</li>
  @empty
   <p><b>Nessuno strumento</b></p>
  @endforelse
</ul> 
<ul>
  @forelse($frontendtools as $frontendtool)
   <li>{{$frontendtool}}</li>
  @empty
   <p><b>Nessuno strumento</b></p>
  @endforelse
</ul>  
 
 
 
 
</body>
</html>
