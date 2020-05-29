<div class="col-md-6">
  <!-- general form elements -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Add Faq</h3>
    </div>
    <!-- /.card-header -->
    <!--City form start -->
    <form enctype="multipart/form-data" method="post" action="{{url('submit-faq')}}">
      {{ csrf_field() }} 
      <div class="card-body">
        <div class="form-group">
          <label>Question</label>
          <input type="text"  placeholder="Enter Question" class="form-control" name="question">
          <!--<textarea id="editor1" class="form-control" name="question" required  rows="10" cols="80"></textarea> -->
        </div>

        <div class="form-group">
          <label>Answer</label>
          <!--<textarea id="editor2" class="form-control" name="answer" required  rows="10" cols="80"></textarea> -->
          <input type="text"  placeholder="Enter Answer" class="form-control" name="answer">
        </div>
      </div><!-- /.box-body --> 
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>