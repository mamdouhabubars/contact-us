@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-auto">
            <div class="contact-form">
                <h1>تعديل بيانات الاتصال</h1>
                <form action="{{url('update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$contact->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputFirstName">الاسم</label>
                                <input type="text" class="form-control" id="inputFirstName" name="first_name" value="{{$contact->first_name}}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputLastName">العائلة</label>
                                <input type="text" class="form-control" id="inputLastName" name="last_name" value="{{$contact->last_name}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" value="{{$contact->email}}" required>
                    </div>

                    <input type="submit" class="btn btn-primary" value="تحديث">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection