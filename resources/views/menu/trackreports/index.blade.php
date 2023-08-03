<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Patio</th>
        <th>Vía</th>
        <th>Tramo de vía</th>
        <th>Fecha de inspección</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reports as $report)
        <tr>
            <td>{{$report->id}}</td>
            <td>{{$report->user_id}}</td>
            <td>{{$report->yard_id}}</td>
            <td>{{$report->track_id}}</td>
            <td>{{$report->tracksection_id}}</td>
            <td>{{$report->date}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
