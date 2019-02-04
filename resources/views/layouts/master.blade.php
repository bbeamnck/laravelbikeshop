{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"> </script>
</head>

<body>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Bikeshop</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a hrep="#">หน้าแรก</a></li>
                    <li><a hrep="#">ข้อมูลสินค้า</a></li>
                    <li><a hrep="#">รายงาน</a></li>
                </ul>
            </div>
    </nav>
    
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>หัวข้อ</strong>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคาขาย</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td>ชุดจักรยาน ขนาด XL</td>
                                <td>2500.00</td>
                            </tr>
                            <tr>
                                <td>P002</td>
                                <td>หมวกกันน้อครุ่น DL330</td>
                                <td>1500.00</td>
                            </tr>
                            <tr>
                                <td>P003</td>
                                <td>ชุดเกียร์ 001</td>
                                <td>1500.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10 col-md-offset-1">
                        <a href="#" class="btn btn-default">Default</a>
                        <a href="#" class="btn btn-primary">Primary</a>
                        <a href="#" class="btn btn-info">Info</a>
                        <a href="#" class="btn btn-success">Success</a>
                        <a href="#" class="btn btn-warning">Warning</a>
                        <a href="#" class="btn btn-danger">Danger</a>   
                </div>
                <div class="col-md-6">
                        <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <strong>Login</strong>
                                    </div>
                                </div>
                            </div>
                        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้">
                        <input type="password" class="form-control" placeholder="รหัสผ่าน">
                        <button class="btn btn-primary">เข้าระบบ</button>
                </div> 
                <div class="col-md-6">
                <div class="form-inline">
                        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้">
                        <input type="password" class="form-control" placeholder="รหัสผ่าน">
                        <button class="btn btn-primary">เข้าระบบ</button>
                </div>
            </div>
            </div>
        </div>

                    <a href="#" class="btn btn-default"><i class="fa fa-home"></i>หน้าหลัก</a>
                    <a href="#" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</a>
                    <a href="#" class="btn btn-info"><i class="fa fa-edit"></i>แก้ไข</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i>ลบ</a>
                    
       



</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","BikeShop | จำหน่ายอะไหล่จักรยานออนไลน์")</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"> </script>
    
</head>
<body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Bikeshop</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a hrep="#">หน้าแรก</a></li>
                        <li><a hrep="#">ข้อมูลสินค้า</a></li>
                        <li><a hrep="#">รายงาน</a></li>
                    </ul>
                </div>
        </nav>
        @yield("content")
        <script src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
</body>
</html>