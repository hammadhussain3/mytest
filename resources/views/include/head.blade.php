<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('frontend/img/new-logo.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Backend/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Backend/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Backend/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('Backend/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('Backend/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Backend/simple-datatables/style.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('Backend/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- link for data tables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('Backend/css/daterangepicker.css')}}" />

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<!-- <link href="{{asset('Backend/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
<script type="text/javascript" src="{{asset('Backend/js/select2-init.js')}}"></script>
<script type="text/javascript" src="{{asset('Backend/js/select2.full.min.js')}}"></script> -->


<link rel="stylesheet" type="text/css" href="{{asset('Backend/css/virtual-select.min.css')}} "/>
<script type="text/javascript" src="{{asset('Backend/js/virtual-select.min.js')}}"></script>


<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" /> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
</head>

<style type="text/css">
    table.invoiceTable tr td {
      padding: 3px 4px;
      font-size: 13px;
    }

    .table {
      width: 100%;
      margin-bottom: 1rem;
      color: #212529;
      font-size: 14px;
    }

    table.attentionTable.table-bordered {
      border: 1px solid #000000;
    }

    table.attentionTable {
      margin-top: 10px;
    }

    table.attentionTable tr td:first-child {
      font-weight: 600;
      text-transform: uppercase;
    }

    .invoiceItemeTable thead tr {
      text-align: center;
    }

    /*.table td {
        padding: 1rem;
    }*/
    .table td,
    .table th {
      vertical-align: middle;
    }

    table.attentionTable tr td p {
      font-size: 11px;
      line-height: 13px;
      margin-bottom: 3px;
      font-weight: 600;
    }

    table#server_data_table thead tr,
    table.invoiceItemeTable thead tr {
      background: #ffbc35;
      color: black;
    }

    table.currencyTable {
      margin-top: -175px;
    }

    .table tbody+tbody {
      border-top: 2px solid #dee2e6;
    }

    .topContent p {
      font-size: 13px !important;
    }

    .topContent img {
      max-height: 100px;
    }

    @media print {
      .modal-header {
        display: none;
      }

      .modal-body .btn {
        display: none;
      }

      .btn-primary {
        display: none;
      }

      body {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }

      main {
        visibility: hidden;
        display: none;
      }

      .modal-dialog {
        width: 100vw;
        max-width: none;
        margin: 0;
      }

      .modal-footer {
        display: none !important;
      }

      .modal-body {
        overflow-y: visible;
      }

      .modal-backdrop {
        visibility: hidden;
        display: none;
      }
    }
  </style>