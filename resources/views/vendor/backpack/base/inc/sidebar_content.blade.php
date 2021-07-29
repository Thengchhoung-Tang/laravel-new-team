<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>@lang('custom.dashboard')</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> @lang('custom.authentications')</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>@lang('custom.users')</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>@lang('custom.roles')</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>@lang('custom.permissions')</span></a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>@lang('custom.settings')</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i>@lang('custom.logs')</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contact') }}'><i class='nav-icon la la-user'></i> @lang('custom.contacts')</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('account') }}'><i class='nav-icon la la-ghost'></i> @lang('custom.accounts')</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('news') }}'><i class='nav-icon la la-newspaper'></i> @lang('custom.news_ads')</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('languages') }}'><i class='nav-icon la la-language'></i> @lang('custom.languages')</a></li>