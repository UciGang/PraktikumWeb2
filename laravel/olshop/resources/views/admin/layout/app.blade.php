@include('admin.layout.top')
@include('admin.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            {{-- class untuk konten --}}
            @yield('content')
        </div>
    </main>
</div>
</div>
@include('admin.layout.bottom')