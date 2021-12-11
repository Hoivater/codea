@section('menu_header')
<div class="container-fluid">
    <header class="d-flex justify-content-center py-3 header_top_lvl1">
              <ul class="nav nav-pills header_top pb-3">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    WIKI
                  </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('start') }}">На главную</a></li>
            <li><a class="dropdown-item" href="#">По популярности</a></li>
            <li><a class="dropdown-item" href="#">По алфавиту</a></li>
            <li><a class="dropdown-item" href="#">По дате добавления</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Про wikiLess</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link addDesc">Добавить</a></li>
        <li class="nav-item"><a href="{{ route('search') }}" class="nav-link">Поиск</a></li>
      </ul>
    </header>
  </div>