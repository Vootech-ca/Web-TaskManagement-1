<form class="d-inline" method="POST" action="{{ route($row->routeDelete, [$row->routeParameter => $row->id]) }}" accept-charset="UTF-8" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <button class="delete btn btn-outline-danger mb-1"><i class="fal fa-trash"></i></button>
</form>
