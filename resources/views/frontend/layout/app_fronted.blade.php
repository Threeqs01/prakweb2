@include('admin.layout.top_fronted')
@include('admin.layout.menu_fronted')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
#yield('content')
        </div>
    </main>
</div>
</div>

@include('admin.layout.bottom_fronted')
