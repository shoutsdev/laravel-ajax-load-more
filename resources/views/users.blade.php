@foreach($users as $key=> $user)
    <tr>
        <td>{{ (($users->currentPage()-1) * 20) + $key+1 }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
@endforeach
