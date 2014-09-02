@extends('admin/layout')
@section('content')
<!-- Content -->
<div id="content">

    <!-- Content wrapper -->
    <div class="wrapper">

        <!-- Breadcrumbs line -->
        <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">{{ Lang::get('navigation.master_data') }}</a></li>
                <li class="active"><a href="calendar.html" title="">{{ Lang::get('navigation.village') }}</a></li>
            </ul>
        </div>
        <!-- /breadcrumbs line -->

        <!-- Page header -->
        <div class="page-header">
            <div class="page-title">
                <h5>{{ Lang::get('title.master_data_list') }}</h5>
                <span>{{ Lang::get('title.master_data_list_sub') }}</span>
            </div>
        </div>
        <!-- /page header -->

        <!-- Full size widget -->
        <div class="widget">
            <div class="navbar"><div class="navbar-inner"><h6>{{ Lang::get('title.village_list') }}</h6></div></div>
            <div class="well body">
                <table class="table table-bordered table-striped" id="data-table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th class="actions-column">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /full size widget -->

    </div>
    <!-- /content wrapper -->

</div>
<!-- /content -->
@stop