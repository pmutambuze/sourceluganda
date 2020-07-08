<form class="card" method="post" action="{{route('journals.update', $journal->id)}}">
    @csrf
    @method('put')
    <div class="card-body">
        <h3 class="card-title">Basic Information</h3>
        <div class="row">
        <div class="col-md-10">
            <div class="form-group">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control"  value="{{$journal->title}}">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group">
            <label class="form-label">Publishing Date</label>
            <input type="date" name="publishing_date" class="form-control"  value="{{$journal->publishing_date}}">
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="form-group">
            <label class="form-label">Publishing Fee</label>
            <input type="number" name="publishing_fee" class="form-control" value="{{$journal->publishing_fee}}">
            </div>
        </div>
        </div>
        <h3 class="card-title">Other Information</h3>
        <div class="row">
        <div class="col-sm-6 col-md-5">
            <div class="form-group">
            <label class="form-label">Image File</label>
            <input type="file" name="sample_image_path" class="form-control">
            </div>
        </div>
        <div class="col-sm-6 col-md-5">
            <div class="form-group">
            <label class="form-label">Frequency</label>
             <select class="form-control custom-select" name="frequency">
                <option value="weekly" {{$journal->frequency == 'weekly'? 'selected':null}}>Weekly</option>
                <option value="monthly" {{$journal->frequency == 'monthly'? 'selected':null}}>Monthly</option>
                <option value="annually" {{$journal->frequency == 'annually'? 'selected':null}}>Annually</option>
            </select>
            </div>
        </div>
         <div class="col-md-10">
             <div class="form-group mb-0">
                <label class="form-label">Description</label>
             <wysiwyg name="description" value="{{$journal->description}}"></wysiwyg>
            </div>

        </div>
        </div>
    </div>


    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Update a journal</button>
    <a href="{{route('journals.layout.edit', $journal->id)}}" class="btn btn-outline-primary">Update other info about a journal</a>
    </div>
</form>
