<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{--  Not how I would usually do this ;)  --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.usefathom.com/script.js" data-site="JHNCFLTH" defer></script>
</head>
<body class="h-screen">
<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 h-screen">
    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
         alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 h-full flex flex-col justify-between">
        <div>
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Support center</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Welcome to the support center. Here you can find all the information you need to get started with our services.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                <x-card
                        :title="$user->fullName()"
                        description="Give {{ $user->firstName }} a call on {{ $user->phoneNumber }} or send him an email: {{ $user->email }}">

                <span class="inline-flex items-center gap-x-1.5 rounded-md px-2 py-1 text-xs font-medium text-white">
                  <svg class="h-1.5 w-1.5 fill-green-400" viewBox="0 0 6 6" aria-hidden="true">
                    <circle cx="3" cy="3" r="3"/>
                  </svg>
                  Currently on shift!
                </span>
                </x-card>
            </div>
        </div>

        <div class="text-gray-400">
            This is an example project by <a href="https://rubenvanerk.com" class="underline hover:text-gray-200 transition"a >Ruben van Erk</a> to show how to use the Shiftbase API in Laravel |
            <a href="https://github.com/rubenvanerk/whos-on-shift" class="underline hover:text-gray-200 transition" target="_blank">GitHub</a>
        </div>
    </div>

</div>

</body>
</html>