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
    <p>さんお疲れ様です！</p>
  </div>
  <div>
    <form action="/attendance/start" method="post">
      @csrf
      <button type="submit" name="start_time">勤務開始</button>
    </form>
    <form action="/attendance/end" method="post">
      @csrf
      <button type="submit" name="end_time">勤務終了</button>
    </form>
    <button>休憩開始</button>
    <button>休憩終了</button>
  </div>
  <footer>
    Atte, inc.
  </footer>

</body>

</html>