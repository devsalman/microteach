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
                <li class="active"><a href="calendar.html" title="">{{ Lang::get('navigation.province') }}</a></li>
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
            <div class="navbar">
                <div class="navbar-inner">
                    <h6>{{ Lang::get('title.province_list') }}</h6>
                    <ul class="navbar-icons">
                        <li>
                            <a href="#" data-placement="left" class="tip" title="{{ Lang::get('navigation.add_new_province') }}">
                                <i class="icon-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="well body">
                <table class="table table-bordered table-striped" id="data-table">
                    <thead>
                        <tr>
                            <th>{{ Lang::get('title.number') }}</th>
                            <th>{{ Lang::get('title.province_name') }}</th>
                            <th class="actions-column">{{ Lang::get('title.actions') }}</th>
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

@section('scripts')
<script type="text/javascript">
    var oTable = $('#data-table').dataTable({
        "processing": true,
        "serverSide": true,
        "ajax": '/ajax/getDTProvinces',
        "bJQueryUI": false,
        "bAutoWidth": false,
        "sPaginationType": "full_numbers",
        "sDom": '<"datatable-header"fl>t<"datatable-footer"ip>',
        "columnDefs": [
            {
                "targets": 0,
                "data": null,
                "defaultContent": 1
            },
            {
                "targets": 1,
                "data": "name"
            },
            {
                "targets": 2,
                "data": null,
                "defaultContent": "<ul class='table-controls'>"
                        + "<li><a href='#' class='tip' title='{{ Lang::get('tooltip.edit') }}'><i class='icon-edit'></i></a></li>"
                        + "<li><a href='#' class='tip' title='{{ Lang::get('tooltip.delete') }}'><i class='icon-remove'></i></a></li>"
                        + "</ul>"
            }
        ],
        "rowCallback": function(row, data, index) {
            $('td:eq(0)', row).html(index + 1);
        },
        "drawCallback": function(settings) {
            $('.tip').tooltip();
        },
        "oLanguage": {
            "sSearch": "<span>Filter records:</span> _INPUT_",
            "sLengthMenu": "<span>Show entries:</span> _MENU_",
            "oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" }
        }
    });
</script>
@stop