@csrf
<p class="lead m-2">Basic Information about the Library</p>
  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label"> Title</label>
    <div class="col-sm-9">
      <input type="text" name="title"  class="form-control form-control-sm" id="title" value="{{old('title', $library->title)}}">
    </div>
    @error('title')
    <p class="text text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group row">
    <label for="abstract" class="col-sm-2 col-form-label"> Abstract</label>
    <div class="col-sm-9">
      <textarea name="abstract"  class="form-control form-control-sm" id="abstract">
        {{old('abstract', $library->abstract)}}
      </textarea>
    </div>
    @error('abstract')
    <p class="text text-danger">{{$message}}</p>
    @enderror
  </div>
   <div class="form-group row">
    <label for="keywords" class="col-sm-2 col-form-label"> Keywords</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control form-control-sm" name="keywords" id="keywords" value="{{old('keywords', $library->keywords)}}">
    </div>
       @error('keywords')
      <p class="text text-danger">{{$message}}</p>
      @enderror
  </div>
  <div class="form-group row">
    <label for="category_id" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-9">
      <select class="form-control form-control-sm"  name="category_id" id="category_id">
        <option>Choose a Category</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{ old("category_id", $library->category_id) == $category->id ? 'selected' : '' }}>{{$category->title}}</option>
        @endforeach

      </select>
    </div>
  </div>
  <p class="lead m-2">Corresponding Author: Author who will receive all communication from journal</p>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-8">
        <input type="text" name="authors_name" class="form-control form-control-sm" id="name" value="{{old('authors_name', $library->authors_name)}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="email" name="authors_email" class="form-control form-control-sm" id="authors_email" value="{{old('authors_email', $library->authors_email)}}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-8">
        <input type="text" name="address" class="form-control form-control-sm" id="address" value="{{old('address', $library->address)}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="country" class="col-sm-2 col-form-label">Country</label>
      <div class="col-sm-8">
        <input type="text" name="country"  class="form-control form-control-sm" id="country" value="{{old('country', $library->country)}}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="organisation" class="col-sm-2 col-form-label">Work</label>
      <div class="col-sm-8">
        <input type="text" name="organisation" class="form-control form-control-sm" id="organisation" value="{{old('organisation', $library->organisation)}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
      <div class="col-sm-8">
        <input type="text" name="mobile"  class="form-control form-control-sm" id="mobile" value="{{old('mobile', $library->mobile)}}">
      </div>
    </div>
  </div>
  <p class="lead m-2">Suggest Reviewer :You may suggest reviewer name and this is optional</p>
  <div class="form-group row">
    <div class="col-md-6 row">
      <label for="viewers_name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-8">
        <input type="text" name="viewers_name"  class="form-control form-control-sm" id="viewers_name" value="{{old('viewers_name', $library->viewers_name)}}">
      </div>
    </div>
    <div class="col-md-6 row">
      <label for="viewers_email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="text" name="viewers_email" class="form-control form-control-sm" id="viewers_email" value="{{old('viewers_email',  $library->viewers_email)}}">
      </div>
    </div>
  </div>
  <p class="lead m-2">Research Document :Document should be in .doc or .docx format within 9000 words</p>
  <div class="form-group row">
    <label for="abstract" class="col-sm-2 col-form-label">Research Document</label>
    <div class="col-sm-9">
       <input type="file"  class="form-control" id="email" name="library_url">
    </div>
  </div>
   <div class="form-group row">
    <label for="total_words" class="col-sm-2 col-form-label">Total Words</label>
    <div class="col-sm-9">
      <select class="form-control form-control-sm" name="total_words" id="total_words">
        <option>Select  total words</option>
        <option value="0-3000 words" {{ old("total_words", $library->total_words) == "0-3000 words" ? 'selected' : '' }}>0-3000 words</option>
        <option value="3001-4500 words"  {{ old("total_words", $library->total_words) == "3001-4500 words" ? 'selected' : '' }}>3001-4500 words</option>
        <option value="4501-6000 words"  {{ old("total_words", $library->total_words) == "4501-6000 words" ? 'selected' : '' }}>4501-6000 words</option>
        <option value="6001-7500 words"  {{ old("total_words", $library->total_words) == "6001-7500 words" ? 'selected' : '' }}>6001-7500 words</option>
        <option value="7501-9000 words"  {{ old("total_words", $library->total_words) == "7501-9000 words" ? 'selected' : '' }}>7501-9000 words</option>
      </select>
    </div>

  </div>
  <p class="lead m-2">Payment:You agree to pay publication fee if Document is accepted</p>
  <div class="form-group row">
    <label for="package_id" class="col-sm-3 col-form-label">Publication Package</label>
    <div class="col-sm-8">
      <select class="form-control form-control-sm" name="package_id" id="package_id">
        <option>Choose  Package</option>
        <option value="1"  {{ old("package_id", $library->package_id) == 1 ? 'selected' : '' }}>Student Package</option>
        <option value="2" {{ old("package_id", $library->package_id) == 2 ? 'selected' : '' }}>Economy Package</option>
        <option value="3" {{ old("package_id", $library->package_id) == 3 ? 'selected' : '' }}>Basic Package</option>
        <option value="4" {{ old("package_id", $library->package_id) == 4 ? 'selected' : '' }}>Premium Package</option>
        <option value="5" {{ old("package_id", $library->package_id) ==  5 ? 'selected' : '' }}>Super Premium Package</option>
      </select>
    </div>
  </div>
  <button type="submit" class="m-3 btn btn-danger">{{$buttonText}}</button>
