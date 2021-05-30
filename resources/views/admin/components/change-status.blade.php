<form class="d-inline" method="POST" action="{{ route($row->routeStatus, ['id' => $row->id]) }}" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @if($row->status == 'Active')
        <button class="change-status btn btn-outline-danger"><i class="fal fa-times"></i></button>
    @else
        <button class="change-status btn btn-outline-success"><i class="fal fa-check"></i></button>
    @endif
</form>
