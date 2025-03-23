@extends('layouts.staffStructure')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header" style="background-color: white;width: 100%;">
                  <center><h1>Department Information</h1></center>
                <div class="card-body">
                    
                    <table class="table tabel-hover table bordered" style="border-radius: 9px; background-color: white;width: 100%;"> 
                        <thead style="background-color:rgb(29, 24, 161);">
                            <tr style="color: white;">
                             
                                
                                <th>Name</th>
                                <th> Dept ID </th>
                                <th> Budget </th>
                                <th> Deductions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                           
                            <tr>
                                 
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>

                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
