@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header" style="background-color: white;width: 100%;">
                  <center><h1>System Users</h1></center>
                <div class="card-body">
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/mark.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                     @if($message = Session::get('danger'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/error.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                    <table class="table tabel-hover table bordered" style="border-radius: 9px; background-color: white;width: 100%;"> 
                        <thead style="background-color: #29284a;">
                            <tr style="color: white;">
                                <th width="5">No.</th>
                                
                                <th>Name</th>
                                <th> Email </th>
                                <th> Roles </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($users as $row)
                            <tr>
                                <td><?php echo $i++;?></td>
                                 
                                <td>{{$row -> name }}</td>
                                <td>{{$row-> email }}</td>
                                <td>{{$row-> user_role }}</td>
                                <td><a href="" class="btn btn-success">edit</a> | <a href="" class="btn btn-danger">delete</a></td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
