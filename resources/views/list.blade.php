<table class="table">
    <thead>
        <td>
            name
        </td>
    </thead>
    <tbody>
        @foreach($lists as $list)
            <tr>
            <td>
                {{$list->name}}
            </td>
            </tr>
        @endforeach
    </tbody>
</table>