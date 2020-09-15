    <!-- SweetAlert Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/sweetalert/sweetalert.min.js')?>"></script>

    <!-- Jquery Core Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/jquery/jquery.min.js')?>"></script>

    <script src="<?=base_url('assets/adminbsb/js/materialize.min.js')?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/autosize/autosize.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('assets/adminbsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>

    <!-- Chart Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/chartjs/Chart.bundle.js')?>"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?=base_url('assets/adminbsb/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('assets/adminbsb/js/admin.js')?>"></script>

    <!-- <script type="text/javascript">
        $(function () {
            new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
            new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
            new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
            new Chart(document.getElementById("pie_chart").getContext("2d"), getChartJs('pie'));
        });

        function getChartJs(type) {
            var config = null;

            if (type === 'line') {
                config = {
                    type: 'line',
                    data: {
                        labels: ["Januari", "Februari", "March", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                        datasets: [{
                            label: "My First dataset",
                            data: [0,0,0,0,0,0,0,0,1,0,0,1],
                            borderColor: 'rgba(0, 188, 212, 0.75)',
                            backgroundColor: 'rgba(0, 188, 212, 0.3)',
                            pointBorderColor: 'rgba(0, 188, 212, 0)',
                            pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                            pointBorderWidth: 1
                        }, {
                                label: "My Second dataset",
                                data: [0,0,0,0,0,0,0,0,0,0,0,0],
                                borderColor: 'rgba(233, 30, 99, 0.75)',
                                backgroundColor: 'rgba(233, 30, 99, 0.3)',
                                pointBorderColor: 'rgba(233, 30, 99, 0)',
                                pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                                pointBorderWidth: 1
                            }]
                    },
                    options: {
                        responsive: true,
                        legend: false
                    }
                }
            }
            
            return config;
        }
    </script> -->

    <!-- Demo Js -->
    <script src="<?=base_url('assets/adminbsb/js/demo.js')?>"></script>
    <script type="text/javascript">
        $(function () {
            $('.js-small').DataTable({
                dom: '<"search"Bf><"top pull-right">lrt<"bottom"ip><"clear">',
                responsive: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            //Exportable table
            $('.js-exportable').DataTable({
                dom:
                "<'row'<'col-sm-10'l><'col-sm-2'f>>" +
                "<'row'<'col-sm-10'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                responsive: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <!-- <script type="text/javascript">
        $(document).ready(function () {
            //Textare auto growth
            autosize($('textarea.auto-growth'));

            $('#waktu_barangmasuk').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                weekStart: 1,
                switchOnClick : true
            });
            
            $('#waktu_diagnosaawal').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                weekStart: 1,
                switchOnClick : true
                });

            $('#waktu_tindakanlanjut').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                weekStart: 1,
                switchOnClick : true
                });

            $('#waktu_solusiakhir').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                weekStart: 1,
                switchOnClick : true
                });

            $('#waktu_perbaikanselesai').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                weekStart: 1,
                switchOnClick : true
            });
        });
    </script> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

    
</body>

</html>
