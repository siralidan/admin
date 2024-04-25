<div class="d-flex gap-2 align-items-center">
  <button type="button" class="btn btn-soft-primary btn-sm" data-crud-id="{{$data->id}}" data-parent-id="{{$data->parent_id}}" data-bs-toggle="tooltip" title="{{ __('messages.edit') }}"> <i class="fa-solid fa-pen-clip"></i></button>
  <a href="{{route("backend.$module_name.destroy", $data->id)}}" id="delete-{{$module_name}}-{{$data->id}}" class="btn btn-soft-danger btn-sm" data-type="ajax" data-method="DELETE" data-token="{{csrf_token()}}" data-bs-toggle="tooltip" title="{{__('messages.delete')}}"  data-confirm="{{ __('messages.are_you_sure?') }}"> <i class="fa-solid fa-trash"></i></a>
</div>
