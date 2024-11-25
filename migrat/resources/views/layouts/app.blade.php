<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite(['resources/css/out.css','resources/js/app.js'])
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
   <div class="bg-white">
       <header class="absolute inset-x-0 top-0 z-50">
         <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
           <div class="flex lg:flex-1">
             <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
               <span class="sr-only">Your Company</span>
               <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
             </a>
           </div>
           <div class="flex lg:hidden">
             <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
               <span class="sr-only">Open main menu</span>
               <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
               </svg>
             </button>
           </div>
           <div class="hidden lg:flex lg:gap-x-12">
             <a href="{{ route('suplier.index') }}" class="text-sm font-semibold text-gray-900">Suplier</a>
             <a href="{{ route('barang.index') }}" class="text-sm font-semibold text-gray-900">Stok</a>
             <a href="{{ route('barang_masuk.index') }}" class="text-sm font-semibold text-gray-900">Barang Masuk</a>
             <a href="{{ route('barang_keluar.index') }}" class="text-sm font-semibold text-gray-900">Barang Keluar</a>
             <a href="{{ route('barang_pinjam.index') }}" class="text-sm font-semibold text-gray-900">Pinjam Barang</a>
           </div>
           <div class="hidden lg:flex lg:flex-1 lg:justify-end">
             @auth
               <form method="POST" action="{{ route('logout') }}" class="inline">
                 @csrf
                 <button type="submit" class="text-sm font-semibold text-gray-900">Log Out</button>
               </form>
             @else
               <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-900">Log In <span aria-hidden="true">&rarr;</span></a>
             @endauth
           </div>
         </nav>
         <!-- Mobile menu -->
         <div class="lg:hidden" role="dialog" aria-modal="true">
           <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
             <div class="flex items-center justify-between">
               <a href="#" class="-m-1.5 p-1.5">
                 <span class="sr-only">Your Company</span>
                 <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
               </a>
               <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                 <span class="sr-only">Close menu</span>
                 <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                 </svg>
               </button>
             </div>
             <div class="mt-6 flow-root">
               <div class="-my-6 divide-y divide-gray-500/10">
                 <div class="space-y-2 py-6">
                   <a href="{{ route('suplier.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Suplier</a>
                   <a href="{{ route('barang.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Stok</a>
                   <a href="{{ route('barang_masuk.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Barang Masuk</a>
                   <a href="{{ route('barang_keluar.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Barang Keluar</a>
                   <a href="{{ route('barang_pinjam.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50">Pinjam Barang</a>
                 </div>
                 <div class="py-6">
                   @auth
                     <form method="POST" action="{{ route('logout') }}">
                       @csrf
                       <button type="submit" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Log Out</button>
                     </form>
                   @else
                     <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50">Log In</a>
                   @endauth
                 </div>
               </div>
             </div>
           </div>
         </div>
       </header>
   </div>
   <div class="relative isolate px-6 pt-14 lg:px-8">
     @yield('content')
   </div>
</body>
</html>
