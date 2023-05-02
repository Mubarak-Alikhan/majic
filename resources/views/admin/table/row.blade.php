<tr>
  <th scope="row">{{ $element->id }}</th>
  <td>{{ $element->name }}</td>
  <td>{{ $element->slug }}</td>
  <td>
      @if ($element->status == 1)
      <span class="badge bg-success">{{
          __("Active")
      }}</span>
      @else
      <span class="badge bg-danger">{{
          __("Deactive")
      }}</span>
      @endif
  </td>
  <td>
    <div class="d-flex justify-content-center ">
      <a class="btn btn-info mx-1" href="">view</a>
      <a class="btn btn-primary  mx-1" href="{{ route($element->editRoute, $element->id)}}">EDIT</a>
      <form method="POST" action="{{ route($element->destoryRoute, $element->id) }}">
          @csrf
          @method('Delete')
          <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm  mx-1" data-toggle="tooltip" title="Delete">
              Delete
          </button>
      </form>
    </div>
  </td>
</tr>