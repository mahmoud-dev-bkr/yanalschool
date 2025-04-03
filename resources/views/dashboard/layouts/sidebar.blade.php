<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">
                <img src="{{ asset(getSettingValue('logo')) }}" style="width: 100px" alt="">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">



        <li class="menu-item {{ request()->routeIs('admin.home') ? 'active' : '' }} ">
            <a href="{{ route('admin.home') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">{{ __('Dashboard') }}</div>
            </a>
        </li>


        <li
            class="menu-item {{ request()->routeIs('admin.slider*') || request()->is('admin-panel/metatags/home') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="home">{{ __('Home') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.slider*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('Sliders') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('admin.meta', 'home') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'home') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- about --}}
        <li
            class="menu-item {{ request()->routeIs('admin.about') || request()->routeIs('admin.work') || request()->routeIs('admin.setting.profile') || request()->is('admin-panel/metatags/about') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="home">{{ __('About') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.about') ? 'active' : '' }}">
                    <a href="{{ route('admin.about') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('About Us') }}</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('admin-panel/metatags/about') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'about') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- serives --}}
        <li
            class="menu-item {{ request()->routeIs('admin.service*') || request()->routeIs('admin.servicecat*') || request()->is('admin-panel/metatags/service') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="home">{{ __('Services') }}</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ request()->routeIs('admin.service*') ? 'active' : '' }}">
                    <a href="{{ route('admin.service') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('Services') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/service') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'service') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- projects --}}
        {{-- blogs --}}
        <li
            class="menu-item {{ request()->routeIs('admin.blog*') || request()->is('admin-panel/metatags/blog') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-text"></i>
                <div data-i18n="home">{{ __('Blogs') }}</div>
            </a>
            <ul class="menu-sub">


                <li class="menu-item {{ request()->routeIs('admin.blog*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blog') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('Blogs') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/blog') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'blog') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ request()->routeIs('admin.category*') || request()->is('admin-panel/metatags/category') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-text"></i>
                <div data-i18n="home">{{ __('category') }}</div>
            </a>
            <ul class="menu-sub">


                <li class="menu-item {{ request()->routeIs('admin.category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('category') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/category') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'category') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ request()->routeIs('admin.meal*') || request()->is('admin-panel/metatags/meal') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-text"></i>
                <div data-i18n="home">{{ __('meal') }}</div>
            </a>
            <ul class="menu-sub">


                <li class="menu-item {{ request()->routeIs('admin.meal*') ? 'active' : '' }}">
                    <a href="{{ route('admin.meal') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('meal') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/meal') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'meal') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ request()->routeIs('admin.offer*') || request()->is('admin-panel/metatags/offer') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-text"></i>
                <div data-i18n="home">{{ __('offer') }}</div>
            </a>
            <ul class="menu-sub">


                <li class="menu-item {{ request()->routeIs('admin.offer*') ? 'active' : '' }}">
                    <a href="{{ route('admin.offer') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('offer') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/offer') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'offer') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('Metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>



        {{-- faqs --}}

        <li class="menu-item {{ request()->routeIs('admin.faq*') ? 'active' : '' }}">
            <a href="{{ route('admin.faq') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="socials">{{ __('Faqs') }}</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.course*') ? 'active' : '' }}">
            <a href="{{ route('admin.course') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="socials">{{ __('Course') }}</div>
            </a>
        </li>


        {{-- features --}}

        <li class="menu-item {{ request()->routeIs('admin.feature*') ? 'active' : '' }}">
            <a href="{{ route('admin.feature') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-diamond"></i>
                <div data-i18n="socials">{{ __('feature') }}</div>
            </a>
        </li>
        {{-- end features --}}

        {{-- how works --}}






        {{-- social media --}}
        <li class="menu-item {{ request()->routeIs('admin.social*') ? 'active' : '' }}">
            <a href="{{ route('admin.social') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-share-alt"></i>
                <div data-i18n="socials">{{ __('Social Media') }}</div>
            </a>
        </li>



        {{-- Customer rate --}}
        <li class="menu-item {{ request()->routeIs('admin.rate*') ? 'active' : '' }}">
            <a href="{{ route('admin.rate') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-star "></i>
                <div data-i18n="rates">{{ __('Customer Rates') }}</div>
            </a>
        </li>
        {{-- Partners --}}
        <li class="menu-item {{ request()->routeIs('admin.partener*') ? 'active' : '' }}">
            <a href="{{ route('admin.partener') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-user "></i>
                <div data-i18n="rates">{{ __('Our Partners') }}</div>
            </a>
        </li>

        {{-- counter --}}
        <li class="menu-item {{ request()->routeIs('admin.counter*') ? 'active' : '' }}">
            <a href="{{ route('admin.counter') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-tachometer"></i>
                <div data-i18n="counters">{{ __('Counters') }}</div>
            </a>
        </li>

        {{-- settings --}}
        <li class="menu-item {{ request()->routeIs('admin.setting') ? 'active' : '' }}">
            <a href="{{ route('admin.setting') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-abacus"></i>
                <div data-i18n="settings">{{ __('Settings') }}</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.language.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <div data-i18n="languages">{{ _trans('Languages') }}</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.translation.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-globe"></i>
                <siv data-i18n="translations">{{ _trans('Translations') }}</siv>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.meta', 'contact') ? 'active' : '' }}">
            <a href="{{ route('admin.meta', 'contact') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-text"></i>
                <div data-i18n="Analytics">{{ __('Contact Metatag') }}</div>
            </a>
        </li>

    </ul>
</aside>
