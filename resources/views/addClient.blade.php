<!DOCTYPE html>
<html>
<head>
    <title>Add Client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.nav')

    <div class="container" style="margin-left: 20px;">
        <h2>Clients</h2>

        <form action="{{ route('insertClient') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="clientName">Client Name</label>
                <input type="text" id="clientName" name="clientName" class="form-control" value="{{ old('clientName') }}">
                @error('clientName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" id="website" name="website" class="form-control" value="{{ old('website') }}">
                @error('website')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                    <option value="">Please Select City</option>
                    <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
                    <option value="Giza" {{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
                    <option value="Alex" {{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
                </select>
                @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="active" name="active" {{ old('active') ? 'checked' : '' }}> Active
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="image">Image</label>
                @if(isset($client) && $client->image)
                    <div>
                        <p>Current Image:</p>
                        <img src="{{ asset('assets/images/' . $client->image) }}">
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
