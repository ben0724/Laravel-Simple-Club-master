<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="nav-icon icon-speedometer"></i> Dashboard
            <span class="badge badge-primary">NEW</span>
            </a>
        </li>
        <!-- <li class="nav-title">Components</li> -->
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon cui-globe"></i> Clubs</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/clubs') }}">
                    <i class="nav-icon cui-list"></i> All Clubs</a>
                </li>
                @can('create', App\Club::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/clubs/create') }}">
                    <i class="nav-icon cui-star"></i> Add New</a>
                </li>
                @endcan
            </ul>
        </li>

        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon cui-people"></i> Club Board Members</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/club_board_members') }}">
                    <i class="nav-icon cui-list"></i> All Members</a>
                </li>
                @can('create', App\ClubBoardMember::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/club_board_members/create') }}">
                    <i class="nav-icon cui-star"></i> Add New</a>
                </li>
                @endcan
            </ul>
        </li>

        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon cui-briefcase"></i> Excel Files</a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/excel_files') }}">
                    <i class="nav-icon cui-list"></i> All Excel Files</a>
                </li>
                @can('upload', App\ExcelFile::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/excel_files/upload') }}">
                    <i class="nav-icon cui-star"></i> Upload</a>
                </li>
                @endcan
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/users') }}">
            <i class="nav-icon icon-people"></i> Users
            </a>
        </li>

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>