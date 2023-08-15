<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>student list</h2>
                <div style="margin-right: 70px; float :right">
                    <a href="{{ url('add-student') }}" class="btn btn-primary">Add</a>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                    
                @endif
                <table class="table">
                    <tr>
                    <th>#</th> 
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>  
                    <th>Action</th>   
                    </tr></
                    thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($data as $stu)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $stu->name }}</td>
                            <td>{{ $stu->email }}</td>
                            <td>{{ $stu->phone }}</td>
                            <td>{{ $stu->address }}</td>
                            <td><a href="{{ url('edit-student/'.$stu->id) }}" class="btn btn-primary">Edit</a> |
                                 <a href="{{ url('delete-student/'.$stu->id) }}" class="btn btn-danger">Delete</a></td>


                        </tr>
                            
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>