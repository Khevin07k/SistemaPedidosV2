@include('layout.header')
@include('layout.navbar')
@include('layout.aside')

<!-- Main content -->
<main class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="fs-3">{{$titleContent}}</div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">{{$title}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$titleContent}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
{{--            @slot('principal')--}}
{{$slot}}
{{--            @endslot--}}
        </div><!-- /.container-fluid -->
    </div>
</main>
<!-- /.content-wrapper -->

@include('layout.footer')
