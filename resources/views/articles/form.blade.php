<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
<input type="hidden" name="user_id" value="1"/>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="title" class="form-control"/>
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control"></textarea>
</div>
<div class="form-group">
    <button class="btn btn-primary">{{$buttonText}}</button>
</div>