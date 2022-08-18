<x-guest-layout>
  <header class="flex items-center justify-between h-12  w-full bg-white">
    <h1 class="flex text-xl font-bold my-4 ml-8 mr-auto">Atte</h1>
    <nav>
      <ul class="flex list-none text-sm">
        <li><a href="/" class="block px-4">ホーム</a></li>
        <li><a href="/attendance/0" class="block px-4">日付一覧</a></li>
        <li>
          <form action="{{ route('logout') }}" method="post">
        @csrf
            <button class="px-4">ログアウト</button>
          </form>
        </li>
      </ul>
    </nav>
  </header>

  <div>

    <div class="flex justify-center">
      <p class="my-8 font-bold">{{ Auth::user()->name }}さんお疲れ様です！</p>
    </div>

    <div class="flex content-center justify-center flex-wrap gap-8">
      
      <div class="w-1/2 p-2 justify-end">
        <form action="/attendance/start" method="post">
          @csrf
          @if(isset($is_attendance_start))
            <button type="submit" name="start_time" class="bg-white w-4/5 p-2">勤務開始</button>
          @else
            <button type="submit" name="start_time" class="bg-white text-gray-200 w-4/5 p-2" disabled>勤務開始</button>
          @endif
        </form>
      </div>
      
      <div class="w-1/2 p-2">
        <form action="/attendance/end" method="post">
          @csrf
          @if(isset($is_attendance_end))
            <button type="submit" name="end_time" class="bg-white w-4/5 p-2">勤務終了</button>
          @else
            <button type="submit" name="end_time" class="bg-white w-4/5 p-2 text-gray-200" disabled>勤務終了</button>
          @endif
        </form>
      </div>
      
      <div class="w-1/2 p-2">
        <form action="/attendance/rest/start" method="post">
          @csrf
          @if(isset($is_rest_start))
          <button type="submit" name="start_time" class="bg-white w-4/5 p-2">休憩開始</button>
          @else
          <button type="submit" name="start_time" class="bg-white w-4/5 p-2 text-gray-200" disabled>休憩開始</button>
          @endif
        </form>
      </div>

      <div class="w-1/2 p-2">
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

</x-guest-layout>
