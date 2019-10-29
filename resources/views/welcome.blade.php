@extends('layouts.master')

@section('content')
    {{-- PRODUCTOS --}}
    <div class="w-3/4 bg-white rounded-lg p-4 m-2 shadow-lg">
        {{-- CABECERA --}}
        <h3 class="font-semibold text-3xl">🤘&#127996; Livewire Store</h3>
        <div class="h-px w-full bg-purple-500 my-2 rounded-full"></div>

        <div class="flex flex-grow -mx-2 px-2">
            {{-- PRODUCTO --}}
            <div class="w-1/2 px-2">
                <div class="mx-1">
                    <h2 class="font-semibold text-purple-50 px-2 pt-3 pb-2 text-xl">
                        Producto Sexy #01
                    </h2>
                    <img class="w-full rounded" src="https://picsum.photos/id/{{random_int(1, 100)}}/400/275"
                         alt="Arsenal Home Kit">
                    <p class="px-2 py-3">
                        Esta es la descripción del producto. Solo necesitas saber que es de buena calidad y que deberías de comprarlo.
                    </p>
                    {{-- CONTROLES --}}
                    <div class="flex flex-col items-start">
                        {{-- PRECIO --}}
                        <div class="font-bold text-lg text-purple-800 px-2 pt-1 pb-3">
                            S/ 250
                        </div>
                        <div class="cursor-pointer rounded py-1 px-2  bg-purple-200">
                            Eliminar del carrito
                        </div>
                    </div>
                </div>
            </div>
            {{-- PRODUCTO --}}
            <div class="w-1/2 px-2">
                <div class="mx-1">
                    <h2 class="font-semibold text-purple-50 px-2 pt-3 pb-2 text-xl">
                        Producto Sexy #02
                    </h2>
                    <img class="w-full rounded" src="https://picsum.photos/id/{{random_int(1, 100)}}/400/275"
                         alt="Arsenal Home Kit">
                    <p class="px-2 py-3">
                        Esta es la descripción del producto. Solo necesitas saber que es de buena calidad y que deberías de comprarlo.
                    </p>
                    {{-- CONTROLES --}}
                    <div class="flex flex-col items-start">
                        {{-- PRECIO --}}
                        <div class="font-bold text-lg text-purple-800 px-2 pt-1 pb-3">
                            S/ 250
                        </div>
                        <div class="cursor-pointer rounded py-1 px-2 bg-purple-500 text-white">
                            Añadir al carrito
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CARRITO DE COMPRA --}}
    <div class="w-1/4 bg-white rounded-lg p-4 m-2 shadow-lg">
        {{-- CABECERA --}}
        <h3 class="font-semibold text-xl mt-4">Resumen de compra</h3>
        <div class="h-px w-full bg-purple-500 my-2 rounded-full"></div>

        {{-- PRODUCTO --}}
        <div class="w-full border-b border-1 py-2 flex flex-col">
            <span class="font-semibold text-purple-50 px-2 pb-1 text-lg">
                Producto Sexy #01
            </span>
            <img clasS="w-full rounded" src="https://picsum.photos/id/{{random_int(1, 100)}}/220/150"
                 alt="Arsenal Home Kit">
            {{-- CONTROLES --}}
            <div class="flex flex-row p-2 justify-between">
                <div class="flex flex-row">
                    {{-- + --}}
                    <svg class="h-6 text-purple-500 fill-current cursor-pointer" viewBox="0 0 32 32" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6 0C2.68628 0 0 2.68628 0 6V26C0 29.3137 2.68628 32 6 32H26C29.3137 32 32 29.3137 32 26V6C32 2.68628 29.3137 0 26 0H6ZM10 14C8.89539 14 8 14.8954 8 16C8 17.1046 8.89539 18 10 18H22C23.1046 18 24 17.1046 24 16C24 14.8954 23.1046 14 22 14H10Z"/>
                    </svg>
                    {{-- CONTADOR --}}
                    <span class="mx-2 font-semibold">
                        5
                    </span>
                    {{-- - --}}
                    <svg class="h-6 text-purple-500 fill-current cursor-pointer" viewBox="0 0 32 32" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6 0C2.68628 0 0 2.68628 0 6V26C0 29.3137 2.68628 32 6 32H26C29.3137 32 32 29.3137 32 26V6C32 2.68628 29.3137 0 26 0H6ZM14 22C14 23.1046 14.8954 24 16 24C17.1046 24 18 23.1046 18 22V18H22C23.1046 18 24 17.1046 24 16C24 14.8954 23.1046 14 22 14H18V10C18 8.89545 17.1046 8 16 8C14.8954 8 14 8.89545 14 10V14H10C8.89539 14 8 14.8954 8 16C8 17.1046 8.89539 18 10 18H14V22Z"/>
                    </svg>
                </div>
                {{-- PRECIO --}}
                <div class="font-bold text-lg text-purple-800">
                    S/ 250
                </div>
            </div>
        </div>

        {{-- RESUMEN DE COMPRA --}}
        <div class="w-full">
            {{-- INFO --}}
            <div class="w-full flex items-center justify-between pt-3 px-2">
                <span class="uppercase font-semibold">Total a pagar</span>
                <span class="font-bold text-xl text-purple-500">S/ 250</span>
            </div>
            {{-- ACCIONES --}}
            <div class="w-full flex flex-row mt-2">
                <div class="cursor-pointer w-1/2 mr-1 rounded py-1 flex items-center justify-center bg-purple-200">
                    Cancelar
                </div>
                <div
                    class="cursor-pointer w-1/2 ml-1 rounded py-1 flex items-center justify-center bg-purple-500 text-white">
                    Continuar
                </div>
            </div>
        </div>
    </div>
@endsection
