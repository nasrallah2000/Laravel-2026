<x-forms.layout>
    <x-slot name='title'>Form 1</x-slot>
    <div class="container my-5">
        <h1>Form 1</h1>
        <form action="{{ route('forms.form1') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter the name ...">
            </div>
            <button class="btn btn-success">Send</button>
        </form>
    </div>
</x-forms.layout>
