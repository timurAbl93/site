@extends('admin/layouts')
@section('content')
<br><br>


@foreach($data as $item)

    <div class="table-bordered form-control">
     
        <ul class="nav nav-sidebar">

            <li>
                <tr><form method='post' action="/dachboard/edit/{{ $item->id}}">
                    {{ $item->email}}
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <button class="btn  btn-danger" type="submit">Delete</button><be>
            </form>
                <a href="/dachboard/show/{{ $item->id}}">Show</a>
            </li>
        </ul>
    
    </div>    
@endforeach

@stop