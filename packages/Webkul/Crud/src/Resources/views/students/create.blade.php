<link rel="stylesheet" href="{{ asset('vendor/webkul/crud/assets/css/crud.css') }}">
<HTML>
    <head>
    </head>
    <body>
    
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
    
            <div>
                <label for="">{{ __('crud::app.name') }}:</label>
    
                <input type="text" name="name" placeholder="xyz">
            </div>   
           
            <div>
                <label for="">{{ __('crud::app.phone-number') }}:</label>
    
                <input type="text" name="phone_number" placeholder=" write here">
            </div>

            <div>
                <label for="">{{ __('crud::app.email') }}:</label>
    
                <input type="email" name="email" placeholder=" write here">
            </div>

            <div>
                <label for="">{{ __('crud::app.gender') }}:</label>
    
                <input type="text" name="gender" placeholder=" write here">
            </div>

            <div>
                <label for="">{{ __('crud::app.date-of-birth') }}:</label>
    
                <input type="date" name="date_of_birth" placeholder=" write here">
            </div>

            <div>
                <label for="">{{ __('crud::app.status') }}:</label>
    
                <input type="text" name="status" placeholder=" write here">
            </div>


            <div>
                <label for="">{{ __('crud::app.address') }}:</label>
    
                <input type="text" name="full_address" placeholder=" write here">
            </div>


            <div>
                <label for="">{{ __('crud::app.password') }}:</label>
    
                <input type="password" name="password" placeholder=" write here">
            </div>
    
            <div>
                <input type="submit" value="{{ __('crud::app.submit') }}">
            </div>
        </form>
    </body>
    </html>