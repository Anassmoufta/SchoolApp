{{--Gérer les paramètres--}}
<li class="nav-item">
    <a href="{{ route('settings') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['settings',]) ? 'active' : '' }}"><i class="icon-gear"></i> <span>Paramètres</span></a>
</li>

{{--Épingles--}}
<li class="nav-item nav-item-submenu {{ in_array(Route::currentRouteName(), ['pins.create', 'pins.index']) ? 'nav-item-expanded nav-item-open' : '' }} ">
    <a href="#" class="nav-link"><i class="icon-lock2"></i> <span> Épingles</span></a>

    <ul class="nav nav-group-sub" data-submenu-title="Gérer les épingles">
        {{--Générer des épingles--}}
            <li class="nav-item">
                <a href="{{ route('pins.create') }}"
                   class="nav-link {{ (Route::is('pins.create')) ? 'active' : '' }}">Générer des épingles</a>
            </li>

        {{--    Épingles valides/invalides  --}}
        <li class="nav-item">
            <a href="{{ route('pins.index') }}"
               class="nav-link {{ (Route::is('pins.index')) ? 'active' : '' }}">Voir les épingles</a>
        </li>
    </ul>
</li>
