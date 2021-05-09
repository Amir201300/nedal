@extends('Fronted.layouts.master')

@section('title')
{{trans('nedal.contact_us')}}
@endsection

@section('content')
    <div class="container">
        <div class="page about">

            <div class="container">
                <div class="row contact">
                    <!-- Map Column -->
                    <div class="col-lg-8 mb-4">
                        <!-- Embedded Google Map -->
                        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                    </div>
                    <!-- Contact Details Column -->
                    <div class="col-lg-4 mb-4 text-right">
                        <h3>{{trans('nedal.contact_info')}}</h3>
                        <p>
                            <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i></span><br>
                            {{trans('nedal.KSA')}}


                        </p>
                        <p>
                            <span><i class="fas fa-phone" aria-hidden="true"></i></span><br>
                            {{contact_us()->phone}}
                            <br>

                        </p>
                        <p>
                            <span><i class="fas fa-envelope" aria-hidden="true"></i></span><br>
                            <a href="mailto:name@example.com">{{contact_us()->email}}
                            </a>
                        </p>
                        <p>
                            <span><i class="far fa-clock" aria-hidden="true"></i></span><br>
                            الأحد - الخميس: من  9-1 ظهرا ومن 4-7 مساءا
                            <br>
                            السبت:  8 ص - 1 م

                            <br>الجمعة : الراحة الإسبوعية



                        </p>
                    </div>
                </div>




                <div class="row  contact">
                    <div class="col-lg-8 mb-4 text-right">
                        <h3>إرسال رسالة</h3>
                        <form method="post" id="contactForm" novalidate="">
                            @csrf
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>{{trans('nedal.full_name')}}</label>
                                    <input type="text" class="form-control" name="name" id="name" required="" data-validation-required-message="{{trans('nedal.Please_enter_your_name')}}">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>{{trans('nedal.phone')}}</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required="" data-validation-required-message="{{trans('nedal.Please_enter_your_phone_number')}}">
                                    <div class="help-block"></div></div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>{{trans('nedal.Email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" required="" data-validation-required-message="{{trans('nedal.Please_enter_your_email_address')}}">
                                    <div class="help-block"></div></div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>{{trans('nedal.massage')}}</label>
                                    <textarea rows="10" cols="100" class="form-control" name="topic" id="topic" required="" data-validation-required-message="{{trans('nedal.Please_enter_your_message')}}" maxlength="999" style="resize:none" aria-invalid="false"></textarea>
                                    <div class="help-block"></div></div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button  type="submit" class="btn btn-primary" id="save">{{trans('nedal.send')}}</button>
                        </form>
                    </div>

                </div>

            </div>



        </div>
    </div>


@endsection


@section('script')
    @include('Admin.includes.scripts.AlertHelper')
    <script>
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            $("#save").attr("disabled", true);

            Toset('تم تنفيذ طلبك', 'info', 'تتم مراجعه طلبك ', false);
            var formData = new FormData($('#contactForm')[0]);
            $.ajax({
                url: '/api/massage',
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
                        $('#contact')[0].reset();
                    }else {
                        swal(data.message, {
                            icon: "error",
                        });
                    }
                },error : function(e){
                    $("#save").attr("disabled", false);

                }
            });
        })
    </script>
@endsection


