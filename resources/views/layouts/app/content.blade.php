<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">@yield("h-title")</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0 text-black">@yield("card-title")</h5>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>