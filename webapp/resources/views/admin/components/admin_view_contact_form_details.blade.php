<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Contact Details</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No.</th> 
            <th>First Name</th>
            <th>Last Name</th> 
            <th>Phone</th> 
            <th>Email</th> 
            <th>Message</th> 
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($result as $r)
          <tr>
            <td>{{ $count++ }}</td> 
            <td>{{ $r->fname }}</td>
            <td>{{ $r->lname }}</td>
            <td>{{ $r->phone }}</td>
            <td>{{ $r->email }}</td>
            <td>{{ $r->message }}</td> 
            <td> 
              <a href="{{ url('delete-contact-details/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a> 
            </td>
          </tr> 
          <?php $count++ ?>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>S.No.</th> 
            <th>First Name</th>
            <th>Last Name</th> 
            <th>Phone</th> 
            <th>Email</th> 
            <th>Message</th> 
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div> 
















