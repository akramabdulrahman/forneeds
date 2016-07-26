@extends('admin.layouts.dashboard')
@section('extra_plugins_css')
<link rel="stylesheet" href="{{url('plugins/daterangepicker/daterangepicker-bs3.css')}}">
<link rel="stylesheet" href="{{url('plugins/datepicker/datepicker3.css')}}">
<link rel="stylesheet" href="{{url('plugins/iCheck/all.css')}}">
<link rel="stylesheet" href="{{url('plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/timepicker/bootstrap-timepicker.min.css')}}">
<link rel="stylesheet" href="{{url('plugins/select2/select2.min.css')}}">

@endsection
@section('content')  

<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">

                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box -->

    <!-- Form Element sizes -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Different Height</h3>
        </div>
        <div class="box-body">
            <input class="form-control input-lg" type="text" placeholder=".input-lg">
            <br>
            <input class="form-control" type="text" placeholder="Default input">
            <br>
            <input class="form-control input-sm" type="text" placeholder=".input-sm">
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Different Width</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder=".col-xs-3">
                </div>
                <div class="col-xs-4">
                    <input type="text" class="form-control" placeholder=".col-xs-4">
                </div>
                <div class="col-xs-5">
                    <input type="text" class="form-control" placeholder=".col-xs-5">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- Input addon -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Input Addon</h3>
        </div>
        <div class="box-body">
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <br>

            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
            </div>

            <h4>With icons</h4>

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <br>

            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>
            <br>

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
            </div>

            <h4>With checkbox and radio inputs</h4>

            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox">
                        </span>
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="radio">
                        </span>
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <h4>With buttons</h4>

            <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

            <div class="input-group input-group-lg">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                        <span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
            </div>
            <!-- /input-group -->
            <p class="margin">Normal</p>

            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-danger">Action</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
            </div>
            <!-- /input-group -->
            <p class="margin">Small <code>.input-group.input-group-sm</code></p>

            <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                </span>
            </div>
            <!-- /input-group -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

</div>
<!-- /.box -->
@endsection
@section('extra_plugins_js')
<!-- Select2 -->
<script src="{{url('plugins/select2/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{url('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{url('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{url('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{url('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{url('plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{url('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{url('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{url('plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('plugins/fastclick/fastclick.js')}}"></script>

<script>
$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
@endsection