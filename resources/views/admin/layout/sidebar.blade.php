<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li><a href="{{ route('admin.index') }}" >Dashboard</a></li>
                <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><span class="hide-menu">Users <span class="badge rounded-pill bg-cyan ms-auto">{{\App\Models\User::countUsers()}}</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('user.create') }}">Add Users</a></li>
                        <li><a href="{{ route('user.index') }}">Users List</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><span class="hide-menu">Goals</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('goal.create') }}">Add Goal</a></li>
                        <li><a href="{{ route('goal.index') }}">Goals List</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><span class="hide-menu">Pages</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('page.create') }}">Add Page</a></li>
                        <li><a href="{{ route('page.index') }}">Page List</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><span class="hide-menu">Blogs</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('blog.create') }}">Add Blog</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog List</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('donation.index') }}" >Donations</a></li>
                <li><a href="{{ route('petition.index') }}" >Petitions</a></li>
                <li><a href="#" >Settings</a></li>
            </ul>
        </nav>
    </div>
</aside>