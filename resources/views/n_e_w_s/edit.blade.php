@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            N E W S
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($nEWS, ['route' => ['nEWS.update', $nEWS->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}

                        @include('n_e_w_s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection