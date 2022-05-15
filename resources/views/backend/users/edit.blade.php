@extends("backend.layout.index")


@section('tittle')
    Update
@endsection

@section('page-tittle')
    Update users
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <form action="{{route('backend.users.update', ['id' => $user -> id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Email *</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="fname" placeholder="Nhập email" required value="{{ $user->email }}" disabled/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" id="fname" placeholder="Username" value="{{ $user->username }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Họ tên</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="fname" placeholder="Nhập họ tên" value="{{ $user->name }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Giới tính</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="customControlValidation1" name="gender" value="{{ \App\Models\User::GENDER_BOY }}"
                                    {{ $user->gender == \App\Models\User::GENDER_BOY ? 'checked' : ''}}
                                />
                                <label class="form-check-label mb-0" for="customControlValidation1">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="customControlValidation2" name="gender" value="{{ \App\Models\User::GENDER_GIRL }}"
                                        {{ $user->gender == \App\Models\User::GENDER_GIRL ? 'checked' : ''}}
                                />
                                <label class="form-check-label mb-0" for="customControlValidation2">Nữ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Số điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" id="fname" placeholder="Nhập số điện thoại" value="{{ $user->phone }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Date of birth</label>
                        <div class="col-sm-9">
                            <input type="date" name="date_of_birth" class="form-control" placeholder="mm/dd/yyyy" value="{{ $user->date_of_birth }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 mt-3">Phone company</label>
                        <div class="col-md-9">
                            <select name="phone_company" class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                <option readonly="true" value="-1">--- Vui lòng chọn ---</option>
                                <optgroup label="IOS">
                                    <option value="IPHONE" {{ $user->phone_company == "IPHONE" ? 'selected' : ''}}>Iphone</option>
                                </optgroup>
                                <optgroup label="Android">
                                    <option value="SAMSUNG" {{ $user->phone_company == "SAMSUNG" ? 'selected' : ''}}>Samsung</option>
                                    <option value="OPPPO" {{ $user->phone_company == "OPPPO" ? 'selected' : ''}}>Oppo</option>
                                    <option value="NOKIA" {{ $user->phone_company == "NOKIA" ? 'selected' : ''}}>Nokia</option>
                                    <option value="HUAWEI" {{ $user->phone_company == "HUAWEI" ? 'selected' : ''}}>Huawei</option>
                                    <option value="XIAOMI" {{ $user->phone_company == "XIAOMI" ? 'selected' : ''}}>Xiaomi</option>
                                    <option value="REALME" {{ $user->phone_company == "REALME" ? 'selected' : ''}}>Realme</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 mt-3">Hobbies</label>
                        <div class="col-md-9">
                            <select class="select2 form-select shadow-none mt-3" name="hobbies[]" multiple="multiple" style="height: 36px; width: 100%">
                                @foreach($hobbies as $hobby)
                                    <option value="{{ $hobby->id }}" {{ in_array($hobby->id, $userHobby) ? 'selected' : '' }}>{{ $hobby->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Avatar</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="avatar" id="validatedCustomFile"/> <br>
                                @if ($user->avatar)
                                    <img src="{{ asset($user->avatar) }}" alt="" width="150px" style="margin-top: 5px">
                                @endif
                            </div>

                    </div>
                    <div class="form-group row mt-3">
                        <label for="cono1" class="col-sm-3 control-label col-form-label">Introduction</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="introduction">{{ $user->introduction }}</textarea>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Lưu thay đổi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
