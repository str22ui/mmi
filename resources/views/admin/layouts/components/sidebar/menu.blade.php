<li class="sidebar-title">
    Halo, {{ Auth::check() ? Auth::user()->name : 'Guest' }}
</li>
{{-- Dashboard --}}
<li class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
    <a href="{{ route('admin.index') }}"  class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Home</span>
    </a>
</li>

@include('admin.layouts.components.sidebar.masterRumah')
@include('admin.layouts.components.sidebar.dataKonsumen')
{{-- @include('admin.layouts.components.sidebar.galleryDropdown')
@include('admin.layouts.components.sidebar.masterDropdown') --}}


{{-- teacher --}}

<li class="sidebar-item {{ Request::is('admin/agent*') || Request::is('admin/createAgent*') || Request::is('admin/editAgent*') || Request::is('admin/showAgent*') ? 'active' : '' }}">
    <a href="{{ route('admin.agent') }}" class='sidebar-link'>

        <i class="bi bi-person-rolodex"></i>
        <span>Agent</span>
    </a>
</li>

{{-- Student --}}
<li class="sidebar-item {{ Request::is('admin/report*') || Request::is('admin/createReport*') || Request::is('admin/editReport*') || Request::is('admin/showReport*') ? 'active' : '' }}">
    <a href="{{ route('admin.report') }}" class='sidebar-link'>
        <i class="bi bi-journal-album"></i>
        <span>Call Report</span>
    </a>
</li>

{{-- announce --}}

<li class="sidebar-item">
    <form method="POST" action="/logout" id="logout">
        @csrf
        <a href="" class='sidebar-link'>
            <i class="bi bi-box-arrow-left text-danger"></i>
            <span>Logout</span>
        </a>
    </form>
</li>
