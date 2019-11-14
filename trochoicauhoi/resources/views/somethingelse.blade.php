
<div class="form-group">

<label for="linh_vuc_id">Lĩnh vực</label>
<select name="linh_vuc_id" id="linh_vuc_id" class=form-control>
@foreach (App\LinhVuc::all() as $dsLV)
@if( isset($dsCauHoi2) && $dsCauHoi2->linh_vuc_id == $dsLV->id )
<option value="{{ $dsLV->id }}" selected="true">
{{ $dsLV->ten_linh_vuc}}</option>
@else
<option value="{{ $dsLV->id }}" >
{{ $dsLV->ten_linh_vuc}}</option>
@endif
@endforeach
</select>
<br>
<table>
                @foreach (App\CauHoi::all() as $ch)                        
                            <tr>
                            <td>{{$ch->noi_dung}}</td>
                            <td>{{$ch->id}}</td>
                            <td>{{ App\LinhVuc::find($ch->linh_vuc_id)->ten_linh_vuc }}</td>
                            <td>
                                <a href="{{ url('/cau-hoi/'.$ch->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></a> 
                                <a href="{{ url('/cau-hoi/xoa/'.$ch->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>