@extends('layouts.default')

@section('content')
<header>
  <h1>Atte</h1>
  <nav>
    <ul>
      <li><a href="/">ホーム</a></li>
      <li><a href="/attendance/0">日付一覧</a></li>
      <li>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button>ログアウト</button>
        </form>
      </li>
    </ul>
  </nav>
</header>

<div class="content">

  <div class="content__message">
    <p>{{ Auth::user()->name }}さんお疲れ様です！</p>
  </div>

  <div class="content__stamps">
    <table>
      <tr>
        <td>
          <div class="content__stamp">
            <form action="/attendance/start" method="post">
              @csrf
              @if(isset($is_attendance_start))
              <button type="submit" name="start_time">勤務開始</button>
              @else
              <button type="submit" name="start_time" disabled>勤務開始</button>
              @endif
            </form>
          </div>
        </td>

        <td>
          <div class="content__stamp">
            <form action="/attendance/end" method="post">
              @csrf
              @if(isset($is_attendance_end))
              <button type="submit" name="end_time">勤務終了</button>
              @else
              <button type="submit" name="end_time" disabled>勤務終了</button>
              @endif
            </form>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="content__stamp">
            <form action="/attendance/rest/start" method="post">
              @csrf
              @if(isset($is_rest_start))
              <button type="submit" name="start_time">休憩開始</button>
              @else
              <button type="submit" name="start_time" disabled>休憩開始</button>
              @endif
            </form>
          </div>
        </td>

        <td>
          <div class="content__stamp">
            <form action="/attendance/rest/end" method="post">
              @csrf
              @if(isset($is_rest_end))
              <button type="submit" name="end_time">休憩終了</button>
              @else
              <button type="submit" name="end_time" disabled>休憩終了</button>
              @endif
            </form>
          </div>
        </td>
      </tr>
    </table>
  </div>

</div>

<footer>
  <p>Atte,inc.</p>
</footer>

@endsection