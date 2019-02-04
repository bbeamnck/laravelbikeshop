@extends("layouts.master")
@section('title') Bikeshop | แก้ไขข้อมูลสินค้า@stop
@section('content')
{!! Form::model($product,array('method' => 'post','enctype' => 'multipart/form-data')) !!}
<input type="hidden" name="id" value="{{ $product->id }}">
<table>
    <tr>
        <td>{{ Form::label('code','รหัสสินค้า') }}</td>
        <td>{{ Form::text('code',Input::old('code'),['class' => 'form-control'])}}</td>
    </tr>
    <tr>
        <td>{{ Form::label('name','ชื่อสินค้า') }}</td>
        <td>{{ Form::text('name',Input::old('code'),['class' => 'form-control'])}}</td>
    </tr>
    <tr>
        <td>{{ Form::label('stock_qty','คงเหลือ') }}</td>
        <td>{{ Form::text('stock_qty',Input::old('code'),['class' => 'form-control'])}}</td>
    </tr>
    <tr>
        <td>{{ Form::label('price','ราคาต่อหน่วย') }}</td>
        <td>{{ Form::text('price',Input::old('code'),['class' => 'form-control'])}}</td>
    </tr>
    <tr>
        <td>{{ Form::label('image','เลือกรูปภาพสินค้า') }}</td>
        <td>{{ Form::file('image')}}</td>
    </tr>
</table>
<button type="reset" class="btn btn-danger">ยกเลิก</button>
<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
{!! Form::close() !!}
@endsection