<!DOCTYPE html>
<html lang="ja">

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
      <a href="/attendance/0">日付一覧</a>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>ログアウト</button>
      </form>
    </div>
  </header>
  <div>
    <a href="{!! '/attendance/'.($num-1) !!}">&lt;</a>
    <p>{{ $fixed_date }}</p>
    <a href="{!! '/attendance/'.($num+1) !!}">&gt;</a>
  </div>
  <table>
    <tr>
      <th>名前</th>
      <th>勤務開始</th>
      <th>勤務終了</th>
      <th>休憩時間</th>
      <th>勤務時間</th>
    </tr>
    @foreach($attendances as $attendance)
    <tr>
      <td>
        {{$attendance->user->name}}
      </td>
      <td>
        {{$attendance->start_time}}
      </td>
      <td>
        {{$attendance->end_time}}
      </td>
      <td>
        {{$attendance->rest_sum}}
      </td>
      <td>
        {{$attendance->work_time}}
      </td>
    </tr>
    @endforeach
  </table>
  <footer>
    Atte, inc.
  </footer>

</body>

</html>