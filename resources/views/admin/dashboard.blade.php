@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{--                        <h1>البرامج</h1>--}}
                    </div>
                    {{--                    <div class="col-sm-6">--}}
                    {{--                        <ol class="breadcrumb float-sm-right">--}}
                    {{--                            <li class=""><a href="{!! url("") !!}">الرئيسية</a> /</li>--}}
                    {{--                            <li class="active">البرامج</li>--}}
                    {{--                        </ol>--}}
                    {{--                    </div>--}}
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    @include('admin.layouts.massages')

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">جمعية الذكاء الاصطناعي</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h3>مقدم المبادرة : د/ فاطمة باعثمان</h3>
                            <p>رئيس مجلس ادارة جمعية الذكاء الاصطناعي</p>
                            <br>
                            <h4>عنوان المبادرة : تطوع تقنيا</h4>
                            <br>
                            <h5><strong>هدفها الاساسي</strong> :* تحفيز مليون متطوع تقنيا* باستخدام الذكاء الاصطناعي</h5>
                            <br><br>
                            <h6>اهمية المبادرة :</h6>

                            <ul>
                                <li>خاصية المساعد الذكي لمسول التطوع لادارة الفرص التطوعية</li>
                                <li>تشجيع المتطوعين للانضمام الى الفرص التطوعيه التقنية  للوصول الى مليون متطوع في مدة وجيزة</li>
                                <li>خاصية تشفير  بيانات المتطوع   وخصوصية امن المعلومة  وعدم تداولها مع مسؤل التطوع</li>
                                <li>خاصية استخراج تقارير التطوع الحالية والاستشرافية</li>
                                <li>خاصية البحث داخل القوائم ذاتيا</li>
                                <li>ربط الفرص التطوعية مع برامج التواصل الاجتماعي</li>
                            </ul>

                            <h6>ذكاء النظام :</h6>
                            <ul>
                                <li>يعمل كمساعدة ذكي لمسؤل التطوع</li>
                                <li>القدرة على انجاز الاجراءات  ذاتيا دون الاعتماد على المسؤل</li>
                                <li>الفرز والبحث المعتمد على ذكاء الالة</li>
                                <li>توليد التقارير الحالية عن المتطوعين و الاستشرافية</li>
                                <li>التواصل مع المتطوعين ذاتيا وآنيا</li>
                                <li>تحفيز دائرة التطوع باستخدام  تقنيات جمع الحشود والكائن الذكي بالتوصية للفرص</li>
                            </ul>

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


    @push('scripts')

    @endpush

@endsection


