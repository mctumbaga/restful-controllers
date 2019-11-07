<h1>Add New Customer</h1>

<form action="/customers" method="post">

    <div>
        <lable for="name">Name</lable>
        <input type="text" name="name" autocomplete="off" value="{{ old('name') }}">
        @error('name') <p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <lable for="email">Email</lable>
        <input type="text" name="email" autocomplete="off" value="{{ old('email') }}">
        @error('email') <p style="color: red">{{ $message }}</p> @enderror
    </div>

        @csrf
        <button>Add New Customer</button>
</form>
