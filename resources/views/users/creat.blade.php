@extends("index")


@section('tittle')
    Creat users
@endsection

@section('page-tittle')
    Creat new users
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="fname" placeholder="Your email"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="fname" placeholder="Your password"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Confirm password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="fname" placeholder="Confirm your password"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" placeholder="Username"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Full name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" placeholder="Your full name"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Gender</label>
                    <div class="col-md-9">
                        <div class="form-check">
                            <input
                                type="radio"
                                class="form-check-input"
                                id="customControlValidation1"
                                name="radio-stacked"
                                required
                            />
                            <label
                                class="form-check-label mb-0"
                                for="customControlValidation1"
                            >Male</label
                            >
                        </div>
                        <div class="form-check">
                            <input
                                type="radio"
                                class="form-check-input"
                                id="customControlValidation2"
                                name="radio-stacked"
                                required
                            />
                            <label
                                class="form-check-label mb-0"
                                for="customControlValidation2"
                            >Female</label
                            >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname" placeholder="Your phone number"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 control-label col-form-label">Date of birth</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 mt-3">Phone company</label>
                    <div class="col-md-9">
                        <select class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                            <option>Select</option>
                            <optgroup label="IOS">
                                <option value="AK">Iphone</option>
                            </optgroup>
                            <optgroup label="Android">
                                <option value="AZ">Samsung</option>
                                <option value="CO">Oppo</option>
                                <option value="ID">Nokia</option>
                                <option value="MT">Huawei</option>
                                <option value="NE">Xiaomi</option>
                                <option value="NM">Realme</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 mt-3">Hobbies</label>
                    <div class="col-md-9">
                        <select class="select2 form-select shadow-none mt-3" multiple="multiple" style="height: 36px; width: 100%">
                            <optgroup label="Land">
                                <option value="AK" selected>Football</option>
                                <option value="HI">Badminton</option>
                                <option value="OR">Climbing</option>
                                <option value="NV">Riding</option>
                            </optgroup>
                            <optgroup label="Underwater">
                                <option value="CA" selected>Swimming</option>
                                <option value="WA">Fishing</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3">Avatar</label>
                    <div class="col-md-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required/>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 control-label col-form-label">Introduction</label>
                    <div class="col-sm-9">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="button" class="btn btn-primary">
                        Creat user
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
