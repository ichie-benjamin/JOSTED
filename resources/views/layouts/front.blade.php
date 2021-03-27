<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')


<body>

<div id="app">

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>DeltaInstitute<span>]</span></a></div>

@include('layouts.partials.sideleft')

<!-- ########## START: HEAD PANEL ########## -->
    @include('layouts.partials.header')
    <!-- ########## END: HEAD PANEL ########## -->
    @yield('content')
</div>


@include('layouts.partials.foot')
</body>
</html>
