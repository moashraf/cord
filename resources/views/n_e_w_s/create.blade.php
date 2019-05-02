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
                    {!! Form::open(['route' => 'nEWS.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

                        @include('n_e_w_s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
