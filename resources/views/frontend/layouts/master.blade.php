<!DOCTYPE html>
<html lang="zxx">

@include('frontend.theme.header')

<body>
    <div class="header-most-top">
        <p>Grocery Mart</p>
    </div>

    {{-- Header Navbar --}}
    @include('frontend.theme.headerNavbar')

    <!-- navigation -->
    @include('frontend.theme.navbar')

    <!-- banner -->
    @include('frontend.theme.banner')
    <!-- //banner -->

    @yield('frontend.content')

    <!-- News Letter -->
    @include('frontend.theme.newsLetter')

    <!-- Footer -->
    @include('frontend.theme.footer')

    {{-- Footer Script --}}
    @include('frontend.theme.footerScript')

</body>

</html>
