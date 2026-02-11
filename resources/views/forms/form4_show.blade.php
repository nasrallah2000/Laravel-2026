<x-forms.layout>
    <x-slot name='title'>Validation Form</x-slot>
    <div class="container my-5">
        <h1>Uploaded File</h1>
        <x-forms.errors></x-forms.errors>
        <img src="{{ asset($path) }}" alt="">
    </div>
</x-forms.layout>
