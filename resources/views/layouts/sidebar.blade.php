<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Web Test</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Route::is('soal1') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('soal1') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Soal 1</span>
                </a>
            </li>
            <li class="sidebar-item {{ Route::is('soal2') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('soal2') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Soal 2</span>
                </a>
            </li>
            <li class="sidebar-item {{ Route::is('soal3') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('soal3') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Soal 3</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
