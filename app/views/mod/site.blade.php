<form method="post" action="{{URL::to("site/edit/$mod[id]")}}">

    <textarea name="content" data-uk-markdownarea="{mode:'split'}">@if($site) {{$site}} @else {{$standart}} @endif</textarea>
    <br>
    <div class="row">
        <div class="col-md-6">
            <button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
        </div>
        <div class="col-md-6">
            <a href="{{URL::to("site/delete/$mod[id]")}}" class="btn btn-danger btn-lg btn-block">Delete Site</a>
        </div>
    </div>
</form>