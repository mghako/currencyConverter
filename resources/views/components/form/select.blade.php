@props(['codes','name', 'default'])
<x-form.panel></x-form.panel>
<select 
    class="py-3 px-5 rounded-xl focus:outline-none text-gray-600 focus:text-gray-600 border-4"
    name="{{$name}}">
    @foreach ($codes as $code => $value)
        <option class="py-1" {{ $code == $default ? 'selected': ''}}>
            {{$code}}
        </option>
    @endforeach
</select>