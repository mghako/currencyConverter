<x-layouts.app>
    <div class="min-w-screen min-h-screen bg-gray-100 flex flex-col items-center justify-center">
        <div class="w-5/6 lg:w-3/6 rounded-xl bg-gradient-to-b shadow-xl">
            <div class="text-white py-4 bg-gray-200">
                <div class="text-center font-bold text-2xl text-indigo-600">
                    <h2>
                        <i class="fas fa-exchange-alt"></i> Convert
                    </h2>
                </div>
                <form action="/convert" method="POST">
                    @csrf
                    <div class="px-4 py-12 text-white">
                        <div class="w-auto flex flex-col md:flex-row md:items-center md:justify-between mb-5 space-y-4">
                            <x-form.input name="amount" />
                            {{-- From --}}
                            <x-form.panel>
                                <x-form.label name="from" />
                                <x-form.select :codes="$codes" name="from" default="USD" />
                            </x-form.panel>
                            
                            {{-- To --}}
                            <x-form.panel>
                                <x-form.label name="to" />
                                <x-form.select :codes="$codes" name="to" default="MMK" />
                            </x-form.panel>
                            {{-- submit btn --}}
                            <div class="md:float-right text-right">
                                <x-form.submit name="Convert" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if (session('conversion'))
        <div class="text-gray-500 text-center pt-12 font-bold text-5xl w-4/5 mx-auto">
            {{ session('conversion') }}
        </div>
        @elseif ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-red-500 text-center pt-12 font-bold text-5xl w-4/5 mx-auto">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
</x-layouts.app>