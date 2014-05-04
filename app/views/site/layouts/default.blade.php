<!doctype html>
<html>
<head>
    @include('site.includes.head')
</head>
<body>

    @if (Auth::check())
        <div>menu</div>
        <div>rechter menu</div>
        <div>content</div>
        <div>footer</div>
    @else
        @include('site.pages.login')
    @endif



    @include('site.includes.footer')
</body>
</html>