<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                @foreach($menuList as $menu)
                @if($menu->URL != NULL)
                <li>
                    <a href="{{url($menu->URL)}}" class="@if(isset($active_menu) &&  $active_menu == $menu->SLUG) active @endif">
                        <i class="{{$menu->ICON}}"></i>
                        <span data-key="t-dashboard">{{$menu->DESCRIPTION}}</span>
                    </a>
                </li>
                @else
                <li class="@if(isset($active_menu) &&  $active_menu == $menu->SLUG) mm-active @endif">
                    @php
                    $ariaexpanded = false;
                    if(isset($active_menu) && $active_menu == $menu->SLUG){
                    $ariaexpanded = true;
                    }
                    @endphp
                    <a href="javascript: void(0);" class="has-arrow @if(isset($active_menu) &&  $active_menu == $menu->SLUG) active @endif" aria-expanded="{{$ariaexpanded}}">
                        <i class="{{$menu->ICON}}"></i>
                        <span data-key="t-dashboard">{{$menu->DESCRIPTION}}</span>
                    </a>
                    @foreach($submenuList as $submenu)
                    @if($submenu->MENU_ID == $menu->MENU_ID)
                    <ul class="sub-menu mm-collapse @if(isset($active_menu) &&  $active_menu == $menu->SLUG) mm-show @endif" aria-expanded="false">
                        <li class="@if(isset($active_submenu) &&  $active_submenu == $submenu->SLUG) mm-active active @endif"><a class="@if(isset($active_submenu) && $active_submenu==$submenu->SLUG) active @endif" href="{{url($submenu->URL)}}" data-key="t-boxicons">{{$submenu->DESCRIPTION}}</a></li>
                    </ul>
                    @endif
                    @endforeach
                </li>
                @endif
                @endforeach
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>