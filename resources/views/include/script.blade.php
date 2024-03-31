  
<!-- Vendor JS Files -->

  <script src="{{asset('Backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
  <script src="{{asset('Backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  

  <script src="{{asset('Backend/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('Backend/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script> 



 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>



<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.js"></script>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="{{asset('Backend/js/daterangepicker.min.js')}}"></script>

  <script src="{{asset('Backend/js/select2.full.min.js')}}"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<script type="text/javascript">
  VirtualSelect.init({ 
    ele: '#multi_option' 
  });
</script>
<script type="text/javascript">
  VirtualSelect.init({ 
    ele: '#boxType' 
  });
</script>

<script type="text/javascript">
    $(".select2").select2({
      theme: "bootstrap-5",
      width: "resolve"
    });
    $('.customRangePicker').focus(function() { 
      $(this).daterangepicker({
        forceUpdate: true
      }, function(startDate, endDate, period) {
        var title = startDate.format('YYYY-MM-DD') + ' – ' + endDate.format('YYYY-MM-DD');
        var customstart = startDate.format('YYYY-MM-DD');
        var customend = endDate.format('YYYY-MM-DD');
        $(this).val(title)
        $('.grey-salsa').html(title);
        // var userURL ="{{ url('/admin/pickup/filter/') }}"+'/'+ myInputemail.value ,
        $('#custom_enddate').val(customend)
        $('#custom_startdate').val(customstart)
        // console.log(userURL);
        var trObj = $(this);



      });
      
    });
</script>
  
  <script>

    jQuery(document).ready(function ($) {
      $('#example').DataTable({
      "order": [[ 0, "desc" ]],

      });
    });
  </script>

  <script>
    $(document).ready(function(){
      // console.log("aaaa");
        $("i.toggle-sidebar-btn").click(function(){
            $("body").toggleClass("toggle-sidebar");
        });
    });
  </script>

 
</body>

</html>