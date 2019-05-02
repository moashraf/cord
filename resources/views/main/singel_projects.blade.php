@extends('main.master')
@section('content')



							@foreach(  $singl_projects as  $projects_val)
									
             		@foreach(  $projects_val->get_projects_description  as  $projects_val_dec)
							
							
    <div class="about-us text-right" style="    background: url({{ URL::to('/').'/images/'.$projects_val->image}} ); ">
        <div class="container">
            <h2 class="h1">   {!!    $projects_val_dec->title   !!} </h2>
           
        </div>
    </div>

  <!-- =====start box-navigate ===== -->
   
<!-- =====end box-navigate===== -->




<div class="single-broject sections text-right">
    <div class="container">
        <div class="row">
		
		
		 	@foreach(  $projects_val->get_projects_Photos  as  $projects_val_Photos )
		
          <div class="col-md-4">
              <img class="img-d" src="{{ URL::to('/').'/images/'.$projects_val_Photos->image_path}}">
          </div>
         
		   @endforeach
		  
		  
		  
        </div>
       

        <div class="details-single-broject">
            <h4>التفاصيل</h4>
            <ul>
<li>  <b> المدينة </b>        {!!    $projects_val_dec->title   !!} </li> 
<li>  <b> المساحة </b>         {!!    $projects_val_dec->title   !!} </li> 
<li>  <b> البلد </b>        {!!    $projects_val_dec->title   !!} </li> 
<li>  <b> المنطقة </b>         {!!    $projects_val_dec->title   !!}  </li> 
<li>  <b> عدد الأدوار </b>         {!!    $projects_val_dec->title   !!}  </li> 

            </ul>
        </div>

    </div>
</div>

<div class="contant-single-broject">
    <div class="container">
        <h4 >عن المشروع</h4>
          <p class="text-center">يقع الموقع فى منطقة المستثمر الصغير بحي الأندلس في وسط أكبر كومباوندات ومنتجعات القاهرة الجديدة ويطل المشروع على شارع رئيسي بعرض 24 متر</p>
          <p class="text-center">المشروع عبارة عن عمارة سكنية على شارعين وحديقة أمام كومباوند القطامية ديونز وميفيدا إعمار

                مميزات المشروع :</p>
                <ul class=" text-right">
                    <li>أفضل إستغلال للمساحات.</li>
                    <li>أفضل مداخل فندقية منفذه عن طريق شركات ديكورية متخصصة .</li>
                    <li>واجهات كلاسيكية رائعه بخامات مقاومة للاتربة والعوامل الجوية .</li>
                    <li>نظام بديل لإنقطاع الكهرباء.</li>
                    <li>اعلى مستويات الامان من خلال امن وحراسة.</li>
                    <li>القرب من أجمل وافضل الكومباوندات والجامعه الأمريكية ونادي القاهرة الجديدة.</li>
                    <li>أبواب مصفحة .</li>
                    <li>إدارة للتنفيذ بخبرات متميزة.</li>
                    <li>إستخدام أفضل انواع الخامات في التنفيذ.</li>
                    
                </ul>
<div class="map-contant-single-broject">
    <h4>الموقع :</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13809.338187992144!2d31.336996199999998!3d30.0846037!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1537355704417"
        width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

    </div>

</div>
  @endforeach
           
 	  @endforeach

   @endsection
