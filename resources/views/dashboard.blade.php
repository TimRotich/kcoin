<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>K-Coin</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/logo.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

{{--    charts--}}
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src = "https://code.highcharts.com/highcharts.js"></script>

    <script src = "https://code.highcharts.com/highcharts.js"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My K-Coin Account') }}
        </h2>
    </x-slot>

    @if (Session::has('success'))
        <div class="col-sm-12">
            <div class="alert alert-success " role="alert">
                {{ Session::get('success') }}
                <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            </div>
        </div>
    @elseif(Session::has('error'))
        <div class="col-sm-12">
            <div class="alert alert-danger " role="alert">
                {{ Session::get('error') }}
                <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            </div>
        </div>
    @endif
{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in as {{\Illuminate\Support\Facades\Auth::user()->name}}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <br>
{{--   start here--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,900" rel="stylesheet">
    <style>
        body{
            font-family: 'Nunito', sans-serif;
            padding: 50px;
        }
        .card{
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
            /*padding: 14px 80px 18px 36px;*/
            padding: 14px;
            cursor: pointer;
        }

        .card:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }

        .card h3{
            font-weight: 600;
        }

        .card img{
            position: absolute;
            top: 20px;
            right: 15px;
            max-height: 120px;
        }

        .card-1{
            background-image: url(/images/withdraw.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 50px;
        }

        .card-2{
            background-image: url(/images/transfer.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 50px;
        }

        .card-3{
            background-image: url(/images/buy.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 50px;
        }
        .card-4{
            background-image: url(/images/sell.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 80px;
        }
        .card-5{
            background-image: url(/images/mycoins.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 50px;
        }
        .card-6{
            background-image: url(/images/transaction.png);
            background-repeat: no-repeat;
            background-position: right;
            background-size: 50px;
        }

        @media(max-width: 990px){
            .card{
                margin: 5px;
            }
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-1" >
                    <h3>Withdraw</h3>
                    <p>Send to your Phone</p>
                    <p style="color: black; font-weight: bold; font-size: 25px;" >{{ DB::table('myaccount')->where('uid',Auth::user()->id)->value('mycoins') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-2">
                    <h3>Transfer</h3>
                    <p>Transfer to another account</p>
                    <br>
                </div>
            </div>
            <div class="col-md-4" >
                <form   method="post" action="/buy" >
                    {{ csrf_field() }}
                <div class="card card-3"  >
                    <h3 style="float: left">Buy K-Coin</h3>
                    <p>Purchase K-Coin with your balance</p>
                    <br>
{{--                    <div class="col-md-12 text-center">--}}
{{--                        <button class="btn-primary btn btn-m col-md-4"  type="submit"> Post</button><br><br>--}}
{{--                    </div>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--    row2--}}
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-4">
                    <h3>Sell K-Coin</h3>
                    <p>Sell K-Coin on the platform</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-5">
                    <h3>My K-Coins</h3>
                    <p style="color: black; font-weight: bold; font-size: 25px;" >{{ DB::table('myaccount')->where('uid',Auth::user()->id)->value('mycoins') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-6">
                    <h3>Transaction History</h3>
                    <p>My Transaction History</p>
                </div>
            </div>
        </div>
    </div>
    <br>
{{--    CHARTS--}}
    <div id = "container"></div>
    <script language = "JavaScript">
        $(document).ready(function() {
            var title = {
                text: 'K-Coin Rates',
                style: {
                    fontSize: '20px',
                    color:'#0426ae',
                    fontWeight: 'bold'
                }
            };
            var subtitle = {
                text: 'Sell and Buy K-Coin'
            };
            var xAxis = {
                categories: ['Rate', 'Rate', 'Rate', 'Rate', 'Rate', 'Rate',
                    'Rate', 'Rate', 'Rate']
            };
            var yAxis = {
                title: {
                    text: 'Exchange Rates (P)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            };
            var tooltip = {
                valueSuffix: 'P'
            }
            var legend = {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            };
            var series =  [{
                name: 'Exchange Rates',
                data: [1.0, 1.2, 1.3, 1.8, 2.5, 0.4, 0.2,
                    1.9, 2.1]
            },
                // {
                //     name: 'New York',
                //     data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8,
                //         24.1, 20.1, 14.1, 8.6, 2.5]
                // },
                // {
                //     name: 'London',
                //     data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0,
                //         16.6, 14.2, 10.3, 6.6, 4.8]
                // }
            ];

            var json = {};
            json.title = title;
            json.subtitle = subtitle;
            json.xAxis = xAxis;
            json.yAxis = yAxis;
            json.tooltip = tooltip;
            json.legend = legend;
            json.series = series;

            $('#container').highcharts(json);
        });
    </script>
</x-app-layout>
</html>


