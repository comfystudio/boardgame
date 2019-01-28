@extends('layouts.admin')

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">@if(isset($meta['section'])) {{$meta['section']}} @endif</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/emails/">@if(isset($meta['section'])) {{$meta['section']}} @endif</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@if(isset($emails)) Edit @else Add @endif</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            @include('partials.admin.error')
            @include('partials.admin.success')
            <!-- Elements -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <h3 class="block-title">@if(isset($meta['section'])) {{$meta['section']}} @endif @if(isset($emails)) Edit @else Add @endif</h3>
                </div>
                <div class="block-content">
                    <form action="/admin/emails/{{isset($emails) ? 'edit/'.$emails->id : 'create'}}"  method="POST">
                        {{ csrf_field() }}

                        <!-- Basic Elements -->
                        {{--<h2 class="content-heading pt-0">Basic</h2>--}}
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">

                                <!-- Form Horizontal - Default Style -->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="title">Subject <span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" id="subject" name="subject" class="form-control @if($errors->has('subject')) is-invalid @endif" value="@if(old('subject')){{old('subject')}} @elseif(isset($emails->subject)){{$emails->subject}}@endif">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="title">Title <span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" id="title" name="title" class="form-control @if($errors->has('title')) is-invalid @endif" value="@if(old('title')){{old('title')}} @elseif(isset($emails->title)){{$emails->title}}@endif">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="text">Text <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <textarea id="text" name="text" class="form-control ckeditor @if($errors->has('text')) is-invalid @endif">@if(old('text')){{old('text')}} @elseif(isset($emails->text)){{$emails->text}}@endif</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="text">Images</label>
                                    <div class="col-sm-4">
                                        <p class="btn btn-primary push" data-toggle="modal" data-target="#modal-block-fadein">Open</p>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-10 ml-auto">
                                        <input type="submit" name="save" class="btn btn-info" value="@if(isset($emails)) Update @else Save @endif">
                                        <a href = "{{ URL::previous() }}" type="submit" name="cancel" class="btn btn-effect-ripple btn-danger loader">Cancel</a>
                                    </div>
                                </div>
                                <!-- END Form Horizontal - Default Style -->
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- END Elements -->

            <!-- Fade In Block Modal -->
            <div class="modal fade" id="modal-block-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Images</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                @foreach($images as $image)
                                    <img src="/{{$image->image}}" alt="{{$image->title}}" style = "width:64px; height:64px"> {{$image->title}} LINK: <strong><br/><p>{{url('/')}}/{{$image->image}}</p></strong><br/>
                                    <hr>
                                @endforeach
                            </div>
                            <div class="block-content block-content-full text-right bg-light">
                                <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Fade In Block Modal -->

        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
@stop