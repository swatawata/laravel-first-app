<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>一覧表示</h1>

  <table>
  <tr>
  <th>ID</th>
  <th>名前</th>
  <th>電話番号</th>
  <th>メールアドレス</th>
  </tr>
  @foreach($members as $member)
  <tr>
  <td>{{$member->id}}</td>
  <td>{{$member->name}}</td>
  <td>{{$member->telephone}}</td>
  <td>{{$member->email}}</td>
  </tr>
  @endforeach
  </table>
  
</body>
</html>