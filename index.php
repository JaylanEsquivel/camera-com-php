<!DOCTYPE html>
<!--
NOME: Template Base;
DESCRIÇAO: Template base para Projetos;
AUTOR: Jaylan Esquivel Pereira Santos;
TECNOLOGIAS DISPONIVEIS: Bootstrap, Jquery, Animate.css, FontAwesome, Normalize.css, MaskJquery;
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/> <!-- ESSA META TIRA ZOOM EM DISPOSITIVOS MOBILES -->
        <meta charset="UTF-8">
        <title>Mobile - Camera PHP</title>
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style-one.css"/>
    </head>
    <body>
        <div class="container-fluid bg-geral">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <span class="one"><i class="fa fa-camera"></i> Registro de camera.</span><br>
                    </div>
                </div>
                <div class="row pdd">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <a href="" class="btn btn-success btn-lg two center-block">REGISTRAR AÇÃO</a>&nbsp;&nbsp;
                        <a href="" class="btn btn-info btn-lg two center-block">GRAVAR AÇÃO</a>
                        <div class="row pdd">
                            <div class="col-lg-12">
                                <div class="row"> 
                                    <div class="col-lg-3">
                                        <img src="img/1.png" class="img-responsive" width="100%" />
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="img/1.png" class="img-responsive" width="100%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bg-default">
                        <table class="table table-condensed">
                            <thead>
                              <tr>
                                <th># ID</th>
                                <th>URL</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>/fotos/1.png</td>
                              </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>       
<!--======================================= js  =========================================== -->
<script src="js/jquery-3.2.1.min.js" ></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/anijs.js" type="text/javascript"></script> 
<script src="js/anijs-helper-scrollreveal.js" type="text/javascript"></script> 
<!--======================================= js  =========================================== -->
    </body>
</html>
