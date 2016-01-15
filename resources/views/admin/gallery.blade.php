@extends('admin/layouts')
@section('content')
<br><br>
<style>
    body{
        background-color: #eee;
        margin-left: 40px;
        margin-top: 30px;
    }
    h4 {
	font-family: 'Roboto', sans-serif;
        color:grey;
    }
    ul,li{
        
        float: left; 
        margin: 5px 10px 0 0; 
        overflow:hidden;
    }
    img{
        vertical-align:middle;
    }
    #delete{
        color:red;
    }
</style>
<div class="gallery">
    @foreach($images as $image)
    
        <ul class="bxslider">
            <center>
                <li class="thumb">                    
                    <div class="wrap">                    
                        <img src="/images/slider/{{$image->image}}" id='{{$image->id}}' width="255" height="300" alt="">

                        <h4>{{$image->image}}</h4>
                        <a href="/dachboard/gallery/slider/{{$image->image}}">Add Slider</a><br>
                        <a id ='delete' href="/dachboard/gallery/delete/{{$image->id}}">Delete</a>

                    </div>
                </li>
            </center>
        </ul>

    @endforeach  
</div>
@stop