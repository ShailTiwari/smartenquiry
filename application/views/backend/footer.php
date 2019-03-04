  </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('backend_assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url('backend_assets/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('backend_assets/js/waves.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('backend_assets/js/custom.min.js');?>"></script>



        <script src="<?php echo base_url('backend_assets/plugins/bower_components/custom-select/custom-select.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js');?>"></script>
        <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js');?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('backend_assets/plugins/bower_components/multiselect/js/jquery.multi-select.js');?>"></script>




    <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js');?>"></script>


     <script src="<?php echo base_url('backend_assets/plugins/bower_components/sweetalert/sweetalert.min.js');?>"></script>


    <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datetimepicker.min.js');?>"></script>

    
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js');?>"></script>

    

<script src="<?php echo base_url('backend_assets/js/jquery.validate.min.js');?>"></script>


   <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.js');?>"></script>
    <script src="<?php echo base_url('backend_assets/plugins/bower_components/bootstrap-table/dist/bootstrap-table.ints.js');?>"></script>
     <script>
            jQuery(document).ready(function () {
                // Switchery
                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                $('.js-switch').each(function () {
                    new Switchery($(this)[0], $(this).data());
                });
                // For select 2
                $(".select2").select2();
                $('.selectpicker').selectpicker();
                //Bootstrap-TouchSpin
                $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                    , verticalupclass: 'ti-plus'
                    , verticaldownclass: 'ti-minus'
                });
                var vspinTrue = $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }
                $("input[name='tch1']").TouchSpin({
                    min: 0
                    , max: 100
                    , step: 0.1
                    , decimals: 2
                    , boostat: 5
                    , maxboostedstep: 10
                    , postfix: '%'
                });
                $("input[name='tch2']").TouchSpin({
                    min: -1000000000
                    , max: 1000000000
                    , stepinterval: 50
                    , maxboostedstep: 10000000
                    , prefix: '$'
                });
                $("input[name='tch3']").TouchSpin();
                $("input[name='tch3_22']").TouchSpin({
                    initval: 40
                });
                $("input[name='tch5']").TouchSpin({
                    prefix: "pre"
                    , postfix: "post"
                });
                // For multiselect
                $('#pre-selected-options').multiSelect();
                $('#optgroup').multiSelect({
                    selectableOptgroup: true
                });
                $('#public-methods').multiSelect();
                $('#select-all').click(function () {
                    $('#public-methods').multiSelect('select_all');
                    return false;
                });
                $('#deselect-all').click(function () {
                    $('#public-methods').multiSelect('deselect_all');
                    return false;
                });
                $('#refresh').on('click', function () {
                    $('#public-methods').multiSelect('refresh');
                    return false;
                });
                $('#add-option').on('click', function () {
                    $('#public-methods').multiSelect('addOption', {
                        value: 42
                        , text: 'test 42'
                        , index: 0
                    });
                    return false;
                });
            });
        </script>




         <script type="text/javascript">
         // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('.mydatepicker2, #datepicker').datepicker();
        jQuery('#txt_wodate').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });

         jQuery('#txt_podate').datepicker({

            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });


  jQuery('#datepicker-autoclose').datepicker({

            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });


    jQuery('#datepicker-autoclose2').datepicker({

            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });


    jQuery('#datepicker-autoclose3').datepicker({

            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });



    jQuery('#datepicker-autoclose4').datepicker({

            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });



jQuery('#sdatepicker-autoclose').datepicker({

            autoclose: true,
            format: 'dd-mm-yyyy',
             todayHighlight: true
        });

        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });

     
        
    </script>



         <script type="text/javascript">
     function startSpinner() {
            $(document).ready(function () {
                $('#spinner').show();
            });
        }


        function stopSpinner() {
            $(document).ready(function () {
                $('#spinner').hide();
            });
        }
</script>



</body>

</html>


