<!DOCTYPE html>
<!--
NOME: Template Base;
DESCRIÇAO: Template base para Projetos;
AUTOR: Jaylan Esquivel Pereira Santos;
TECNOLOGIAS DISPONIVEIS: Bootstrap, Jquery, Animate.css, FontAwesome, Normalize.css, MaskJquery;
-->
<?php require 'conn.php'; ?>
<?php
       $conn = conn();
       $sql = "SELECT * FROM foto";
       $result = mysqli_query($conn, $sql);
?> 
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
        <script type="text/javascript" src="js/webcam.min.js"></script>
        <script type="text/javascript" src="js/web.js"></script>

    </head>
    <body>
     <!--<div class="container" id="camera"><b>Câmera:</b>
     <div id="minha_camera"></div><form><input type="button" value="Tirar Foto" onClick="bater_foto()"></form>
     </div> -->
     <!--<div class="container" id="previa">
     <b>Prévia:</b><div id="results"></div>
     </div>-->
     <div class="container" id="salva" style=" display: none">
     <span id="carregando"></span><img id="completado" src=""/>
     </div>
<!-- Modal -->
    <div class="modal fade in" id="exampleModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <button type="button" class="close bg-danger" data-dismiss="modal" style="position: absolute;margin-top: 5px;margin-left: 95%; font-size: 35px; z-index: 99">×</button>
              <div id="minha_camera"></div>
              <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalTwo" onClick="bater_foto()"><i class="fa fa-instagram fa-4x cor"></i></a>
          </div>
        </div>
    </div>
    <!-- previa ---->
    <div class="modal fade in" id="exampleModalTwo" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <button type="button" class="close bg-danger" data-dismiss="modal" style="position: absolute;margin-top: 5px;margin-left: 95%; font-size: 35px; z-index: 99">×</button>
              <div id="results"></div>
              <a href="#" data-dismiss="modal" data-toggle="modal" onClick="salvar_foto()"><i class="fa fa-check-square-o fa-4x cor"></i></a>
          </div>
        </div>
    </div>
    <!-- previa ---->
<!-- Modal -->
        <div class="container-fluid bg-geral">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <span class="one"><i class="fa fa-camera"></i> Registro de camera.</span><br>
                    </div>
                </div>
                <div class="row pdd">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <a data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-lg two center-block">REGISTRAR AÇÃO</a>&nbsp;&nbsp;
                        <a href="index.php" class="btn btn-info btn-lg two center-block">ATUALIZAR</a>
                        <div class="row pdd">
                            <div class="col-lg-12 col-xs-12">
                                <div class="row"> 
                                    <?php foreach ($result as $value) { ?>
                                    <div class="col-lg-3" style="margin-top: 5px;">
                                        <img src="<?php echo $value['nome'] ?>" class="img-responsive" width="100%" />
                                    </div>
                                    <?php  } ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bg-default" style="margin-top: 5px;">
                        <table class="table table-condensed">
                            <thead>
                              <tr>
                                <th># ID</th>
                                <th>URL</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($result as $value) { ?>
                              <tr>
                                <td><?php echo $value['id'];  ?></td>
                                <td><?php echo $value['nome'] ?></td>
                              </tr>
                              <?php  } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>
                <div class="row" style=" margin-top: 20%;">
                    <div class="col-lg-12 text-center">
                        <span class="two">Todos direitos resevados © GuiaNoturno 2018</span>
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
