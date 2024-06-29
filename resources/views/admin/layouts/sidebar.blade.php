<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Steave Gection <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-user"></i> Profil
                        </a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="pages-login.html" class="dropdown-item">
                            <i class="ti-power-off"></i> Çıxış
                        </a>
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
				<li>
					<a class="waves-effect waves-dark" href="{{ route('admin.settings') }}" aria-expanded="false">
						<i class="icons-Gears"></i>
						<span class="hide-menu">
                            Parametrlər
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
					<a class="waves-effect waves-dark" href="{{ route('admin.messages.index') }}" aria-expanded="false">
                        <i class="icon-envelope"></i>
                        <span class="hide-menu">
                            Mesajlar
                        </span>
                    </a>
                </li>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">
                            Dashboard
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="index-2.html">
                                Minimal
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
