<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show {{$client->clientName}}</title>
</head>
<body>
    <h1><strong>Client:</strong>{{$client->clientName}}</h1>
    <hr>
    <h1><strong>Phone:</strong>{{$client->phone}}</h1>
    <hr>
    <h1><strong>email:</strong>{{$client->email}}</h1>
    <hr>
    <h1><strong>website:</strong>{{$client->website}}</h1>
    <hr>
    <hr>
    <h1><strong>city:</strong>{{$client->city}}</h1>
    <hr>
    <h1><strong>active:</strong>{{ $client->active ? 'Yes' : 'No' }}</h1>
    <td>
  
      <p><img src="{{asset('assets/images/'.$client->image) }}"  width="100">
   </p>  
</td>
</body>
</html>