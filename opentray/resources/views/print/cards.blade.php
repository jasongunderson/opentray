<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OpenTray</title>
  <link href="{{ asset('css/cards.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  @foreach($residents as $resident)
  <table>
    <tr>
      <td>Name</td>
      <td class="info">{{$resident->fname}} {{$resident->lname}}</td>
      <td>Room</td>
      <td class="info">{{$resident->room}}</td>
    </tr>
    <tr>
      <td>Diet</td>
      <td class="info">{{$resident->dine}}</td>
      <td>Preferences</td>
      <td class="info">{{$resident->likes}}</td>
    </tr>
    <td>Dislikes</td>
    <td class="info">{{$resident->dislikes}}</td>
    <td>Allergies</td>
    <td class="info">{{$resident->allergies}}</td>
    </tr>
    <tr>
      <td>Comments</td>
      <td colspan="3" class="info"> {{$resident->comment}}</td>
    </tr>
  </table>
  @endforeach
</body>

</html>