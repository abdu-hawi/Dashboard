{{-- @extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{!! trans('admin.setting.Settings') !!}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class=""><a href="{!! url("") !!}">{!! trans('admin.sidebar.Dashboard') !!}</a> /</li>
                            <li class="active">{!! trans('admin.setting.Settings') !!}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        @livewire('admin.settings', ['title' => $title])

    </div>
    <!-- /.content-wrapper -->
@endsection

 --}}


@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>الاعدادات</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class=""><a href="{!! url("") !!}">لوحة التحكم</a> /</li>
                            <li class="active">الاعدادات</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->



        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{!! $title !!}</h3>
                        </div>

                            @include('admin.layouts.massages')

                        <!-- /.card-header -->
                        <div class="card-body col-md-6" style="margin-left: auto;margin-right: auto;">
                            {!! Form::open(['files'=>true]) !!}
                            <div class="form-group">
                                {!! Form::label('site_name_ar',"اسم الموقع ") !!}
                                {!! Form::text('site_name_ar',setting()->site_name_ar,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group d-none">
                                {!! Form::label('site_name_en',"اسم الموقع بالانجليزي") !!}
                                {!! Form::text('site_name_en',setting()->site_name_en,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email',"الايميل") !!}
                                {!! Form::text('email',setting()->email,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('logo',"شعار الموقع") !!}
                                {!! Form::file('logo',['class'=>'form-control']) !!}
                                @if(!empty(setting()->logo))
                                    <img src="{!! Storage::url(setting()->logo) !!}" height="50"/>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('icon',"ايقونة الموقع") !!}
                                {!! Form::file('icon',['class'=>'form-control']) !!}
                                @if(!empty(setting()->icon))
                                    <img src="{!! Storage::url(setting()->icon) !!}" height="50"/>
                                @endif
                            </div>
                            <div class="form-group d-none">
                                {!! Form::label('main_lang',"لغة الموقع") !!}
                                {!! Form::select('main_lang',['ar'=>"العربية",'en'=>"الانجليزية"],setting()->main_lang,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('descriptions',"وصف الموقع") !!}
                                {!! Form::textarea('descriptions',setting()->descriptions,['class'=>'form-control', 'rows' => 2]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('keywords',"الكلمات الدلالية") !!}
                                {!! Form::textarea('keywords',setting()->keywords,['class'=>'form-control', 'rows' => 2]) !!}
                            </div>
                            <div class="form-group d-none">
                                {!! Form::label('status',"حالة الموقع") !!}
                                {!! Form::select('status',['open'=>"يعمل",'close'=>"صيانة"],setting()->status,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group d-none">
                                {!! Form::label('msg_maintenance_ar',"رسالة الصيانة ") !!}
                                {!! Form::textarea('msg_maintenance_ar',setting()->msg_maintenance_ar,['class'=>'form-control', 'rows' => 2]) !!}
                            </div>
                            <div class="form-group d-none">
                                {!! Form::label('msg_maintenance_en',"رسالة الصيانة بالانجليزي") !!}
                                {!! Form::textarea('msg_maintenance_en',setting()->msg_maintenance_en,['class'=>'form-control', 'rows' => 2]) !!}
                            </div>

                            {!! Form::submit("حفظ",['class'=>'btn btn-primary']) !!}

                            {!! Form::close() !!}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

