<style>
    * { letter-spacing: 1px; }
    table { border-collapse: collapse; width: 100%; }
    table, th, td { border: 1px solid black; }
    th, td { padding: 5px; }
    h1 { text-align: center; margin: 0; }
    h3 { text-align: center; margin: 0; }
    h2 { text-align: center; }
</style>

<h1>Master English</h1>
<h3>A knowledge Factory</h3>
<h2>Users Of Master English</h2>

<table>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
    </tr>

    @php($i = 1)

    @foreach ($users as $user)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
        </tr>
    @endforeach

</table>
