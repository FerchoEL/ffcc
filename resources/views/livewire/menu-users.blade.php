<div>
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Exito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiar_page()" wire:model="search" class="form-control w-100" type="text" placeholder="Escriba un nombre">
        </div>
        <div class="class-header">
            <a class="btn btn-primary ml-4" href="{{route('menu.users.create')}}">Crear usuario</a>
        </div>
        @if ($users->count())
            <div class="card-body table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Compañia</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->company->name}}</td>
                            <td width='10px'>
                                <a class="btn btn-primary" href="{{route('menu.users.edit', $user)}}">Editar</a>
                            </td>
                            <td width='10px'>
                                {!! Form::model($user,['route'=> ['menu.users.destroy',$user], 'method' => 'delete']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
{{--                            <a class="btn btn-danger" href="{{route('menu.users.destroy', $user)}}">Eliminar</a>--}}{{----}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer table-responsive">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros...</strong>
            </div>
        @endif

    </div>
</div>
