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
                    <h3 class="block-title">@if(isset($meta['section'])) {{$meta['section']}} @endif Send</h3>
                </div>
                <div class="block-content">
                    <form action="/admin/emails/send/{{$emails->id}}"  method="POST">
                        {{ csrf_field() }}

                        <!-- Basic Elements -->
                        {{--<h2 class="content-heading pt-0">Basic</h2>--}}
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">

                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="text">
                                           Select Option
                                        </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="js-select2 form-control" id="option" name="option" style="width: 100%;" data-placeholder="Please Select Email List..">
                                                 @foreach($choiceArray as $key => $choice)
                                                     <option value="{{$key}}"
                                                         @if(old('option') && old('option') == $key)
                                                             selected = "selected"
                                                         @elseif(isset($emails['option']) && $emails['option'] == $key)
                                                             selected = "selected"
                                                         @endif
                                                     >
                                                         {{$choice}}
                                                     </option>
                                                 @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10 ml-auto">
                                        <input type="submit" name="save" class="btn btn-info" value="@if(isset($emails)) Send @else Send @endif">
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

        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
@stop





@extends('layouts.admin')

@section('content')
    <!-- Page content -->
    <div id="page-content">
        <!-- Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Email</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li><a href="/admin/items/">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- General Elements Block -->
        <div class="block">
            <!-- General Elements Title -->
            <div class="block-title">
                <h2>Add Email</h2>
            </div>
            <!-- END General Elements Title -->
            @include('partials.admin.error')

            @include('partials.admin.success')
            <!-- General Elements Content -->
            <form action="/admin/emails/send/{{$emails->id}}" method="POST" class="form-horizontal form-bordered">
                {{ csrf_field() }}


                <div class="form-group">
                    <label class="col-md-2 control-label" for="option">Select Option</label>
                    <div class="col-md-5">
                        <select class="select-chosen" name="option" data-placeholder="Please Select Email List...">
                            {{--<option value="0">All Users</option>--}}
                            @foreach($choiceArray as $key => $choice)
                                <option value="{{$key}}"
                                    @if(old('option') && old('option') == $key)
                                        selected = "selected"
                                    @elseif(isset($emails['option']) && $emails['option'] == $key)
                                        selected = "selected"
                                    @endif
                                >
                                    {{$choice}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-5 col-md-offset-2">
                        <input type="submit" name="save" class="btn btn-effect-ripple btn-primary loader" value="@if(isset($emails)) Send @else Send @endif">
                        <a href = "{{ URL::previous() }}" type="submit" name="cancel" class="btn btn-effect-ripple btn-danger loader">Cancel</a>
                    </div>
                </div>
            </form>
            <!-- END General Elements Content -->
        </div>
        <!-- END General Elements Block -->
    </div>
    <!-- END Page Content -->
@stop