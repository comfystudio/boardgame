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
                            <li class="breadcrumb-item">@if(isset($meta['section'])) {{$meta['section']}} @endif</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        @include('partials.admin.error')

        @include('partials.admin.success')

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Simple -->
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default">
                    <div class="row w-100">
                        <div class="col-md-6 col-lg-6 col-xl-8">
                            <h3 class="block-title">Manage @if(isset($meta['section'])) {{$meta['section']}} @endif</h3>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2">
                            <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label>
                                    <form class="form-wrap" method='get' action='/admin/emails/'>
                                        <input type="search" class="form-control" placeholder="Search.." name="keywords" id="search_term" value ="{{Request::query('keywords')}}" aria-controls="DataTables_Table_1">
                                    </form>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-2">
                            <a href="/admin/emails/create" type="button" class="btn btn-success mb-1">
                                <i class="fa fa-fw fa-plus mr-1"></i> Add @if(isset($meta['section'])) {{$meta['section']}} @endif
                            </a>
                        </div>
                    </div>
                </div>
                @if($emails->count())
                    <div class="block-content block-content-full">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th>Title</th>
                                        <th>Last Sent</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($emails as $data)
                                        <tr>
                                            <td><strong>{{$data->id}}</strong></td>
                                            <td><strong>{{$data->subject}}</strong></td>
                                            <td><strong>{{$data->title}}</strong></td>
                                            <td>{{date("F j, Y, g:i a", strtotime($data->updated_at))}}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="/admin/emails/edit/{{$data->id}}/" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="Edit User" data-original-title="Edit" aria-describedby="tooltip201328">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>

                                                    <a href="/admin/emails/test/{{$data->id}}/" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="Test Email" data-original-title="test" aria-describedby="tooltip201328">
                                                        <i class="fa fa-cogs"></i>
                                                    </a>

                                                    <a href="/admin/emails/send/{{$data->id}}/" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="Send Email" data-original-title="send" aria-describedby="tooltip201328">
                                                        <i class="fa fa-envelope-open"></i>
                                                    </a>

                                                    <a href="/admin/emails/delete/{{$data->id}}/" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="Delete User" data-original-title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$emails->links('partials/admin/admin')}}
                    </div>
                @else
                    <div class="block-content block-content-full">
                        <div class="col-xs-12">
                            <p>There are no emails to display.</p>
                        </div>
                    </div>
                @endif
            </div>
            <!-- END Dynamic Table Simple -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@stop