
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html lang="en">
    <head><h3>CRUD OPERATION</h3>
        <style>
            table{
                border: 2px solid;
                color:solid black; 
                margin: 10px 10px 10px 10px;
                width: 98%;
                box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                text-align: center;
            }

            button{
                border: 2px solid #afa04c;
                width: 20%;
                background-color: #4CAF50; /* Green */
                color: white;
                padding: 10px 20px;
                text-align: center;
                margin-left: 10px !important ;
            }

            h3{
                text-align: center;
                text-decoration-color: rgb(15, 15, 15);
                background: rgb(231, 222, 222);
            }

            thead {
                color: maroon;
                background-color: silver;
            }

        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        
    <table border=5px>
        <thead>
            <td> {{ __('crud::app.id') }}</td>
            <td> {{ __('crud::app.name') }}</td>
            <td> {{ __('crud::app.phone-number') }}</td>
            <td> {{ __('crud::app.email') }}</td>
            <td> {{ __('crud::app.gender') }}</td>
            <td> {{ __('crud::app.date-of-birth') }}</td>
            <td> {{ __('crud::app.status') }}</td>
            <td> {{ __('crud::app.address') }}</td>
            <td> {{ __('crud::app.password') }}</td>
            <td> {{ __('crud::app.edit') }}</td>
            <td> {{ __('crud::app.delete') }}</td>
        </thead>

        <tbody>
            @foreach ($students as $student)
     
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->date_of_birth}}</td>
                    <td>{{ $student->status}}</td>
                    <td>{{ $student->full_address}}</td>
                    <td>{{ $student->password }}</td>
                  


                    <td><a href="{{route('students.edit',  $student->id)}}"><i class="fa fa-edit"></i></a> </td>
                    <td>
                        <form id="studentDeleteForm{{$student->id}}" action="{{ route('students.destroy', $student->id) }}" method="POST">

                            @csrf
                            
                            @method('DELETE')
                        </form>
                    
                    <div>
                        <a href="#" onclick="document.getElementById('studentDeleteForm{{$student->id}}').submit();"><i class="fa fa-trash"></i></a>
                    </div>

                </tr>
            @endforeach
        </tbody>
    </table>
        <a href="students/create">
            <button>{{ __('crud::app.add') }}</button>
        </a>
      
    </body>
</html> 
 