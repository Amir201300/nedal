@extends('Fronted.layouts.master')

@section('title')
 {{trans('nedal.request_consult')}}
@endsection

@section('content')
    <div class="container">
        <div class="page about">


            <div class="container">

                <div class="section_title text-center">
                    <h3><img src="/Fronted/img/heading_icon.png">
                        <br />
                        {{trans('nedal.questions_consults')}}</h3>

                </div>
                <form id="consult" method="post">
                    @csrf
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-2"></div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('nedal.name')}}</label>
                                <input class="form-control" name="name" type="text" placeholder="{{trans('nedal.name')}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('nedal.email')}}</label>

                                <input class="form-control" name="email" type="email" placeholder="{{trans('nedal.email')}} ">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('nedal.service')}}</label>

                                <select name="type" class="form-control">@foreach($service as $row)<option> {{$row->service_name}}</option> @endforeach</select>

                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('nedal.consult_topic')}}</label>
                                <textarea name="topic" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>


                            <button id="save" class="btn-primary">{{trans('nedal.send_consult')}}</button>
                        </div>

                        <div class="col-md-2"></div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('script')
    @include('Admin.includes.scripts.AlertHelper')
<script>
    $('#consult').submit(function (e) {
        e.preventDefault();
        $("#save").attr("disabled", true);

        Toset('تم تنفيذ طلبك', 'info', 'تتم مراجعه طلبك ', false);
        var formData = new FormData($('#consult')[0]);
        $.ajax({
            url: '/api/sendConsults',
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#save").attr("disabled", false);
                $.toast().reset('all');
                if (data.status == 1) {
                    swal(data.message, {
                        icon: "success",
                    });
                    $('#consult')[0].reset();
                }else {
                    swal(data.message, {
                        icon: "error",
                    });
                }
            }
        });
    })
</script>
@endsection


