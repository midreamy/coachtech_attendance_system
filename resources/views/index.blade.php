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
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>ログアウト</button>
      </form>

    </div>
  </header>
  <div>
    <p>{{$user->name}}さんお疲れ様です！</p>
  </div>
  <div>
    <form action="/attendance/start" method="post">
      @csrf
      @if(isset($is_attendance_start))
      <button type="submit" name="start_time">勤務開始</button>
      @else
      <button type="submit" name="start_time" disabled>勤務開始</button>
      @endif
    </form>
    <form action="/attendance/end" method="post">
      @csrf
      @if(isset($is_attendance_end))
      <button type="submit" name="end_time">勤務終了</button>
      @else
      <button type="submit" name="end_time" disabled>勤務終了</button>
      @endif
    </form>
    <form action="/attendance/rest/start" method="post">
      @csrf
      @if(isset($is_rest_start))
      <button type="submit" name="start_time">休憩開始</button>
      @else
      <button type="submit" name="start_time" disabled>休憩開始</button>
      @endif
    </form>
    <form action="/attendance/rest/end" method="post">
      @csrf
      @if(isset($is_rest_end))
      <button type="submit" name="end_time">休憩終了</button>
      @else
      <button type="submit" name="end_time" disabled>休憩終了</button>
      @endif
    </form>
  </div>
  <footer>
    Atte, inc.
  </footer>

</body>

</html>