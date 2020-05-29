<!DOCTYPE html>
<html lang="en">
<head>
     @include('common/head_script') 
</head>
<body class="bg-light">
            @include('common/header')
                     
                   @yield('main_content')

            @include('common/footer') 
           
        @include('common/foot_script') 
    </body>
</html>
