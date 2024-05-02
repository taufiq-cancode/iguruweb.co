@php
    $route = Route::current()->getName();
    $prefix = Route::current()->getPrefix();
@endphp

<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark header-effect-shrink header-no-border-bottom" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}" style="height: 100px;">
    <div class="header-body border-top-0 bg-dark box-shadow-none" style="">
        <div class="header-container container" style="height: 100px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="iGuruWeb.co" width="140" src="img/iguru-long.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-font-md header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        
                                        <li>
                                            <a class="{{ ($route == 'home')?'active':''}}" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'about')?'active':''}}" href="{{ route('about') }}">
                                                About Us
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'services' || $route == 'licensing' || $route == 'igaming-consult')?'active':''}}" href="{{ route('services') }}">
                                                Our Services
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'games')?'active':''}}" href="{{ route('games') }}">
                                                Our Games
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'team')?'active':''}}" href="{{ route('team') }}">
                                                Our Team
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'join')?'active':''}}" href="{{ route('join') }}">
                                                Join Our Team
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'faqs')?'active':''}}" href="{{ route('faqs') }}">
                                                FAQ
                                            </a>
                                        </li>

                                        <li>
                                            <a class="{{ ($route == 'contact')?'active':''}}" href="{{ route('contact') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">										
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">											
                                <a href="https://www.linkedin.com/company/iguru-web-retail-solutions-limited/" target="_blank" class="text-decoration-none" data-focus="headerSearch" aria-label="Search"><i class="fab fa-linkedin-in header-nav-top-icon"></i></a>																			
                            </div>									
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>