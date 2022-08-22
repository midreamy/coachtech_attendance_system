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
  <div class="content__date">
    <a href="{!! '/attendance/'.($num-1) !!}">&lt;</a>
    <p>{{ $fixed_date }}</p>
    <a href="{!! '/attendance/'.($num+1) !!}">&gt;</a>
  </div>

  <table class="content__data">
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
  {{ $attendances->links() }}
</div>

<footer>
  <p>Atte,inc.</p>
</footer>

@endsection