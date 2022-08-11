<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <title>The state dev</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <style>
        [x-cloak]{
            display: none;
        }
    </style>
</head>
<body class="overflow-x-hidden" x-cloak x-data="{
    mobileNav: false,
    showModal: false,
    callModal: false,
    enrollModal: false,
    mobileModal: false,
    softModal: false,

    webModal:()=>{
        if(enrollModal === true){
            enrollModal = false;
            callModal = true;
        }else{
            callModal = true;

        }
    },

    mbModal:()=>{
        if(mobileModal === true){
            mobileModal = false;
            callModal = true;
        }else{
            callModal = true;

        }
    },

    pcModal:()=>{
        if(softModal === true){
            softModal = false;
            callModal = true;
        }else{
            callModal = true;

        }
    }
    }">




       
        
 @include('layouts.navbar')
       
       </header>
       {{-- body section--}}
       @yield('content')
   
      
   
       <footer class="bg-[#0B2347] py-2">
           @include('layouts.footer')
       </footer>

</body>
</html>