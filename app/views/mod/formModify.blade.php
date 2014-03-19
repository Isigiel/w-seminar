
                        <form role="form" method="post" action="{{URL::to("mod/modify/$mod[id]")}}">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="Modname">Name of the Mod</label>
                                        <input type="text" value="{{$mod["name"]}}" name="name" class="form-control" id="Modname" placeholder="Enter your Mods name">
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <div class="form-group">
                                        <label for="Author">Name of the Author(s)</label>
                                        <input type="text" value="{{$mod["author"]}}" name="authors" class="form-control" id="Author" placeholder="Enter the Author(s)">
                                        <p class="help-block">Divide multiple Authors by comma.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Description">Mod Description</label>
                                        <textarea id="Description" name="description" placeholder="Please write a short Description about the Mod you're submitting." class="form-control" rows="3">{{$mod["description"]}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Category">Category</label>
                                        <select name="category" id="Category" class="form-control">
                                            <option value="0">None</option>
                                            <option value="1">Magic</option>
                                            <option value="2">Technic</option>
                                            <option value="3">Automation</option>
                                            <option value="4">Administration</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="Tags">Tags</label>
                                        <input type="text" value="{{$mod[" tags "]}}" name="tags" class="form-control" id="Tags" placeholder="Enter the Tags that match your mod">
                                        <p class="help-block">Tags are divided by comma.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Submit changes</button>
                                </div>
                            </div>
                        </form>