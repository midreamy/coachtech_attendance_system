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
      
      <div class="content__stamp">
        <form action="/attendance/start" method="post">
          @csrf
          @if(isset($is_attendance_start))
            <button type="submit" name="start_time" class="bg-white w-4/5 p-2">勤務開始</button>
          @else
            <button type="submit" name="start_time" class="bg-white text-gray-200 w-4/5 p-2" disabled>勤務開始</button>
          @endif
        </form>
      </div>
        
      <div class="content__stamp">
        <form action="/attendance/end" method="post">
          @csrf
          @if(isset($is_attendance_end))
            <button type="submit" name="end_time" class="bg-white w-4/5 p-2">勤務終了</button>
          @else
            <button type="submit" name="end_time" class="bg-white w-4/5 p-2 text-gray-200" disabled>勤務終了</button>
          @endif
        </form>
      </div>
        
      <div class="content__stamp">
        <form action="/attendance/rest/start" method="post">
          @csrf
          @if(isset($is_rest_start))
            <button type="submit" name="start_time" class="bg-white w-4/5 p-2">休憩開始</button>
          @else
            <button type="submit" name="start_time" class="bg-white w-4/5 p-2 text-gray-200" disabled>休憩開始</button>
          @endif
        </form>
      </div>

      <div class="content__stamp">
        <form action="/attendance/rest/end" method="post">
          @csrf
          @if(isset($is_rest_end))
            <button type="submit" name="end_time" class="bg-white w-4/5 p-2">休憩終了</button>
          @else
            <button type="submit" name="end_time" class="bg-white w-4/5 p-2 text-gray-200" disabled>休憩終了</button>
          @endif
        </form>
      </div>

    </div>

  </div>

  <footer class="h-8 flex items-center justify-center text-xs bg-white">
    <p>Atte,inc.</p>
  </footer>

  @endsection
