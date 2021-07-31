<!-- This file is used to store topbar (right) items -->
<div>{{ trans('custom.welcome_back') }}</div>
<li class="nav-item dropdown pr-0">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        @php 
            $sessionLocale = session()->get('locale') ?? '';            
            if ($sessionLocale) {
                app()->setLocale($sessionLocale);
            }
            $locale = app()->getLocale();
        @endphp 
        @switch($locale)
            @case('en')
                <img src="{{ asset('flag/en-lang.png') }}"/>
                @break 
            @case('kh')
                <img src="{{ asset('flag/kh-lang.png') }}" />
                @break 
            @default
                <img src="{{ asset('flag/en-lang.png') }}"/>
        @endswitch
    </a>
    <div class="dropdown-menu dropdown-menu-right mr-4 pb-1 pt-1">
        <a class="dropdown-item" href="{{ url('lang/en') }}"> <img src="{{ asset('flag/en-lang.png') }}" class="mr-2" /> @lang('custom.langenglish') </a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item" href="{{ url('lang/kh') }}"> <img src="{{ asset('flag/kh-lang.png') }}" class="mr-2" /> @lang('custom.langkhmer') </a>
    </div>
</li>
<li class="nav-item d-md-down-none"><a class="nav-link" href="{{ backpack_url('log') }}"><i class="la la-bell"></i><span class="badge badge-pill badge-danger">5</span></a></li>
{{-- <li class="nav-item d-md-down-none"><a class="nav-link" href="{{ backpack_url('contact') }}"><i class="la la-list"></i></a></li> --}}
{{-- <li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-map"></i></a></li> --}}
