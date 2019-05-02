@extends('main.master')
@section('content')
  
<body class="page-template page-template-templates page-template-contact page-template-templatescontact-php page page-id-155">




<!-- /#rh_progress -->

	<section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">

		<div class="rh_banner__cover"></div>
		<!-- /.rh_banner__cover -->

		<div class="rh_banner__wrap">

							<h2 class="rh_banner__title">      اطلب وحدتك  </h2>
				<!-- /.rh_banner__title -->
			
			
		</div>
		<!-- /.rh_banner__wrap -->

	</section>

<section class="rh_section rh_wrap rh_wrap--padding rh_wrap--topPadding">

	<div class="rh_page">

		
		<div class="rh_page__contact">
 
			
			<div class="rh_contact">

				<div class="rh_contact__wrap" 	 STYLE="     BACKGROUND: #e6e6e6;
    PADDING: 20PX; ">

					<div class="rh_contact__form">
															<section id="contact-form">
										 {!! Form::open( [ 'route' =>  'orders', 'method' => 'post'] ) !!}

<input type="hidden" name="status"   value=" طلب وحدتك   " />


 <p class="rh_contact__input rh_contact__input_text">
 												<input type="text" name="title" id="name"  requiredclass="required"  required  placeholder="الاسم   " title="* Please provide your name">
											</p>

											<p class="rh_contact__input rh_contact__input_text">
 												<input type="text" name="email" id="email" class="email required"  required  placeholder=" البريد  " title="* Please provide a valid email address">
											</p>

											<p class="rh_contact__input rh_contact__input_text">
 												<input  required  type="text" name="phone" id="number" placeholder=" الهاتف   ">
											</p>

											<p class="rh_contact__input rh_contact__input_textarea">
 												<textarea cols="20" rows="3" name="body" id="comment" class="required" required  placeholder=" تفاصيل الوحده  المطلوبه   " title="* Please provide your message"></textarea>
											</p>
											
											<p class="rh_contact__input rh_contact__submit">
												<input type="submit" id="submit-button" value=" ارسل " class="rh_btn rh_btn--primary" name="submit">
										 </p>

 										</form> 
									</section>
														</div>
					<!-- /.rh_contact__form -->

					 
							<br><br><br>
							
				 		<!-- /.rh_contact__map -->

				</div>
				<!-- /.rh_contact__wrap -->

			</div>
			<!-- /.rh_contact -->

		</div>
		<!-- /.rh_page__contact -->

	</div>
	<!-- /.rh_page -->


</section>	<!-- /.rh_section rh_wrap rh_wrap--padding -->

 
   @endsection
