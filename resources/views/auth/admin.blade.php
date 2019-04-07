<div class="admin-form hidden">
    <div class="imgUp m-auto">
        <div class="imagePreview">
            <label class="btn btn-primary">
                Upload
                <input
                    class="uploadFile img" 
                    name="image" 
                    style="width: 0px;height: 0px;overflow: hidden;"
                    type="file" 
                    value="Upload Photo" 
                >
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label 
            for="first_name" 
            class="col-md-4 col-form-label text-md-right"
        >
            {{ __('First Name') }}
        </label>

        <div class="col-md-6">
            <input 
                id="first_name" 
                type="text" 
                class="for-name form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" 
                name="first_name" 
                value="{{ old('first_name') }}" 
                required 
                autofocus
            >

            @if ($errors->has('first_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label 
            for="last_name" 
            class="col-md-4 col-form-label text-md-right"
        >
            {{ __('Last Name') }}
        </label>

        <div class="col-md-6">
            <input 
                id="last_name" 
                type="text" 
                class="for-name form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" 
                name="last_name" 
                value="{{ old('last_name') }}" 
                required 
                autofocus
            >

            @if ($errors->has('last_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label 
            for="email" 
            class="col-md-4 col-form-label text-md-right"
        >
            {{ __('E-Mail Address') }}
        </label>

        <div class="col-md-6">
            <input 
                id="email" 
                type="email" 
                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                name="email" 
                value="{{ old('email') }}" 
                required
            >

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label 
            for="password" 
            class="col-md-4 col-form-label text-md-right"
        >
            {{ __('Password') }}
        </label>

        <div class="col-md-6">
            <input 
                id="password" 
                type="password" 
                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                name="password" 
                required
            >

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label 
            for="password-confirm" 
            class="col-md-4 col-form-label text-md-right"
        >
            {{ __('Confirm Password') }}
        </label>

        <div class="col-md-6">
            <input 
                id="password-confirm" 
                type="password" 
                class="form-control" 
                name="password_confirmation" 
                required
            >
        </div>
    </div>

    <input type="hidden" name="role" value="admin">

    <div class="w-100 text-center">
            <button type="submit" class="btn btn-primary d-inline">
                {{ __('Register') }}
            </button>
    </div>
</div>