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
        @foreach($versions as $version)
        <tr>
            <td>{{$version["version"]}}</td>
            <td>{{$version["mc-version"]}}</td>
            <td>{{$version["link"]}}</td>
            <td>{{$version["stability"]}}</td>
            <td>{{$version["downloads"]}}</td>
            <td>
                <a class="btn btn-danger btn-sm" href="{{URL::to("mod/delete-version/$version[id]")}}">Delete</a>
            </td>
        </tr>
        @endforeach
        <form >
            <tr>
                <td>
                    <input type="text" name="version" class="form-control" placeholder="Enter the Version(number)">
                </td>
                <td>
                    <select name="mc-version" class="form-control">
                        <option value="1.2.5">1.2.5</option>
                        <option value="1.4.7">1.4.7</option>
                        <option value="1.5.2">1.5.2</option>
                        <option value="1.6.4">1.6.4</option>
                        <option value="1.7.2">1.7.2</option>
                    </select>
                </td>
                <td>
                    <div class="uk-form-file">
                        <button class="btn btn-success btn-sm">Choose File</button>
                        <input name="file" type="file">
                    </div>
                </td>
                <td>
                    <select name="stability" class="form-control">
                        <option value="0">Stable</option>
                        <option value="1">Prewiev</option>
                        <option value="2">Unstable</option>
                        <option value="3">Dev-Version</option>
                        <option value="4">Testing</option>
                    </select>
                </td>
                <td>0</td>
            </tr>
        </form>
    </tbody>
</table>