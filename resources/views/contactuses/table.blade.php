<table 
    data-toggle="table"
    data-pagination="true"
    data-page-size="10"
    >
    <thead>
        <tr>
            <th>ติดต่อเรื่อง</th>
            <th>ชื่อ-สกุล</th>
            <th>อีเมลล์</th>
            <th>มือถือ</th>
            <th>รายละเอียด</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($contactuses as $contactUs)
        <tr>
            <td>{!! $contactUs->contact_type !!}</td>
            <td>{!! $contactUs->contact_name !!}</td>
            <td>{!! $contactUs->email !!}</td>
            <td>{!! $contactUs->phone !!}</td>
            <td>{!! $contactUs->details !!}</td>
            <td>
                {!! Form::open(['route' => ['contactuses.destroy', $contactUs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    <a href="{!! route('contactuses.markread', [$contactUs->id]) !!}" class='btn btn-info btn-xs {{ $contactUs->read==false ?: 'disabled' }}'>
                        {{ $contactUs->read==false ? 'Mark as Read': 'Readed' }}
                      </a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>