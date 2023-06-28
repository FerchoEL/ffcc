@dump($merge_tracks[0]->id)
<div class="container">
    <div class="row">
        @foreach($merge_tracks as $merge_track)
            <div class="col-md-4 col-sm-6">
{{--                <x-cards title='{{$merge_track->name}}' description="{{$merge_track->yard->name}}"
                         trackId="{{$merge_track->id}}"/>--}}
                <div x-data="{ count: 0 }">
                    <button x-on:click=count={{$merge_track->id}}>
                        <x-cards title="{{$merge_track->name}}" description="{{$merge_track->yard->name}}" trackId="{{$merge_track->id}}"/>
                    </button>
                    <span x-text="count"></span>
                </div>
                                {{--@livewire('cards',['title'=>$merge_track->name, 'description'=>$merge_track->yard->name, 'trackId'=>$merge_track->id])--}}
            </div>
        @endforeach
    </div>
</div>
<div class="mt-4 d-flex justify-content-center pagination-sm">
    {{--    {{$tracks->onEachSide(1)}}--}}
</div>

<div class="modal fade myModal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tramos de vía</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        @foreach($merge_tracksections as $merge_tracksection)
                            <div class="col-lg-4 col-sm-6">
                                {{--<x-cards title="{{$merge_tracksection->name}}" description="Tramo de vía"
                                         trackId="{{$merge_tracksection->id}}"/>--}}
                                @livewire('cards',['title'=>$merge_tracksection->name, 'description'=>'Tramo de vía', 'trackId'=>$merge_tracksection->id])

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



