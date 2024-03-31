<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Farm Fresh</span></strong>. All Rights Reserved
    </div>
    <!-- <div class="credits">
      
      Designed by <a href="#">Friendsitsolutions</a>
    </div> -->
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Modal HTML Markup -->
<div id="AddUserLoginModal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Add User</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" method="POST" action="">
          <input type="hidden" name="_token" value="">
          <div class="form-group">
            <label class="control-label">User name</label>
            <div>
              <input type="text" class="form-control input-lg" name="name" value="">
            </div>
          </div>
          <div class="form-group mt-2">
            <label class="control-label">E-Mail</label>
            <div>
              <input type="email" class="form-control input-lg" name="email" value="">
            </div>
          </div>
          <div class="form-group mt-2">
            <label class="control-label">Password</label>
            <div>
              <input type="password" class="form-control input-lg" name="password">
            </div>
          </div>
          <div class="form-group mt-2">
            <label class="control-label">Confirm Password</label>
            <div>
              <input type="password" class="form-control input-lg" name="password_confirmation">
            </div>
          </div>
          <div class="form-group mt-3 text-end">
            <div>
              <button type="submit" class="btn btn-success">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="EditUserLoginModal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Edit User</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" method="POST" action="">
          <input type="hidden" name="_token" value="">
          <div class="form-group">
            <label class="control-label">User name</label>
            <div>
              <input type="text" class="form-control input-lg" name="name" value="">
            </div>
          </div>
          <div class="form-group mt-2">
            <label class="control-label">E-Mail</label>
            <div>
              <input type="email" class="form-control input-lg" name="email" value="">
            </div>
          </div>
          <div class="form-group mt-2">
            <label class="control-label">Password</label>
            <div>
              <input type="password" class="form-control input-lg" name="password">
            </div>
          </div>
          <div class="form-group mt-2">
            <label class="control-label">Confirm Password</label>
            <div>
              <input type="password" class="form-control input-lg" name="password_confirmation">
            </div>
          </div>
          <div class="form-group mt-3 text-end">
            <div>
              <button type="submit" class="btn btn-success">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="pickupModal123" class="modal fade">
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
    .table td, .table th {
        vertical-align: middle;
    }
    table.attentionTable tr td p {
        font-size: 11px;
        line-height: 13px;
        margin-bottom: 3px;
        font-weight: 600;
    }

    table#server_data_table thead tr, table.invoiceItemeTable thead tr {
        background: #8ac93c;
/*        background: #ffbc35;*/
        color: black;
    }
    table.currencyTable {
        margin-top: -175px;
    }
    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }
    .topContent p {
      font-size: 13px !important;
    }
    .topContent img {
        max-height: 100px;
    }
    @media print {
      .pagetitle {
         display: none;
      }
      .header-nav {
         display: none;
         box-shadow: none;
      }
      .header {
         box-shadow: none;
      }
      .header a, .header i, .header img {
         display: none;
      }
      .harry {
         display: none;
      }
      .eventDetailCard {
         display: block;
             background: #f6f9ff !important;
             box-shadow: none;
      }
      .card {
             background: #f6f9ff !important;
             box-shadow: none;
      }
      .sidebar {
             box-shadow: none;
      }
      .harry1 {
         display: none;
      }
      .logoimmage img {
         display: block;
      }
      #footer {
        display: none;
      }
    .btn-primary {
      display: none;
    }
    body {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
  }
  </style>
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ">Order Detail</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" method="POST" action="">
          <div class="row">
            <div class="col-lg-6">
              <h5 class="title mt-3" style="color:#264f2b;">Customer Detail</h5>
              <div class="row">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id='customer-name' name="product_title" value="Ali">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Contact No. </label>
                    <input type="tel" class="form-control" id='contaact-no' name="product_title" value="+996 000000000">
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Agent Name</label>
                    <input type="text" class="form-control" id='agents-name' name="product_title" value="agent A">
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">Agent Contact No.</label>
                    <input type="text" class="form-control" id="product_sku" name="product_sku" value="+996 000000000" >
                  </div>
              
                  <div class="col-md-6 mt-3">
                    <label for="inputState" class="form-label">Pick Up Date</label>
                    <input type="text" class="form-control" id="pick-up-date" name="price" value="04/26/23" >
                  </div>
                  <div class="col-md-6 mt-3">
                    <label for="inputState" class="form-label">Delivered Date</label>
                    <input type="text" class="form-control" id="delviered-data" name="quantity" value="04/28/23" >
                  </div>
                  <div class="col-md-12 mt-3">
                    <label for="inputState" class="form-label">Address</label>
                    <input type="text" class="form-control" id="product-sku" name="product_sku" value="street no 111, city abc, country abc" >
                  </div>
                </div>
              </div>
              
            </div>
          
            <div class="col-sm-12" bis_skin_checked="1">
              <h5 class="title mt-3" style="color: #264f2b;">Product Detail</h5>
              <table class="table table-bordered invoiceItemeTable" style="border: 2px">
                <thead>
                  <tr>
                    <th>Sr. #</th>
                    <th>Category</th>
                    <th>Item Name</th>
                    <th>Vendor</th>
                    <th>SKU</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <!-- <th>Amount</th> -->
                    <!-- <th>Total Price</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Fruits</td>
                    <td class="text-center">Apple</td>
                    <td class="text-center">Al tamimi</td>
                    <td class="text-center">123</td>
                    <td class="text-center">1Kg</td>
                    <td class="text-center">SAR 25</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="form-group mt-3 text-end">
            <div>
              <button type="submit" class="btn btn-success">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->