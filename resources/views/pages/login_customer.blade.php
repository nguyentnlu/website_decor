@extends('layout')

@section('content')
<!--================login_part Area =================-->
<section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>New to our Shop?</h2>
                        <p>There are advances being made in science and technology
                            everyday, and a good example of this is the</p>
                        <a href="{{URL::to('/dang-ky')}}" class="btn_3">Tạo tài khoản</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <center><h3>Đăng nhập</h3></center>
                        <?php
                            use Illuminate\Support\Facades\Session;
            
                            $message = Session::get('message');
                            if($message)
                            {
                                echo'<span class="text-message">'.$message.'</span>';
                                Session::put('message', null);
                            }
                        ?>
                        <form class="row contact_form" action="{{URL::to('/dang-nhap-tai-khoan')}}" method="post" novalidate="novalidate">
                        {{csrf_field()}}
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="email" value=""
                                    placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value=""
                                    placeholder="Mật khẩu">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Ghi nhớ</label>
                                </div>
                                <button type="submit" value="submit" class="btn_3">
                                    Đăng nhập
                                </button>
                                <a class="lost_pass" href="#">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
@endsection