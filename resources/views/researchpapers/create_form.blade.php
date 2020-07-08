<form method="post" action="{{route('papers.store')}}">
  @csrf
  <p class="lead m-2">Basic Information</p>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Paper Title</label>
    <div class="col-sm-9">
      <input type="text" name="title"  class="form-control form-control-sm" id="title" value="{{old('title')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="abstract" class="col-sm-2 col-form-label">Paper Abstract</label>
    <div class="col-sm-9">
      <textarea name="abstract"  class="form-control form-control-sm" id="abstract">
        {{old('abstract')}}
      </textarea>
    </div>
  </div>
   <div class="form-group row">
    <label for="keywords" class="col-sm-2 col-form-label">Paper Keywords</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control form-control-sm" name="keywords" id="keywords" value="{{old('keywords')}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="journal_id" class="col-sm-2 col-form-label">Research Journal</label>
    <div class="col-sm-9">
      <select class="form-control form-control-sm"  name="journal_id" id="journal_id">
        <option>Choose a Journal</option>
        @foreach($journals as $journal)
        <option value="{{$journal->id}}">{{$journal->title}}</option>
        @endforeach

      </select>
    </div>
  </div>
  <p class="lead m-2">Corresponding Author: Author who will receive all communication from journal</p>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-8">
        <input type="text" name="authors_name" class="form-control form-control-sm" id="name" value="{{old('name')}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="email" name="authors_email" class="form-control form-control-sm" id="email" value="{{old('email')}}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-8">
        <input type="text" name="address" class="form-control form-control-sm" id="address" value="{{old('address')}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="country" class="col-sm-2 col-form-label">Country</label>
      <div class="col-sm-8">
        <input type="text" name="country"  class="form-control form-control-sm" id="country" value="{{old('country')}}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="organisation" class="col-sm-2 col-form-label">Work</label>
      <div class="col-sm-8">
        <input type="text" name="organisation" class="form-control form-control-sm" id="organisation" value="{{old('organisation')}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
      <div class="col-sm-8">
        <input type="text" name="mobile"  class="form-control form-control-sm" id="mobile" value="{{old('mobile')}}">
      </div>
    </div>
  </div>
  <p class="lead m-2">Suggest Reviewer :You may suggest reviewer name and this is optional</p>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="viewers_name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-8">
        <input type="text" name="viewers_name"  class="form-control form-control-sm" id="viewers_name" value="{{old('viewers_name')}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="viewers_email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="text" name="viewers_email" class="form-control form-control-sm" id="viewers_email" value="{{old('viewers_email')}}">
      </div>
    </div>
  </div>
  <p class="lead m-2">Research Paper :Paper should be in .doc or .docx format within 9000 words</p>
  <div class="form-group row">
    <label for="abstract" class="col-sm-2 col-form-label">Research Paper</label>
    <div class="col-sm-9">
       <input type="file"  class="form-control" id="email" value="{{old('email')}}">
    </div>
  </div>
   <div class="form-group row">
    <label for="total_words" class="col-sm-2 col-form-label">Total Words</label>
    <div class="col-sm-9">
      <select class="form-control form-control-sm" name="total_words" id="total_words">
        <option value="">Select  total words</option>
        <option value="0-3000 words">0-3000 words</option>
        <option value="3001-4500 words">3001-4500 words</option>
        <option value="4501-6000 words">4501-6000 words</option>
        <option value="6001-7500 words">6001-7500 words</option>
        <option value="7501-9000 words">7501-9000 words</option>
      </select>
    </div>

  </div>
  <p class="lead m-2">Payment:You agree to pay publication fee if paper is accepted</p>
  <div class="form-group row">
    <label for="package_id" class="col-sm-3 col-form-label">Publication Package</label>
    <div class="col-sm-8">
      <select class="form-control form-control-sm" name="package_id" id="package_id">
        <option>Choose  Package</option>
        <option value="1">Student Package</option>
        <option value="2">Economy Package</option>
        <option value="3">Basic Package</option>
        <option value="4">Premium Package</option>
        <option value="5">Super Premium Package</option>
      </select>
    </div>
  </div>
  <button type="submit" class="m-3 btn btn-danger">Submit</button>
</form>
