@extends('Fronted.layouts.master')

@section('title')
    {{trans('nedal.about_office')}}
@endsection

@section('content')


    <div class="image_section">
        <div class="section_background">
            <div class="img_background" >
                <img src="/images/about/{{about()->image}}" >
            </div>
        </div>
    </div>
    <div class="content_section container">
        <div class="row">
            <div class="col-md-12">
                <h1> {{trans('nedal.about_office')}}</h1>
            </div>
            @if(getLang() == 'ar')
            <p>{{about()->about_office}}</p>
                <h1>رؤيتنا</h1>
                <p>
                    أن نكون سنداً للعميل في سبيل تسهيل انسياب أعماله التجارية واستثماراته بتوفير حماية قانونية تبعده عن الوقوع في خلافات تؤدي به إلى المحاكم وتكبده تكاليف عاليه وتتسبب في إهدار الوقت والجهد وقد تؤدي إلى تعثر أعماله واستثماراته الأمر الذي يمكن تجنبه وتحاشيه إذا وجد العمل السند القانوني والرأي السليم إبتداءاً قبل الدخول في أي عقود أو التزامات
                </p>
                <h1>المحامي والمستشار القانوني /نضال بن محمد بن عطا </h1>
                <ul>
                    <li style="font-size: 20px;font-weight: bold">محامي معتمد من وزراة العدل السعودية</li>
                    <li style="font-size: 20px;font-weight: bold">محكم معتمد من وزراة العدل السعودية</li>
                    <li style="font-size: 20px;font-weight: bold">موثق معتمد من وزراة العدل السعودية</li>
                    <li style="font-size: 20px;font-weight: bold">خبير ادارة ازمات قانونية وحوكمة الشركات</li>
                    <li style="font-size: 20px;font-weight: bold">عضو الهيئة السعودية للمحامين</li>
                    <li style="font-size: 20px;font-weight: bold">عضو الاتحاد الدولي للمحامين</li>
                </ul>
            @else
                <p>{{about()->about_office_en}}</p>
                <h1>Our vision</h1>
                <p>
                    We offer legal support to our client in order to facilitate their business transaction and investments. Such support will help clients avoid going into long processes of legal action and business which will cause clients cost and efforts that would have been avoided if proper legal advice and support were given.
                </p>
                <h1>Nidal M. Atta Attorny at law</h1>
                <ul>
                    <li style="font-size: 20px;font-weight: bold">Licensed lawyer by Saudi Ministry of Justice</li>
                    <li style="font-size: 20px;font-weight: bold">Licensed arbitrator </li>
                    <li style="font-size: 20px;font-weight: bold">Licensed Notary </li>
                    <li style="font-size: 20px;font-weight: bold">Expert, corporale governance and management of legal crisis .</li>
                    <li style="font-size: 20px;font-weight: bold">Member, Saudi lawyers commission .</li>
                    <li style="font-size: 20px;font-weight: bold">Member, international Bar association.  </li>
                </ul>

            @endif
        </div>
    </div>

@endsection