<table class="table" style="font-size:10pt">

    <tr style="color: blue">
        <th>Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Created At</th>
        <th>Auth Tpe</th>
        <th style="text-align:center">Status</th>
        <th style="text-align:center">Actions</th>

    </tr>

    @foreach ($list as $item)
        <?php
        
        $newDateFormat2 = date('d/m/Y', strtotime($item->created_at));
        ?>


        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->first_name }}&nbsp;{{ $item->last_name }}</td>
            <td> {{ $item->designation }}</td>
            <td> {{ $item->email }}</td>
            @if ($item->phone == '')
                <td>{{ $item->mobile }}</td>
            @elseif ($item->mobile == '')
                <td>{{ $item->phone }}</td>
            @else
                <td>{{ $item->phone }}/{{ $item->mobile }}</td>
            @endif
            <td>
                {{$newDateFormat2}}

            </td>
            <td> {{ $item->auth_type }}</td>
            <td>
                @if ($item->status == 1)
                    <span class="badge bg-success bg-md">Active</span>
                @else
                    <span class="badge bg-secondary bg-md">Inactive</span>
                @endif


                @if ($item->status == 1)
                    <a href="inactivateUser/{{ $item->id }}" onclick="inactiveUser(this)"
                        class="btn btn-danger  btn-sm">Deactivate</a>
                @else
                    <a href="activateUser/{{ $item->id }}" class="btn btn-success btn-sm">Activate</a>

                    {{-- <button onclick="deleteItem(this)" data-id="{{ $item->id }}">Act</button> --}}

                    {{-- <a href="act/{{ $item->id}}" onclick="deleteItem(this)" class="btn btn-warning">Act</a> --}}
                @endif
            </td>

            <td>

                <a href="deleteUser/{{ $item->id }}" onclick="deleteUser(this)" class="btn btn-danger  btn-sm"><i
                        class="fas  fa-solid fa-trash-can"></i></a>

                <a href="editUser/{{ $item->id }}" onclick="editUser(this)" class="btn btn-warning  btn-sm"><i
                        class="fas  fa-edit"></i></a>

                {{-- <a href="" class="btn btn-success  btn-sm"><i class="fas  fa-user"></i></a> --}}
            </td>

          

        </tr>
    @endforeach

</table>
