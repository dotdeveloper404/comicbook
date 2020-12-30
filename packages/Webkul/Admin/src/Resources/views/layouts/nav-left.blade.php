<div class="navbar-left">
    <ul class="menubar">
        @php
            $remove_item = ['velocity', 'promotions', 'cms', 'settings', 'configuration'];
        @endphp
        @foreach ($menu->items as $menuItem)
            @if(!in_array($menuItem['key'], $remove_item))
                <li class="menu-item {{ $menu->getActive($menuItem) }}">
                    <a href="{{ count($menuItem['children']) ? current($menuItem['children'])['url'] : $menuItem['url'] }}">
                        <span class="icon {{ $menuItem['icon-class'] }}"></span>
                        
                        <span>{{ trans($menuItem['name']) }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>