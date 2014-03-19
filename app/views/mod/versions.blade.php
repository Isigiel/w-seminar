

<table class="table table-striped">
    <thead>
        <tr>
            <th>Version</th>
            <th>Minecraft-Version</th>
            <th>Download Link</th>
            <th>Stability</th>
            <th>Downloads</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @if($versions)
        @foreach($versions as $version)
        <tr>
            <td>{{$version["version"]}}</td>
            <td>{{$version["mc_version"]}}</td>
            <td><a href="{{$version["link"]}}">{{$version["link"]}}</a></td>
            <td>{{$version["stability"]}}</td>
            <td>{{$version["downloads"]}}</td>
            <td>
                <a class="btn btn-danger btn-sm" href="{{URL::to("mod/delete-version/$version[id]")}}">Delete</a>
            </td>
        </tr>
         @endforeach
         @endif
         <form enctype="multipart/form-data" role="form" method="post" action="{{URL::to("mod/add-version/$mod[id]")}}">
            <tr>
                <td>
                    <input type="text" name="version" class="form-control" placeholder="Enter the Version(number)">
                </td>
                <td>
                    <select name="mc_version" class="form-control">
                        <option value="1.2.5">1.2.5</option>
                        <option value="1.4.7">1.4.7</option>
                        <option value="1.5.2">1.5.2</option>
                        <option value="1.6.4">1.6.4</option>
                        <option value="1.7.2">1.7.2</option>
                    </select>
                </td>
                <td>
                        <input type="file" name="file" id="file">
                </td>
                <td>
                    <select name="stability" class="form-control">
                        <option value="0">{{Get::stability(0)}}</option>
                        <option value="1">{{Get::stability(1)}}</option>
                        <option value="2">{{Get::stability(2)}}</option>
                        <option value="3">{{Get::stability(3)}}</option>
                    </select>
                </td>
                <td>0</td>
                <td><button type="submit" class="btn btn-success btn-sm">Upload Version</button></td>
            </tr>
        </form>
    </tbody>
</table>