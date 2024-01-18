<form action="{{route('course-enq')}}" method="post">
    @csrf

    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <h1 class="text-center causes-text heading1 mb-1 logo-color mb-4"><b>PLEASE LEAVE YOUR NUMBER FOR FREE COUNSELLING BY OUR EXPERT</b></h1>
    <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" value="{{ old('name') }}" required>
        @error('name')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <input type="tel" class="form-control" id="" name="mobile" placeholder="Enter your Mobile No." value="{{ old('mobile') }}" required>
        @error('mobile')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required>
        @error('email')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <input type="text" class="form-control" id="city" name="city" placeholder="Enter your City" value="{{ old('city') }}" required>
        @error('city')
        <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" style="font-weight:600;">Choose Course</label>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check1" name="course[]" value="Fashion-Design">
                    <label class="form-check-label" for="check1" style="margin: 0 10px 0 0;">Fashion
                        Design</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check2" name="course[]" value="Interior-Design">
                    <label class="form-check-label" for="check2" style="margin: 0 10px 0 0;">Interior
                        Design</label>
                </div>
            </div>
            @error('course')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 enquiry-submit">
        <button type="submit" class="btn" style="padding: 6px 30px; border-radius: 0px; border: 0; border-radius: 5px; background-color: #ea4000; color: white;">Submit</button>
    </div>

</form>