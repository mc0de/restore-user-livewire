<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('availabilty_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/availabilties*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.availabilties.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-calendar-alt">
                            </i>
                            {{ trans('cruds.availabilty.title') }}
                        </a>
                    </li>
                @endcan
                @can('declaration_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/declarations*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.declarations.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-money-bill-wave">
                            </i>
                            {{ trans('cruds.declaration.title') }}
                        </a>
                    </li>
                @endcan
                @can('orderparticipation_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/orderparticipations*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.orderparticipations.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-users">
                            </i>
                            {{ trans('cruds.orderparticipation.title') }}
                        </a>
                    </li>
                @endcan
                @can('order_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/orders*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.orders.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-hands-helping">
                            </i>
                            {{ trans('cruds.order.title') }}
                        </a>
                    </li>
                @endcan
                @can('ordercompetence_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/ordercompetences*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.ordercompetences.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-align-justify">
                            </i>
                            {{ trans('cruds.ordercompetence.title') }}
                        </a>
                    </li>
                @endcan
                @can('system_calendar_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/system-calendars*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.system-calendars.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon far fa-calendar">
                            </i>
                            {{ trans('cruds.systemCalendar.title') }}
                        </a>
                    </li>
                @endcan
                @can('content_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/content-categories*")||request()->is("admin/content-tags*")||request()->is("admin/content-pages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-book">
                            </i>
                            {{ trans('cruds.contentManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('content_category_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/content-categories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.content-categories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.contentCategory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('content_tag_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/content-tags*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.content-tags.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-tags">
                                        </i>
                                        {{ trans('cruds.contentTag.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('content_page_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/content-pages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.content-pages.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file">
                                        </i>
                                        {{ trans('cruds.contentPage.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('faq_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/faq-categories*")||request()->is("admin/faq-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-question">
                            </i>
                            {{ trans('cruds.faqManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('faq_category_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faq-categories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faq-categories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.faqCategory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('faq_question_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/faq-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.faq-questions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-question">
                                        </i>
                                        {{ trans('cruds.faqQuestion.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.audit-logs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file-alt">
                                        </i>
                                        {{ trans('cruds.auditLog.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('configuration_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/locations*")||request()->is("admin/competences*")||request()->is("admin/ordertypes*")||request()->is("admin/participationstatuses*")||request()->is("admin/declarationstatuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.configuration.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('location_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/locations*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.locations.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-map-marker">
                                        </i>
                                        {{ trans('cruds.location.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('competence_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/competences*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.competences.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-align-justify">
                                        </i>
                                        {{ trans('cruds.competence.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('ordertype_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/ordertypes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.ordertypes.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-align-justify">
                                        </i>
                                        {{ trans('cruds.ordertype.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('participationstatus_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/participationstatuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.participationstatuses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-align-justify">
                                        </i>
                                        {{ trans('cruds.participationstatus.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('declarationstatus_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/declarationstatuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.declarationstatuses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-align-justify">
                                        </i>
                                        {{ trans('cruds.declarationstatus.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li class="items-center">
                    <a class="{{ request()->is("admin/messages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.messages.index") }}">
                        <i class="far fa-fw fa-envelope c-sidebar-nav-icon">
                        </i>
                        {{ __('global.messages') }}
                        @if($unreadConversations['all'])
                            <span class="text-xs bg-rose-500 text-white px-2 py-1 rounded-xl font-bold float-right">
                                {{ $unreadConversations['all'] }}
                            </span>
                        @endif
                    </a>
                </li>


                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                    @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}" class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>