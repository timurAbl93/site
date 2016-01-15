
<div class="slider">
    
                <ul class="bxslider">
                    @foreach($images as $image)
                        
                            <li id class="thumb">
                                <a href="" class="content">
                                    <div class="border">
                                        <p>Конкурсная работа</p>
                                        <p class="bold">“SILANE GUARD”</p>
                                    </div>
                                </a>
                                <div class="wrap">
                                     <a href=""><img src="/images/slider/{{$image->image}}"width="389" height="320" alt=""></a>
                                </div>

                            </li>
                        
                    @endforeach
                </ul>
            
     
</div>
    