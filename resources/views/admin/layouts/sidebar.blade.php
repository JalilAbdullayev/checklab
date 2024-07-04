@php use Illuminate\Support\Facades\Auth; @endphp
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                            <i class="ti-user"></i> Profil
                        </a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="ti-power-off"></i> Çıxış
                            </button>
                        </form>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.index') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">
                            Ana Səhifə
                        </span>
                    </a>
                </li>
                @if(Auth::user()->role == 0)
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.settings') }}" aria-expanded="false">
                            <i class="icons-Gears"></i>
                            <span class="hide-menu">
                            Parametrlər
                        </span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-account-multiple"></i>
                            <span class="hide-menu">
                            İstifadəçilər
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('admin.users.index') }}">
                                    İstifadəçilər
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.users.create') }}">
                                    Yeni İstifadəçi
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(Auth::user()->role < 2)
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.about') }}" aria-expanded="false">
                            <i class="icon-info"></i>
                            <span class="hide-menu">
                            Haqqımızda
                        </span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.contact') }}" aria-expanded="false">
                            <i class="icon-phone"></i>
                            <span class="hide-menu">
                            Əlaqə
                        </span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.messages.index') }}"
                           aria-expanded="false">
                            <i class="icon-envelope"></i>
                            <span class="hide-menu">
                            Mesajlar
                        </span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.subscribers.index') }}"
                           aria-expanded="false">
                            <i class="icon-people"></i>
                            <span class="hide-menu">
                            Abunəçilər
                        </span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-docs"></i>
                            <span class="hide-menu">
                            Bloq
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('admin.blog.index') }}">
                                    Bloq
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.create') }}">
                                    Yeni Bloq
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.category.index') }}">
                                    Kateqoriyalar
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.blog.tag.index') }}">
                                    Teqlər
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-bag"></i>
                            <span class="hide-menu">
                            Məhsullar
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('admin.products.index') }}">
                                    Məhsullar
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.products.create') }}">
                                    Yeni Məhsul
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.products.category.index') }}">
                                    Kateqoriyalar
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.products.tag.index') }}">
                                    Teqlər
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.products.age-groups.index') }}">
                                    Yaş Qrupları
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.order.all') }}"
                           aria-expanded="false">
                            <i class="icons-Shopping-Cart"></i>
                            <span class="hide-menu">
                            Sifarişlər
                        </span>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect waves-dark" href="{{ route('admin.order.index') }}"
                           aria-expanded="false">
                            <i class="icons-Shopping-Cart"></i>
                            <span class="hide-menu">
                            Sifarişlər
                        </span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
