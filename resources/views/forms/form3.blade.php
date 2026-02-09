<x-forms.layout>
    <x-slot name='title'>Validation Form</x-slot>
    <div class="container my-5">
        <h1>Validation Form</h1>
        <x-forms.errors></x-forms.errors>
        <form action="{{ route('forms.form3') }}" method="POST">
            @csrf
            <x-forms.input name="name" title="Name" hint="Your Name"></x-forms.input>
            <x-forms.input name="email" title="Email" hint="Your Email"></x-forms.input>
            <x-forms.input name="phone" title="Phone" hint="Your Phone"></x-forms.input>
            <x-forms.input name="password" title="Password" hint="Your Password" type="password"></x-forms.input>
            <x-forms.input name="password_confirmation" title="Confirm password" hint="Your Confirm Password"
                type="password"></x-forms.input>
            <button class="btn btn-success"> <i class="fas fa-paper-plane"></i> Register</button>
        </form>
    </div>
</x-forms.layout>
