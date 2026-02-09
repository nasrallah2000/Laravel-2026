<x-forms.layout>
    <x-slot name='title'>Register Form</x-slot>
    <div class="container my-5">
        <h1>Register Form</h1>
        <form action="{{ route('forms.form2') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter the name ...">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter the email ...">
            </div>
            <div class="mb-3">
                <label for="phone">Phone</label>
                <input class="form-control" type="number" name="phone" placeholder="Enter the phone ...">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter the password ...">
            </div>
            <div class="mb-3">
                <label for="confirm_password">Confirm Password</label>
                <input class="form-control" type="text" name="confirm_password"
                    placeholder="Enter the confirm password ...">
            </div>
            <button class="btn btn-success"> <i class="fas fa-send"></i> Register</button>
        </form>
    </div>
</x-forms.layout>
