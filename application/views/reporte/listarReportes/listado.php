<script type="text/javascript" src="<?=base_url('application/js/reportes/listarReportes.js')?>"></script>
            <section class="panel">
                    <header class="panel-heading">
                        Reportes Registrados
                    </header>
                    <div class="row">
                    <div class="panel-body">
                        <table class="table table-striped" >

                          <div id="tabla"></div>
                        </table>

                         <br>
                        <div id="masInfo" align="right">
                            <a href="<?=base_url('index.php/reportecontrolador/exportaPDF/documento')?>">Generar PDF</a>
                        </div>
                    </div>
                    </div>
                </section>