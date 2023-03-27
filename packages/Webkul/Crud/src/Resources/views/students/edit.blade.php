<link rel="stylesheet" href="{{ asset('vendor/webkul/crud/assets/css/crud.css') }}">

<html>

    <body>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div>
            <label for="">{{ __('crud::app.name') }}:</label>

            <input type="text" name="name" value="{{ $student->name }}">
        </div>   

        <div>
            <label for="">{{ __('crud::app.phone-number') }}:</label>

            <input type="text" name="phone_number" value="{{ $student->phone_number }}">
        </div>

        <div>
            <label for="">{{ __('crud::app.email') }}:</label>
            
            <input type="email" name="email" value="{{ $student->email }}">
        </div>   

        <div>
            <label for="">{{ __('crud::app.gender') }}:</label>

            <input type="text" name="gender" value="{{ $student->gender }}">
        </div>   

        <div>
            <label for="">{{ __('crud::app.date-of-birth') }}:</label>

            <input type="date" name="date_of_birth" value="{{ $student->date_of_birth}}">
        </div>   

        <div>
            <label for="">{{ __('crud::app.status') }}:</label>

            <input type="text" name="status" value="{{ $student->status }}">
        </div>   


        <div>
            <label for="">{{ __('crud::app.address') }}:</label>

            <input type="text" name="full_address" value="{{ $student->full_address }}">
        </div>   

        <div>
            <label for="">{{ __('crud::app.password') }}:</label>

            <input type="password" name="password" value="{{ $student->status }}">
        </div>   

        <div>
            <input type="submit" value="{{ __('crud::app.submit') }}">
        </div>

    </form>
    </body>
</html>


