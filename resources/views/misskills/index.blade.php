
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Mis Skills</h1>
        <br /><br />
    </section>
    <div class="content">
        <div class="clearfix"></div>
        
        @include('flash::message')

        <div class="clearfix"></div>
        
        <div class="box box-primary">
        <br />
        <span>&nbsp; Solicitar un texto que describa la actividad</span>
        <br />
            <div class="box-body">
                    @include('misskills.table')
            </div>
        </div>
    </div>
@endsection

