<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>

<body>

    <h1>Create Student</h1>

    <form action="/students" method="POST">

        @csrf

        @if($errors->any())
            <div>
                <h3>Please fix the following errors:</h3>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
            >
        </div>

        <br>

        <div>
            <label for="phone">Phone</label>
            <input
                type="text"
                name="phone"
                id="phone"
                value="{{ old('phone') }}"
            >
        </div>

        <br>

        <div>
            <label for="address">Address</label>
            <textarea
                name="address"
                id="address"
            >{{ old('address') }}</textarea>
        </div>

        <br>

        <div>
            <label for="date_of_birth">Date Of Birth</label>
            <input
                type="date"
                name="date_of_birth"
                id="date_of_birth"
                value="{{ old('date_of_birth') }}"
            >
        </div>

        <br>

        <button type="submit">Create Student</button>

        <a href="/students">Back to students</a>

    </form>

</body>
</html>