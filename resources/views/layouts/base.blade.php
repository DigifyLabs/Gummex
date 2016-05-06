<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gummex Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {{HTML::style("bootstrap/css/bootstrap.min.css")}}
    <!-- Font Awesome -->
    {{HTML::style("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css")}}
    <!-- Ionicons -->
    {{HTML::style("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}
    <!-- Theme style -->
    {{HTML::style("css/AdminLTE.min.css")}}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{HTML::style("css/skins/_all-skins.min.css")}}

    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <{{HTML::script("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js")}}
    {{HTML::script("https://oss.maxcdn.com/respond/1.4.2/respond.min.js")}}
    <![endif]-->
    <style>
        .box
        {
            padding:50px;
        }
        .box-body
        {
            overflow: hidden;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
@yield('body')

<!-- jQuery 2.1.4 -->
{{HTML::script("plugins/jQuery/jQuery-2.1.4.min.js")}}
<!-- Bootstrap 3.3.5 -->
{{HTML::script("bootstrap/js/bootstrap.min.js")}}
<!-- SlimScroll -->
{{HTML::script("plugins/slimScroll/jquery.slimscroll.min.js")}}
<!-- FastClick -->
{{HTML::script("plugins/fastclick/fastclick.min.js")}}
<!-- AdminLTE App -->
{{HTML::script("js/app.min.js")}}
<!-- AdminLTE for demo purposes -->
{{HTML::script("js/demo.js")}}
@yield('script')
</body>
</html>
