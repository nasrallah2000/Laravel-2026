<x-forms.layout>
    <x-slot name='title'>Validation Form</x-slot>
    <div class="container my-5">
        <h1>Upload File Form</h1>
        <x-forms.errors></x-forms.errors>
        <form action="{{ route('forms.form4') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-forms.input name="image" type="file" title="Avatar"></x-forms.input>

            <button class="btn btn-success"> <i class="fas fa-paper-plane"></i> Upload</button>
        </form>
    </div>
</x-forms.layout>
