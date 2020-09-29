@extends('admin.layouts.layout') @section('main-content')

<script>
    // $('#myModal').on('shown.bs.modal', function() {
    //     $('#myInput').trigger('focus')
    // });

    function editable(id) {

        $('#userAddModalLabel').text('Ma\'lumotlarni o\'zgartirish');
        $('#modal_login').val($('#' + id + '_login').text());
        $('#modal_email').val($('#' + id + '_email').text());
        $('#modal_phone').val($('#' + id + '_phone').text());
        $('#modal_age').val($('#' + id + '_age').text());
        $('#modal_form').prop("action", "/admin/users/edit/" + id);
    };

    function deletable(id) {
        console.log(id);
        $('#modal_id').val(id);
        $('#yes_delete').attr("href", "/admin/users/delete/" + id);
        console.log($('#yes_delete').attr("href"));
    };

    function clearForm() {
        console.log("CLEAR ISHLADI");
        $('#userAddModalLabel').text('Foydalanuvchi qo\'shish');
        $('#modal_login').val(' ');
        $('#modal_email').val(' ');
        $('#modal_phone').val(' ');
        $('#modal_age').val(' ');
    };


    function validable_custom() {
        $("#saqlash_button").attr("disabled", "disabled").prop("disabled");
        if ($("#modal_password").val() === $("#modal_password_verify").val() && $("#modal_password").val() != "") {
            $("#indicator_password_verify").css("display", "none");
            $("#saqlash_button").removeAttr("disabled").removeProp("disabled");

        } else {
            $("#indicator_password_verify").css("display", "block");
            $("#saqlash_button").attr("disabled", "disabled").prop("disabled");
        }
    }
</script>


@if(\Session::has('message') )
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>
  </strong> {{Session::get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<!-- Modal begin -->
<div class="modal fade" id="userAddModal" tabindex="-1" aria-labelledby="userAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userAddModalLabel">Foydalanuvchi qo'shish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">


                <form method="POST" id="modal_form" action="/admin/users/add">
                    <div class="form-group">
                        {{csrf_field()}}
                        <label for="modal_login" class="col-form-label">login:</label>
                        <input type="text" class="form-control" name="login" id="modal_login">
                        <label for="modal_password" class="col-form-label">parol:</label>
                        <input type="password" class="form-control" onkeyup="validable_custom();" name="password" id="modal_password">
                        <label for="modal_password_verify" class="col-form-label">parol(Qayta kiriting):</label>
                        <input type="password" class="form-control" onkeyup="validable_custom();" name="password" id="modal_password_verify">
                        <p id="indicator_password_verify" class=" text-danger">parollar bir xil emas!!!</p>

                        <label for="modal_email" class="col-form-label">email:</label>
                        <input type="email" class="form-control" name="email" id="modal_email">


                        <label for="modal_phone" class="col-form-label">tel:</label>
                        <input type="text" class="form-control" name="phone" id="modal_phone">
                        <label for="modal_age" class="col-form-label">yosh:</label>
                        <input type="text" class="form-control" name="age" id="modal_age">

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" id="saqlash_button" class="btn btn-primary" value="Saqlash" disabled>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal-end -->

<div class="modal fade" id="userDeleteModal" tabindex="-1" aria-labelledby="userDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userDeleteModalLabel">Foydalanuvchi o'chirish</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <h4>Bu foydalanuvchini chindan o'chirmoqchimisiz?</h4>


                <div class="form-group">
                    <input type="hidden" id="modal_id" name="id" value="">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Yo'q</button>
                <a type="button" id="yes_delete" href="" class="btn btn-primary">Ha</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- user delete modal-end -->

<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">Foydalanuvchilar</h4>
        <span class=" float-right">


                    <a href="" class="btn btn-success"  data-toggle="modal" data-target="#userAddModal" onclick="clearForm();"><i class="fa fa-user-plus"> Foydalanuvchi qo'shish</i></a>
                </span>
    </div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">login</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">age</th>
                        <th scope="col">email_verified_at</th>
                        <!-- <th scope="col">password</th> -->
                        <!-- <th scope="col">remember_token</th> -->
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col"><i class="fa fa-edit "><span class="m-text-bold">edit</span> </i> </th>
                        <th scope="col"><i class="fa fa-trash-o ">delete</i></th>
                        <i class="text"></i>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td id="{{$user->id}}_login">{{$user->login}}</td>
                        <td id="{{$user->id}}_email">{{$user->email}}</td>
                        <td id="{{$user->id}}_phone">{{$user->phone}}</td>
                        <td id="{{$user->id}}_age">{{$user->age}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <!-- <td>{{$user->password}}</td> -->

                        <!-- <td>{{$user->remember_token}}</td> -->
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td><a class="btn btn-light" data-toggle="modal" data-target="#userAddModal" onclick="editable(this.id);" id="{{$user->id}}"><i class="fa fa-edit"></i></a></td>
                        <td><a class="btn btn-light" data-toggle="modal" data-target="#userDeleteModal" onclick="deletable(this.id);" id="{{$user->id}}"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$users->links()}}
</div>



@endsection