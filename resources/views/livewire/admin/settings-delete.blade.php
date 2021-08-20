<div>
@include('admin.layouts.massages')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{!! $title !!}</h3>
                    </div>

                <!-- /.card-header -->
                    <div class="card-body col-md-6" style="margin-left: auto;margin-right: auto;">
                        <form wire:submit.prevent="save">
                        <div class="form-group">
                            {!! Form::label('site_name_ar',"اسم الموقع بالعربي ") !!}
                            {!! Form::text('site_name_ar',$site_name_ar,['class'=>'form-control '.($errors->has('site_name_ar') ? 'is-invalid' : ''), 'wire:model'=>'site_name_ar']) !!}
                            @error('site_name_ar') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('site_name_en',"اسم الموقع بالانجليزي") !!}
                            {!! Form::text('site_name_en',$site_name_en,['class'=>'form-control '.($errors->has('site_name_en') ? 'is-invalid' : ''), 'wire:model'=>'site_name_en']) !!}
                            @error('site_name_en') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('email',"الايميل") !!}
                            {!! Form::text('email',$email,['class'=>'form-control '.($errors->has('email') ? 'is-invalid' : ''), 'wire:model'=>'email']) !!}
                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" >
                            {!! Form::label('logo',"شعار الموقع") !!}
                            {!! Form::file('logo',['class'=>'form-control '.($errors->has('logo') ? 'is-invalid' : ''), 'wire:model'=>'logo']) !!}
                            @error('logo') <span class="error text-danger">{{ $message }}</span> @enderror
                            @if($logo)
                                @if(pathinfo($logo, PATHINFO_EXTENSION) != 'tmp')
                                    <img src="{!! Storage::url($logo) !!}" height="50"/>
                                @else
                                    <img src="{!! $logo->temporaryUrl() !!}" height="50"/>
                                @endif
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('icon',"ايقونة الموقع") !!}
                            {!! Form::file('icon',['class'=>'form-control '.($errors->has('icon') ? 'is-invalid' : ''), 'wire:model'=>'icon']) !!}
                            @error('icon') <span class="error text-danger">{{ $message }}</span> @enderror
                            @if($icon)
                                @if(pathinfo($icon, PATHINFO_EXTENSION) != 'tmp')
                                    <img src="{!! Storage::url($icon) !!}" height="50"/>
                                @else
                                    <img src="{!! $icon->temporaryUrl() !!}" height="50"/>
                                @endif
                            @endif
                        </div>
                        <div class="form-group d-none">
                            {!! Form::label('main_lang',"لغة الموقع") !!}
                            {!! Form::select('main_lang',['ar'=>"العربية",'en'=>"الانجليزية"],$main_lang,['class'=>'form-control '.($errors->has('main_lang') ? 'is-invalid' : ''), 'wire:model'=>'main_lang']) !!}
                            @error('main_lang') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('descriptions',"وصف الموقع") !!}
                            {!! Form::textarea('descriptions',$descriptions,['class'=>'form-control '.($errors->has('description') ? 'is-invalid' : ''), 'wire:model'=>'description', 'rows' => 2]) !!}
                            @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            {!! Form::label('keywords',"الكلمات الدلالية") !!}
                            {!! Form::textarea('keywords',$keywords,['class'=>'form-control '.($errors->has('keywords') ? 'is-invalid' : ''), 'wire:model'=>'keywords', 'rows' => 2]) !!}
                            @error('keywords') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group d-none">
                            {!! Form::label('status',"حالة الموقع") !!}
                            {!! Form::select('status',['open'=>"يعمل",'close'=>"صيانة"],$status,['class'=>'form-control '.($errors->has('status') ? 'is-invalid' : ''), 'wire:model'=>'status']) !!}
                            @error('status') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group d-none">
                            {!! Form::label('msg_maintenance_ar',"رسالة الصيانة ") !!}
                            {!! Form::textarea('msg_maintenance_ar',setting()->msg_maintenance_ar,['class'=>'form-control '.($errors->has('msg_maintenance_ar') ? 'is-invalid' : ''), 'wire:model'=>'msg_maintenance_ar', 'rows' => 2]) !!}
                            @error('msg_maintenance_ar') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group d-none">
                            {!! Form::label('msg_maintenance_en',"رسالة الصيانة بالانجليزي") !!}
                            {!! Form::textarea('msg_maintenance_en',$msg_maintenance_en,['class'=>'form-control '.($errors->has('msg_maintenance_en') ? 'is-invalid' : ''), 'wire:model'=>'msg_maintenance_en', 'rows' => 2]) !!}
                            @error('msg_maintenance_en') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        {!! Form::submit(trans('admin.setting.Save'),['class'=>'btn btn-primary']) !!}

                        </form>
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
