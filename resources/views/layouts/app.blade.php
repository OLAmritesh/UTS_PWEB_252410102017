<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Dolano.id</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:wght@400..700&family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config={
            theme:{
                extend:{
                    colors:{
                        hijau:'#005219',
                        hijauMuda:'#679876',
                        orange:'#9d4300',
                        orangeMuda:'#fd761a',
                        bg:'#f9f9f9',
                        abu:'#f3f3f4',
                        garis:'#bfc9be',
                        teks:'#1a1c1c',
                        redup:'707a70',
                        putih:'#ffffff',
                    },
                    fontFamily:{
                        judul:['Poltawski Nowy', 'serif'],
                        isi:['Poppins', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        .ikon{font-family: 'Material Symbols Outlined'; font-size:20px; line-height:1; display:inline-block;}
    </style>
</head>
<body class="bg-bg text-teks font-isi min-h-screen flex flex-col">
    @isset($username)
        <x-navbar :username="$username"/>
    @endisset

    <main class="flex-1">
        @yield('content')
    </main>
    <x-footer/>
</body>
</html>
