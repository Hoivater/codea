@section('menu_header')
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none logo_ga">
        <img src = "{{ route('info') }}/images/data/logo.svg" alt="wiki150">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('info') }}" class="nav-link px-2 link-secondary"><i class="bi bi-alarm-fill"></i>Главная</a></li>
        <li><a href="#" class="nav-link px-2 addDesc">Добавить</a></li>
        <li><a href="{{ route('sort', 'on_desc') }}" class="nav-link px-2 link-dark">Новые теги</a></li>
        <li><a href="{{ route('sort', 'on_asc') }}" class="nav-link px-2 link-dark">Старые теги</a></li>
        <li><a href="{{route('sort', 'alphavit')}}" class="nav-link px-2 link-dark">По алфавиту</a></li>
        <li><a href="{{ route('searchTegs') }}" class="nav-link px-2 link-dark">Поиск</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Войти</button>
        <button type="button" class="btn btn-primary">Регистрация</button>
      </div>
    </header>
</div>