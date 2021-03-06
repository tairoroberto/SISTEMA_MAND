   
     /********************************************************************************************/
    /*                       Função para a busca de CEP da empresa                              */
    /********************************************************************************************/
    function cepEmpresa() {
           /* if($.trim($("#CepEmpresa").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#CepEmpresa").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#RuaEmpresa").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                        $("#BairroEmpresa").val(unescape(resultadoCEP["bairro"]));
                        $("#CidadeEmpresa").val(unescape(resultadoCEP["cidade"]));
                        $("#NumeroEmpresa").val("");
                        $("#NumeroEmpresa").focus();
                        
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/
            //Nova variável com valor do campo "cep".
            var cep = $("#CepEmpresa").val().replace(".", "");
            cep = cep.replace("-", "");

            //Verifica se campo cep possui valor informado.
                
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#RuaEmpresa").val("...")
            $("#BairroEmpresa").val("...")
            $("#CidadeEmpresa").val("...")

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#RuaEmpresa").val(dados.logradouro);
                    $("#BairroEmpresa").val(dados.bairro);
                    $("#CidadeEmpresa").val(dados.localidade);
                    $("#NumeroEmpresa").val("");
                    $("#NumeroEmpresa").focus();
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }
  
     /********************************************************************************************/
    /*                       Função para a busca de CEP do Responsável                          */
    /********************************************************************************************/
  function cepResponsavel() {
           /* if($.trim($("#CepResponsavel").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#CepResponsavel").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#RuaResponsavel").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                        $("#BairroResponsavel").val(unescape(resultadoCEP["bairro"]));
                        $("#CidadeResponsavel").val(unescape(resultadoCEP["cidade"]));
                        $("#NumeroResponsavel").val("");
                        $("#NumeroResponsavel").focus();
                        
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/
         
            //Nova variável com valor do campo "cep".
            var cep = $("#CepResponsavel").val().replace(".", "");
            cep = cep.replace("-", "");

            //Verifica se campo cep possui valor informado.
                
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#RuaResponsavel").val("...")
            $("#BairroResponsavel").val("...")
            $("#CidadeResponsavel").val("...")

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#RuaResponsavel").val(dados.logradouro);
                    $("#BairroResponsavel").val(dados.bairro);
                    $("#CidadeResponsavel").val(dados.localidade);
                    $("#NumeroResponsavel").val("");
                    $("#NumeroResponsavel").focus();
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }//viacep.com.br/ws/01001-000/json
       

     /********************************************************************************************/
    /*                       Função para a busca de CEP do Requerente                            */
    /********************************************************************************************/
    function cepRequerente() {
            /*if($.trim($("#CepRequerente").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#CepRequerente").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#EnderecoRequerente").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                        $("#BairroRequerente").val(unescape(resultadoCEP["bairro"]));
                        $("#MunicipioRequerente").val(unescape(resultadoCEP["cidade"]));
                        $("#NumeroRequerente").val("");
                        $("#NumeroRequerente").focus();
                        
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/
               //Nova variável com valor do campo "cep".
            var cep = $("#CepRequerente").val().replace(".", "");
            cep = cep.replace("-", "");

            //Verifica se campo cep possui valor informado.
                
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#EnderecoRequerente").val("...")
            $("#BairroRequerente").val("...")
            $("#MunicipioRequerente").val("...")

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#EnderecoRequerente").val(dados.logradouro);
                    $("#BairroRequerente").val(dados.bairro);
                    $("#MunicipioRequerente").val(dados.localidade);
                    $("#NumeroRequerente").val("");
                    $("#NumeroRequerente").focus();
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }


     /********************************************************************************************/
    /*                       Função para a busca de CEP do Imóvel                            */
    /********************************************************************************************/
    function cepImovel() {
           /* if($.trim($("#CepRequerente").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#CepRequerente").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#EnderecoRequerente").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                        $("#BairroRequerente").val(unescape(resultadoCEP["bairro"]));
                        $("#MunicipioRequerente").val(unescape(resultadoCEP["cidade"]));
                        $("#NumeroRequerente").val("");
                        $("#NumeroRequerente").focus();
                        
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/

               //Nova variável com valor do campo "cep".
            var cep = $("#CepRequerente").val().replace(".", "");
            cep = cep.replace("-", "");

            //Verifica se campo cep possui valor informado.
                
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#EnderecoRequerente").val("...")
            $("#BairroRequerente").val("...")
            $("#MunicipioRequerente").val("...")

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#EnderecoRequerente").val(dados.logradouro);
                    $("#BairroRequerente").val(dados.bairro);
                    $("#MunicipioRequerente").val(dados.localidade);
                    $("#NumeroRequerente").val("");
                    $("#NumeroRequerente").focus();
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }


     /********************************************************************************************/
    /*                       Função para a busca de CEP do Imóvel                            */
    /********************************************************************************************/
    function cepImovelCadastro() {
          /*  if($.trim($("#Cep").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#Cep").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#LocalImovel").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"])+","+unescape(resultadoCEP["bairro"])+","+unescape(resultadoCEP["cidade"])+","+unescape(resultadoCEP["uf"]));
                        $("#EnderecoMapaAux").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"])+","+unescape(resultadoCEP["bairro"])+","+unescape(resultadoCEP["cidade"])+","+unescape(resultadoCEP["uf"]));
                        $("#Codlog").val("");
                        $("#Codlog").focus();
                        
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/

               //Nova variável com valor do campo "cep".
            var cep = $("#Cep").val().replace(".", "");
            cep = cep.replace("-", "");

            //Verifica se campo cep possui valor informado.
                
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#EnderecoRequerente").val("...")

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#LocalImovel").val(dados.logradouro+","+dados.bairro+","+dados.localidade+","+dados.uf);
                    $("#EnderecoMapaAux").val(dados.logradouro+","+dados.bairro+","+dados.localidade+","+dados.uf);
                    $("#Codlog").val("");
                    $("#Codlog").focus();
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }


    /*********************************************************************************************/
    /*                           Função para a busca de CEP do Imóvel                           */
    /********************************************************************************************/
    function cepIncorporacao() {
            /*if($.trim($("#CepIncorporacao").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#CepIncorporacao").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#LocalIncorporacao").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                        $("#BairroIncorporacao").val(unescape(resultadoCEP["bairro"]));
                        $("#CidadeIncorporacao").val(unescape(resultadoCEP["cidade"]));
                        $("#EstadoIncorporacao").val(unescape(resultadoCEP["uf"]));
                        
                        $("#NumeroIncorporacao").val("");
                        $("#NumeroIncorporacao").focus();
                        
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide(); //EnderecoMapaAux
                    
                });
            }*/

                //Nova variável com valor do campo "cep".
            var cep = $("#CepIncorporacao").val().replace(".", "");
            cep = cep.replace("-", "");

            //Verifica se campo cep possui valor informado.
                
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#LocalIncorporacao").val("...")
            $("#BairroIncorporacao").val("...")
            $("#CidadeIncorporacao").val("...")
            $("#EstadoIncorporacao").val("...")

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#LocalIncorporacao").val(dados.logradouro)
                    $("#BairroIncorporacao").val(dados.bairro)
                    $("#CidadeIncorporacao").val(dados.localidade)
                    $("#EstadoIncorporacao").val(dados.uf)
                    $("#NumeroIncorporacao").val("");
                    $("#NumeroIncorporacao").focus();
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }
        



    /********************************************************************************************/
    /*                       Função para a busca de CEP do Imóvel                            */
    /********************************************************************************************/
    function cepImovelFichaTecnica() {
            /*if($.trim($("#EnderecoAux").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#EnderecoAux").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#EnderecoAux2").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"])+","+$("#EnderecoAuxNumero").val()+" ,"+unescape(resultadoCEP["bairro"])+" - "+unescape(resultadoCEP["uf"]));
                             
                          if ($("#EnderecoAux2").val() != null) {

                             initialize();     

                            }                  
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/

                //Nova variável com valor do campo "cep".
            var cep = $("#EnderecoAux").val().replace(".", "");
            cep = cep.replace("-", "");

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#EnderecoAux2").val(dados.logradouro+","+$("#EnderecoAuxNumero").val()+","+dados.bairro+","+dados.localidade+","+dados.uf)
                    if ($("#EnderecoAux2").val() != null) {

                             initialize();     

                    }

                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });

            //começo do mapa
                var geocoder;
                var map;
                function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(-34.397, 150.644);
                    var mapOptions = {
                        zoom: 15,
                        center: latlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map = new         google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                    codeAddress();
                }
                 
                function codeAddress() {
                    var address = document.getElementById('EnderecoAux2').value;
                    geocoder.geocode( { 'address': address},     function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                    });
                }                                       
          //fim do mapa            
        }


    /********************************************************************************************/
    /*                       Função para a busca de CEP do Imóvel                            */
    /********************************************************************************************/
    function cepIncorporacaoVisualizar() {        
            /*if($.trim($("#EnderecoAux").val()) != ""){
                $("#ajax-loading").css('display','inline');
                $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#EnderecoAux").val().replace("-", ""), function(){
                    if(resultadoCEP["resultado"] == 1){
                        $("#EnderecoAux2").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"])+", "+$("#EnderecoAuxNumero").val()+", "+unescape(resultadoCEP["bairro"])+", "+unescape(resultadoCEP["cidade"])+", "+unescape(resultadoCEP["cidade"]));
                            
                            if ($("#EnderecoAux2").val() != null) {

                             if (initialize()) {
                                 return true;
                                }else{
                                    return false;
                                }     

                            }
                    }else{
                        alert("Endereço não encontrado para o cep ");
                    }
                    $("#ajax-loading").hide();
                    
                });
            }*/
                 //Nova variável com valor do campo "cep".
            var cep = $("#EnderecoAux").val().replace(".", "");
            cep = cep.replace("-", "");

            //Consulta o webservice viacep.com.br/
            $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#EnderecoAux2").val(dados.logradouro+","+$("#EnderecoAuxNumero").val()+","+dados.bairro+","+dados.localidade+","+dados.uf)
                    if ($("#EnderecoAux2").val() != null) {

                        if (initialize()) {
                            return true;
                        }else{
                            return false;
                        }     
                    }

                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });

            //começo do mapa
                var geocoder;
                var map;
                function initialize() {
                    geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(-34.397, 150.644);
                    var mapOptions = {
                        zoom: 15,
                        center: latlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map = new         google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                    codeAddress();
                }
                 
                function codeAddress() {
                    var address = document.getElementById('EnderecoAux2').value;
                    geocoder.geocode( { 'address': address},     function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                    });
                }                                       
          //fim do mapa
        } 