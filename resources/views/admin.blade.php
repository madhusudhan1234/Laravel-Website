<!Doctype html>
<html>
<head>
    <title>Academia Admin Page</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/plugins/timeline.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/plugins/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body>
<div  id="wrapper">
    @include('admin/navigation')
    @include('admin/sidebar')
        <div class="back-white" id="page-wrapper">
            @if(Session::has('flash_message'))
                <div class="alert alert-success alert-important" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session('flash_message') }}
                </div>
            @endif
            @yield('content')
        </div>
</div>
</body>
@include('admin/footer')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/plugins/metisMenu/metisMenu.min.js')}}"></script>
<!-- DataTables JavaScript -->
<script src="{{ asset('js/plugins/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/sb-admin-2.js') }}"></script>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
<!------- Angular Js ------------>
<script src="{{ asset('js/angular.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/main.js') }}" ></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
       /* $('#add-user').hide();*/
        $('div.alert').delay(10000).slideUp(300);

        $('#sort-nav').sortable({
            cursor:"move",
            update:function(){
                var order = $(this).sortable("serialize");
                $.get("nav/sort",order);
            }
        });
        $(".btn-delete").on("click", function(){
            var selected = $(this).attr("id");
        });
    });/*End of Document Ready Function */
    tinymce.init({
        selector:"textarea.editor"
    });
</script>
<script type="text/javascript">
    function ConfirmDelete()
    {
    var x =confirm("Are you sure you want to delete?");
             if (x)
                return true;
             else
                return false;

    }
</script>

</html>