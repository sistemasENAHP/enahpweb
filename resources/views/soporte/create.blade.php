<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }} Soporte
        </h2>
    </x-slot>

    <div class="">
        <div class="container max-w-screen-lg mx-auto">
          <div>
            <h2 class="font-semibold text-xl text-gray-600">Soporte</h2>
            <p class="text-gray-500 mb-6"></p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form action="/tecnico" role="form" enctype="multipart/form-data" method="get">
                    @csrf
                    @include('soporte.buscar')
                </form>
                 <form method="POST" action="{{ route('Soportes.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('soporte.form')
                </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
