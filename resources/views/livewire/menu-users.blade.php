<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiar_page()" wire:model="search" class="form-control w-100" type="text" placeholder="Escriba un nombre">
        </div>
        @if ($users->count())
            <div class="card-body table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width='10px'>
                                <a class="btn btn-primary" href="{{route('menu.users.edit', $user)}}">Editar</a>
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
                <strong>No existe el registro solicitado...</strong>
            </div>
        @endif
            
    </div>
</div>
