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
      <th>休憩時間</th>
      <th>勤務時間</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>
        {{$item->name}}
      </td>
      <td>
        {{$item->start_time}}
      </td>
      <td>
        {{$item->end_time}}
      </td>
      <td>
        {{$item->break_time}}
      </td>
      <td>
        {{$item->working_hours}}
      </td>
    </tr>
  </table>
  <footer>
    Atte, inc.
  </footer>

</body>

</html>