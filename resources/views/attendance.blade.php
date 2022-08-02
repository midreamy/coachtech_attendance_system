<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
</head>

<body>
  <header>
    <h1>Atte</h1>
    <div>
      <a href="/">ホーム</a>
      <a href="/attendance">日付一覧</a>
      <a href="/login">ログアウト</a>
    </div>
  </header>
  <div>
    <p>date</p>
  </div>
  <table>
    <tr>
      <th>名前</th>
      <th>勤務開始</th>
      <th>勤務終了</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>
        {{$item->user->name}}
      </td>
      <td>
        {{$item->start_time}}
      </td>
      <td>
        {{$item->end_time}}
      </td>
    </tr>
    @endforeach
  </table>
  <footer>
    Atte, inc.
  </footer>

</body>

</html>