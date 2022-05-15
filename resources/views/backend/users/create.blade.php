@extends("backend.layout.index")


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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('backend.users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Email <span class="text-danger">(*)</span></label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="fname" placeholder="Nhập email" required value="{{ old('email') }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Mật khẩu <span class="text-danger">(*)</span></label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" id="fname" placeholder="Nhập mật khẩu" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Xác nhận mật khẩu <span class="text-danger">(*)</span></label>
                        <div class="col-sm-9">
                            <input type="password" name="password_confirmation" class="form-control" id="fname" placeholder="Xác nhận mật khẩu" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" id="fname" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Họ tên</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="fname" placeholder="Nhập họ tên"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Giới tính</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="customControlValidation1" name="gender" checked value="{{ \App\Models\User::GENDER_BOY }}"/>
                                <label class="form-check-label mb-0" for="customControlValidation1">Nam</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="customControlValidation2" name="gender" value="{{ \App\Models\User::GENDER_GIRL }}"/>
                                <label class="form-check-label mb-0" for="customControlValidation2">Nữ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Số điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" id="fname" placeholder="Nhập số điện thoại"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="fname" placeholder="Nhập địa chỉ"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 control-label col-form-label">Ngày sinh</label>
                        <div class="col-sm-9">
                            <input type="date" name="date_of_birth" class="form-control" placeholder="mm/dd/yyyy" value="{{request('date_of_birth')}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 mt-3">Loại điện thoại</label>
                        <div class="col-md-9">
                            <select name="phone_company" class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                <option readonly="true" value="-1">--- Vui lòng chọn ---</option>
                                <optgroup label="IOS">
                                    <option value="IPHONE">Iphone</option>
                                </optgroup>
                                <optgroup label="Android">
                                    <option value="SAMSUNG">Samsung</option>
                                    <option value="OPPO">Oppo</option>
                                    <option value="NOKIA">Nokia</option>
                                    <option value="HUAWEI">Huawei</option>
                                    <option value="XIAOMI">Xiaomi</option>
                                    <option value="REALME">Realme</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 mt-3">Sở thích</label>
                        <div class="col-md-9">
                            <select name="hobbies[]" class="select2 form-select shadow-none mt-3" multiple="multiple" style="height: 36px; width: 100%">
                                @foreach($hobbies as $hobby)
                                    <option value="{{ $hobby->id }}" {{ request('hobbies') == $hobby->id ? 'selected' : '' }}>{{ $hobby->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Ảnh đại diện</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" name="avatar" class="custom-file-input"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 control-label col-form-label">Giới thiệu</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="introduction"></textarea>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Thêm mới
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
