@include('include.head')
@include('include.header')
@include('include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Category</li>
          <li class="breadcrumb-item active">Add Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                                    
                <form class="row g-3" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
			          @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" required>
                </div>
                                      
              
              <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="button" class="btn btn-primary submit" id="formsumittButton">Submit</button>
                  </div>
                </div>  
              </form>


            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script>
    $('#formsumittButton').click(function(){
  if($('#category_name').val()==''){
alert('Please fill the English form');
}
else if($('#category_name_ar').val()==''){
alert('Please fill the Arabic form');
}
$('#formsumittButton').attr('type', 'submit');

});
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
@include('include.script')
