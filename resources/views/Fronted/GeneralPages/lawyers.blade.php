@php
    $lawyer = App\Models\Lawyers::take(4)->get();
@endphp
<div class="ourteam">
    <div class="container">


        <div class="section_title text-center">
            <img src="/Fronted/img/heading_icon.png">
            <br />
            <h3>  {{trans('nedal.L_C')}}  </h3>

        </div>


        <ul id="flexiselDemo3">

            @foreach($lawyer as $row)
            <li> <div class="team_"><img src="/images/Lawyers/{{$row->image}}" />
                    <h4>{{$row->name}}</h4>
                    <div class="jobtitle">{{$row->title}}</div>
                </div>
            </li>
            @endforeach

        </ul>

    </div>
    <div class="clear"> </div>

</div>
<div class="clear"> </div>