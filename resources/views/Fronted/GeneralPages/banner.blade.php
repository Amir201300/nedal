@php
    $slider = App\Models\Sliders::all();
@endphp
<div class="content">

    <!-----slider-->



    <ul id="demo1">
        @foreach($slider as $row)
        <li><div class="slidelink"><a href="#"> <div class="overslide"></div><img src="/images/Sliders/{{$row->image}}" /></a> </div></li>
        @endforeach

    </ul>
</div>
