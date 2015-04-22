<ul class="side-menu">
    <li class="header">
        <i class="fa fa-home"></i>
        Getting Started
    </li>
    <li class="{{ Request::is('*/getting-started/installation') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['getting-started/installation']) }}">Installation</a>
    </li>
    <li class="header">
        <i class="fa fa-bolt"></i>
        Core Module
    </li>
    <li class="{{ Request::is('*/core-module/configuration') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['core-module/configuration']) }}">Configuration</a>
    </li>
    <li class="{{ Request::is('*/core-module/navigation') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['core-module/navigation']) }}">Navigation</a>
    </li>
    <li class="{{ Request::is('*/core-module/permissions') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['core-module/permissions']) }}">Permissions</a>
    </li>
    <li class="{{ Request::is('*/core-module/repositories') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['core-module/repositories']) }}">Repositories</a>
    </li>
    <li class="{{ Request::is('*/core-module/assetmanager') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['core-module/assetmanager']) }}">Asset Manager</a>
    </li>
    <li class="header">
        <i class="fa fa-tachometer"></i>
        Dashboard Module
    </li>
    <li class="{{ Request::is('*/dashboard-module/widgets') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['dashboard-module/widgets']) }}">Widgets</a>
    </li>
    <li class="header">
        <i class="fa fa-file-image-o"></i>
        Media Module
    </li>
    <li class="{{ Request::is('*/media-module/thumbnails') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['media-module/thumbnails']) }}">Thumbnails</a>
    </li>
    <li class="{{ Request::is('*/media-module/getting-a-thumbnail') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['media-module/getting-a-thumbnail']) }}">Getting a thumbnail</a>
    </li>
    <li class="{{ Request::is('*/media-module/refreshing-thumbnails') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['media-module/refreshing-thumbnails']) }}">Refreshing thumbnails</a>
    </li>
    <li class="{{ Request::is('*/media-module/events') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['media-module/events']) }}">Events</a>
    </li>
    <li class="{{ Request::is('*/media-module/relations') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['media-module/relations']) }}">Relations</a>
    </li>
    <li class="header">
        <i class="fa fa-bars"></i>
        Menu Module
    </li>
    <li class="{{ Request::is('*/menu-module/managing-menus') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['menu-module/managing-menus']) }}">Managing menus</a>
    </li>
    <li class="{{ Request::is('*/menu-module/displaying-menus') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['menu-module/displaying-menus']) }}">Displaying menus</a>
    </li>
    <li class="header">
        <i class="fa fa-cogs"></i>
        Setting Module
    </li>
    <li class="{{ Request::is('*/setting-module/adding-settings') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['setting-module/adding-settings']) }}">Adding settings</a>
    </li>
    <li class="{{ Request::is('*/setting-module/available-fields') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['setting-module/available-fields']) }}">Available fields</a>
    </li>
    <li class="{{ Request::is('*/setting-module/custom-fields') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['setting-module/custom-fields']) }}">Custom fields</a>
    </li>
    <li class="{{ Request::is('*/setting-module/reading-settings') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['setting-module/reading-settings']) }}">Reading settings</a>
    </li>
    <li class="{{ Request::is('*/setting-module/events') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['setting-module/events']) }}">Events</a>
    </li>
    <li class="header">
        <i class="fa fa-picture-o"></i>
        Themes
    </li>
    <li class="{{ Request::is('*/themes/usage') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['themes/usage']) }}">Usage</a>
    </li>
    <li class="header">
        <i class="fa fa-user"></i>
        User Module
    </li>
    <li class="{{ Request::is('*/user-module/drivers') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['user-module/drivers']) }}">Drivers</a>
    </li>
    <li class="{{ Request::is('*/user-module/users') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['user-module/users']) }}">Users</a>
    </li>
    <li class="{{ Request::is('*/user-module/events') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['user-module/events']) }}">Events</a>
    </li>
    <li class="header">
        <i class="fa fa-cogs"></i>
        Workshop Module
    </li>
    <li class="{{ Request::is('*/workshop-module/module-scaffold') ? 'active' : ''}}">
        <a href="{{ route('doc.show', ['workshop-module/module-scaffold']) }}">Module Scaffold</a>
    </li>
</ul>