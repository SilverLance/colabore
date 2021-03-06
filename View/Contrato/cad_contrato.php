<?php
include_once('../Layout/principal.php');
?>
<section class="panel">
    <header class="panel-heading">
        Cadastrar Contrato
    </header>
    <div class="panel-body">
        <div class="form">
            <form class="form-validate form-horizontal " id="register_form" method="get" action="../../Controller/ContratoController.php">
            <input type="hidden" name="opcao" value="1">
            <input type="hidden" name="situacao" value="1">
                <div class="form-group ">
                    <label for="numContrato" class="control-label col-lg-2">Número Contrato <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="numContrato" name="numContrato" type="text" value="" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="Objeto_contrato" class="control-label col-lg-2">Objeto Contratado <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="Objeto_contrato" name="Objeto_contrato" type="text" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="data_inicio" class="control-label col-lg-4">Data inicio <span
                                        class="required">*</span></label>
                                <div class="col-lg-8">
                                    <input class="form-control " id="data_inicio" name="data_inicio" type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="data_fim" class="control-label col-lg-4">Data fim <span
                                        class="required">*</span></label>
                                <div class="col-lg-8">
                                    <input class="form-control " id="data_fim" name="data_fim" type="date" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="valor" class="control-label col-lg-2">Valor Total <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control" onKeyUp="maskIt(this,event,'####.###.###.###.###.###,##',true)" id="valor" name="valor" type="text" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="num_ano" class="control-label col-lg-2">Número/Ano edital <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control " id="num_ano" name="num_ano" type="text" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="modalidade" class="control-label col-lg-2">Modalidade <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <select class="form-control " id="modalidade" name="modalidade">
                            <option value="uni">Unilateral</option>
                            <option value="bi">Bilateral</option>
                            <option value="pluri">Plurilateral</option>
                        </select>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="documentos" class="control-label col-lg-2">Arquivos <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control " id="documentos" name="documentos" type="file" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="links" class="control-label col-lg-2">Links <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control " id="links" name="links" type="text" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                        <button class="btn btn-default" type="reset">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function maskIt(w,e,m,r,a){
// Cancela se o evento for Backspace
            if (!e) var e = window.event
            if (e.keyCode) code = e.keyCode;
            else if (e.which) code = e.which;
// Variáveis da função
            var txt  = (!r) ? w.value.replace(/[^\d]+/gi,'') : w.value.replace(/[^\d]+/gi,'').reverse();
            var mask = (!r) ? m : m.reverse();
            var pre  = (a ) ? a.pre : "";
            var pos  = (a ) ? a.pos : "";
            var ret  = "";
            if(code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g,'').length) return false;
// Loop na máscara para aplicar os caracteres
            for(var x=0,y=0, z=mask.length;x<z && y<txt.length;){
                if(mask.charAt(x)!='#'){
                    ret += mask.charAt(x); x++; }
                else {
                    ret += txt.charAt(y); y++; x++; } }
// Retorno da função
            ret = (!r) ? ret : ret.reverse()
            w.value = pre+ret+pos; }
        // Novo método para o objeto 'String'
        String.prototype.reverse = function(){
            return this.split('').reverse().join(''); };
    </script>

    <script language="javascript">
        function number_format( number, decimals, dec_point, thousands_sep ) {
            var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
            var d = dec_point == undefined ? "," : dec_point;
            var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
            var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        }
    </script>

</section>
<?php
include_once('../Layout/rodape.php');
?>