<div class="row">
    @foreach ($mods as $mod)
        <div class="col-md-4">
            <h4>{{$mod->name}}</h4>
        </div>
        <div class="col-md-2">
            <a href="{{URL::to("mod/modify/$mod->id")}}" class="btn btn-sm btn-danger">Modify mod</a>
        </div>
    @endforeach
</div>
<br><br>
<a href="{{URL::to("mod/new")}}" class="btn btn-block btn-sm btn-success">Create new Mod</a>