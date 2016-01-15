@extends('admin/layouts')
@section('table')
        <br><br>
    <div class="container">
        <table class="table table-bordered table-hover "> 
            <thead>
                <tr>
                    <td>id</td> <td>email</td> <td>jobs</td> <td>description</td>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item) 
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->jobs}}</td>  
                        <td>{{$item->description}}</td>  
                    </tr>


                @endforeach
            </tbody>
        </table>
    </div>
          
@stop