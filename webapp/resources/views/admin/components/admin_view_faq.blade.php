<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">View Faq</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body  table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S.No.</th> 
            <th>Question</th>
            <th>Answer</th> 
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @php $count=1; @endphp
          @foreach($result as $r)
          <tr>
            <td>{{ $count++ }}</td> 
            <td>{{ $r->question }}</td>
            <td>{{ $r->answer }}</td>

            <td>
              @if($r->active == 1)
              <a href="{{ url('toggle-faq-active-status/0/'.$r->id) }}" class="btn btn-danger btn-sm">Deactivate</a>
              @else
              <a href="{{ url('toggle-faq-active-status/1/'.$r->id) }}" class="btn btn-success btn-sm">Activate</a>
              @endif
              <a href="{{ url('delete-faq/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
              <a href="{{ url('edit-faq/'.$r->id) }}" class="btn btn-info btn-sm" title="edit"> <i class="fa fa-edit"></i></a>
            </td>
          </tr> 
          <?php $count++ ?>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
           <th>S.No.</th> 
            <th>Question</th>
            <th>Answer</th> 
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div><!-- card end -->
</div> 
















