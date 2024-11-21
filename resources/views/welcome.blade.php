<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute top-0 left-0 w-screen h-screen object-cover"
            src="https://wallpapers.com/images/hd/anime-4k-pictures-x8d1zlisj9bwy4ta.jpg"alt=" background" />
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">

                    </div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Inicia sesión
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Registrate
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                <img src="https://i.pinimg.com/originals/0d/a5/c1/0da5c191106369c03467060ffede009b.png"
                                    alt="Laravel documentation screenshot"
                                    class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                    onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        " />
                                <img src="https://i.pinimg.com/originals/0d/a5/c1/0da5c191106369c03467060ffede009b.png"
                                    alt="Laravel documentation screenshot"
                                    class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />

                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">


                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Dagron Ball</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            Akira Toriyama nos trajo el mejor Dragon Ball que se ha hecho. Dragon Ball Z
                                            es el mejor anime de la historia. Su animación es superior que el primer
                                            Dragon Ball. El guión de este anime es diferente al de su antecesora este es
                                            más evolución y poder. La narración es impresionante. La banda sonora está
                                            perfecta en sus momentos dramáticos, épicos etc.
                                        </p>
                                    </div>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>

                        <a href=""
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-5xl font-semibold text-black dark:text-white">Zona Anime</h2>
                            </div>


                        </a>

                        <a href=""
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <img src="https://img.cdn-pictorem.com/uploads/collection/I/IB5PAB9RBI/900_Anime_3_1608090028.8527.jpg"
                                class="hidden aspect-video h-20 w-20 flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Naruto</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    La serie está centrada en
                                    Naruto, un joven ninja de la Villa de la Hoja que tiene en su interior al
                                    terrorífico Zorro de Nueve Colas, que ha crecido huérfano y que tiene por sueño ser
                                    el Hokage (el jefe ninja de la Villa de la Hoja).
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <img src="https://www.adnradio.cl/resizer/v2/MOBYVPOADBPONBEVUTL5WXGN6A.jpg?auth=bbee095e49544647dbcfbc96446cf8494273ad45a669216295e95aae599ce7c8&width=768&height=576&quality=70&smart=true"
                                alt="Laravel documentation screenshot"
                                class="hidden aspect-video h-20 w-20 flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />


                            <div class="">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Demon Slayer</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Demon Slayer es una historia creada por Koyoharu Gotoge, siendo publicada en 2016 y
                                    teniendo un estreno en el terreno del anime en abril de este año, logrando
                                    sorprender con su primera temporada, la cual acaba de finalizar y que vale la pena
                                    destacar porque es tan primordial no perderle la pista.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Zona Anime Todos Los Derechos Reservados
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
