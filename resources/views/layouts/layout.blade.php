<!DOCTYPE HTML>
<html lang="eng">
    <head>
        @include('layouts._head')
    </head>    

<body>

    <div class="container">

    	@include('layouts._navigation')

        @include('errors.error')

        @yield('content')
        
    </div> 

</body>
</html>

