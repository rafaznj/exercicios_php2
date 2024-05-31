<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EXERCÍCIOS PRÁTICOS SOBRE PHP</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!--------------------------------------------->
    </head>
    <body>
        <form name="formQ3" action="questao3_resultado.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Exercícios PHP - Questão 03</h2>

                        <div class="form-group">
                            <label>Nota 1</label>
                            <input type="text" class="form-control" required="" placeholder="Digite a nota 1" name="txtNota1">
                        </div>

                        <div class="form-group">
                            <label>Nota 2</label>
                            <input type="text" class="form-control" required="" placeholder="Digite a nota 2" name="txtNota2">
                        </div>

                        <div class="form-group">
                            <label>Nota 3</label>
                            <input type="text" class="form-control" required="" placeholder="Digite a nota 3" name="txtNota3">
                        </div>

                        <div class="form-group">
                            <label>Tipo de média</label>
                            <select name="tipomedia" class="form-control">
                                <option value="Aritmética">Aritmética</option>
                                <option value="Ponderada">Ponderada</option>
                            </select>
                        </div>

                        <div class="form-group">

                            <input type="submit" value="Calcular" class="btn btn-info" name="btCalcular"  >
                        </div>



                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
