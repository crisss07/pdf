<!doctype html>
<html>

<head>
    <meta charset="iso-8559-1">
    <title>Documento sin título</title>
</head>

<style>
    

    .cabfoot {
        text-align: center;
        color: rgb(8, 8, 8);
        margin-top: 0;
        margin-bottom: 0;
    }
    
    .titulo {
        text-align: center;
        color: black;
        text-transform: uppercase
    }
    
    table {
        width: 100%;
    }
</style>

<body>
    <header class="cabfoot">
        <!-- <?php $image_path = url('img/ESCUDO2.jpg');?>
        <img src="{{ base_path() }}/public/img/ESCUDO2.jpg">-->

       <img style="align-content: center" src="{{ base_path() }}/public/img/ESCUDO2.jpg" alt="Escudo Nacional de Bolivia" width="100" height="100">
        <p style="margin-top:0; margin-bottom:0;"><em><b>Estado Plurinacional de Bolivia</b></em></p>
        <p style="margin-top:0; margin-bottom:0;"><em><b>Ministerio de Planificaci&oacute;n del Desarrollo</b></em></p>
        <h3>ASIGNACION DE ACTIVOS FIJOS</h3>
    </header>


    <section>
        <table style="border: 1;  font-size: 15px;">
            <tr>
                <td style="width: 15%">Nombre y Apellido:</td>
                <td style="text-transform: uppercase"><b>{{ $persona->nombre }} {{ $persona->ap_pat }} {{ $persona->ap_mat }}</b></td>
                <td style="width: 15%">Cedula de Identidad:</td>
                <td style="text-transform: uppercase"><b>{{ $persona->ci }}</b></td>
            </tr>
            <tr>
                <td style="width: 15%">Cargo Actual:</td>
                <td style="text-transform: uppercase"><b>{{ $persona->cargo }}</b></td>
                <td style="width: 15%">Piso:</td>
                <td style="text-transform: uppercase"><b>XXX</b></td>
            </tr>
            <tr>
                <td style="width: 15%">Observaciones:</td>
                <td style="text-transform: uppercase"><b>Silla</b></td>
                <td style="width: 15%">Fecha:</td>
                <td style="text-transform: uppercase"><b>20-12-2018</b></td>
            </tr>
        </table>
        <br>
        <div>
            <table style="border: 1; background-color: rgb(179, 195, 231);  font-size: 15px;">
                <tr>
                    <td style="width: 15%">Grupo Contable:</td>
                    <td style="text-transform: uppercase"><b>1 -EDIFICACIONES</b></td>
                </tr>
                <tr>
                    <td style="width: 15%">Auxiliar Contable:</td>
                    <td style="text-transform: uppercase"><b>1.1 -EDIFICIO</b></td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <table style="border: 1; background-color: rgb(179, 195, 231);  font-size: 15px;">
                <tr>
                    <th>Nro.</th>
                    <th>Descripcion y Caracteristicas</th>
                    <th>Codigo</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                </tr>
                <tr style="text-align:center">
                    <td>1</td>
                    <td>Silla de Plastico, giratorio semiejecutivo, R. Ruedas, Asiento y Espaldar Tapiz, Tela Azul</td>
                    <td>01 8000050</td>
                    <td>Nuevo</td>
                    <td>29-11-2018</td>
                </tr>
            </table>
        </div>
        <hr>
        <h5 style="text-align:right">Total Activos Fijos Asignados: 1</h5>
        <div style="background-color: rgb(179, 195, 231);  font-size: 15px;" >
            <h4>RECOMENDACIONES</h4>
        </div>
        <div>
            <p style="text-align: justify; font-size: 10px;">
                A la firma del Acta, el Servidor Público es responsable de sus Activos Fijos asignados por la unidad, establecidas en D.S. 181/09 (NB-SABS) Art. 116, 146, 147, 148 y 157 y la Ley 1178 y sus Reglamentos. El Servidor Público NO podrá: prestar o transferir
                el bien a otro(s) Servidor(es) Público(s) ni a terceros, dañar o alterar las caracteristicas. En los casos que corresponda, solicitará su mantenimiento (vehículos, equipos especializados, equipos de computación y otros). Cuando sea necesario
                trasladar algunos de estos bienes dentro o fuera de las dependencias de la Institución, previamente, solicitará autorización a la Unidad de Activos Fijos, mediante los formularios respectivos. No podrá ingresar bienes particulares sin
                previa autorización de la D.G.A.A. Adoptará todas las medidas para que estos bienes no están expuestos a situaciones de riesgo como: deterioro, robo, o hurto. Toda vez que el uso inadecuado o negligente de los bienes produzca su pérdida
                o destrucción, inmediatamente, tendrá que restituir a la Institución el valor total de los bienes afectados. Para ser liberado de la responsabilidad, el Servidor Público deberá devolver a la Unidad de Activos Fijos los bienes a su cargo,
                debiendorecabar la conformidad escrita de la Unidad. SANCIÓN: De constatar la transgresión a esta determinación, se aplicarán las medidas que el Reglamento Interno de Personal (R.I.P.) determine, que generarán Responsabilidades establecidas
                en la Ley N° 1178 y sus reglamentos.
            </p>
        </div>
        <div style="display: flex; justify-content: space-between; margin-top:150px;  font-size: 15px;">
            <div>
                <p>RECIBI CONFORME</p>
            </div>
            <div>
                <p>ENTREGUE CONFORME</p>
            </div>
            <div>
                <p>RESPONSABLE DE ACTIVOS FIJOS</p>
            </div>
        </div>
    </section>


    <footer>
       <!--  <hr size="2px" color="gray" />
        <hr size="0.5px" color="gray" /> -->
        <p style="font-size: 10px;" class="cabfoot"><small>www.planificacion.gob.bo<br>Av. Mariscal Santa Cruz Esq. Calle Oruro Edif. #1092, Ex Edificio Comibol, Teléfono Fax: (591-2) 2189000</small></p>

    </footer>
    
    
</body>

</html>