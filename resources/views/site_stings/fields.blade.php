





<?php if ($siteStings->key == "About_Us" || $siteStings->key == "doct_About" || 
$siteStings->key == "culture" || $siteStings->key == "Values" || 
$siteStings->key == "goals" || $siteStings->key == "Vision"  
  ){     ?>    
 <!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'en:') !!}
	
	<textarea type="text" name="value" class="form-control"  >
<?php if (isset($siteStings)){     ?>  {{$siteStings->value}} <?php } ?> 
			  </textarea>
			  
					  		 <script> CKEDITOR.replace( 'value' );  </script>
	  
			  
 </div>
 

<div class="form-group col-sm-6">
    {!! Form::label('value', 'ar:') !!}
 
		 	  <textarea type="text" name="value_ar" class="form-control"  >
<?php if (isset($siteStings_ar )){     ?>  {{$siteStings_ar->value}} <?php } ?> 
			  </textarea>
			  		 <script> CKEDITOR.replace( 'value_ar' );  </script>

 </div>
 

 
 
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siteStings.index') !!}" class="btn btn-default">Cancel</a>
</div>

 <?php } else  { ?> 


<!-- Value //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'en:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>
 

<div class="form-group col-sm-6">
    {!! Form::label('value', 'ar:') !!}
	
		 	  <input type="text" name="value_ar" class="form-control" value="<?php if (isset($siteStings_ar )){     ?>  {{$siteStings_ar->value}} <?php } ?> ">

 </div>
 

 
 

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siteStings.index') !!}" class="btn btn-default">Cancel</a>
</div>
 <?php }   ?> 