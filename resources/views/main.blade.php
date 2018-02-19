<!DOCTYPE html>
@include("pages.head")
<body>
    @include("pages.menu")
    <div class="container-fluid">
        @yield("content")
    </div>
    <div class="container-fluid">
        @yield("detail")
    </div>
</body>
</html>
