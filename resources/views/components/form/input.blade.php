@props(['name'])
<x-form.panel>
    <x-form.label name="{{$name}}" />
    <input 
        value=""
        type="text"
        name="{{$name}}"
        placeholder="1.00"
        class="py-3 px-5 rounded-xl focus:outline-none text-gray-600 focus:text-gray-600 border-4">
</x-form.panel>