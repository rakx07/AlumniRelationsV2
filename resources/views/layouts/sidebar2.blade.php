<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Admin Dashboard</div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#alumniSubmenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-light">Alumni</a>
        <ul class="collapse list-unstyled" id="alumniSubmenu">
            <li>
                <a href="{{ route('alumni.add') }}" class="list-group-item list-group-item-action bg-light">Add Alumni</a>
            </li>
            <li>
                <a href="{{ route('alumni.update') }}" class="list-group-item list-group-item-action bg-light">Update Alumni</a>
            </li>
            <li>
                <a href="{{ route('alumni.delete') }}" class="list-group-item list-group-item-action bg-light">Delete Alumni</a>
            </li>
        </ul>
        <a href="{{ route('reports') }}" class="list-group-item list-group-item-action bg-light">Reports</a>
        <a href="{{ route('upload') }}" class="list-group-item list-group-item-action bg-light">Upload</a>
    </div>
</div>
