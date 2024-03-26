<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">country_id</th>
      <th scope="col">country_name</th>
      <th scope="col">league_name</th>
      <th scope="col">league_season</th>
      <th scope="col">league_logo</th>
      <th scope="row">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ConverterJson as $JsonConf)
    <tr>
      <th scope="row">{{$JsonConf["country_id"]}}</th>
      <th scope="row">{{$JsonConf["country_name"]}}</th>
      <th scope="row">{{$JsonConf["league_name"]}}</th>
      <th scope="row">{{$JsonConf["league_season"]}}</th>
      <th scope="row"><img src="{{$JsonConf['league_logo']}}" alt="" width='50px'></th>
      
    </tr>
    @endforeach

  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>