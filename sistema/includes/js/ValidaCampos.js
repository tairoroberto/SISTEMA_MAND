/*************************************************************************************************************/
/*  Validação dos dados de LOGIN e SENHA da pagina Icinial se campos estiverem em branco gera alerta         */
/*                                                                                                           */
/*************************************************************************************************************/
function validaLogin(){ 
    if(frm_login.login_Email.value == ""){
       alert("Login ou Senha inválido...!!!");
       frm_login.login_Email.focus();
       exit();
     }
     
     
     if(frm_login.login_Senha.value == ""){
       alert("Login ou Senha inválido...!!!");
       frm_login.login_Senha.focus();
       exit();
    }

}
function Entar() {  
      if( event.keyCode==13 ) { 
         validaLogin();
        document.frm_login.submit();       
      }  
   }




function validaHolding(){
 
/*********************************************************************************************/
/*       Validação dos dados da Empresa se campos estiverem em branco gera alerta            */
/*                                                                                           */
/*********************************************************************************************/

    if(formHolding.RazaoSocial.value == ""){
     alert("Razão Social não informada...!!!");
     formHolding.RazaoSocial.focus();
     exit();
     }
     
     
     
     // validação de dígito
     
     if(formHolding.Atividade.value == ""){
        alert("Atividade não informada");
        formHolding.Atividade.focus();
        exit();
      }
    
    
     
     if(formHolding.Cnpj.value == ""){
     alert("Cnpj não informado...!!!");
     formHolding.Cnpj.focus();
     exit();
     }

     
     
      if(formHolding.CepEmpresa.value == ""){
     alert("Cep da empresa não informado...!!!");
     formHolding.CepEmpresa.focus();
     exit();
     }
     
     
     
     
       if (formHolding.EmailEmpresa.value == ""){
     alert("E-mail empresa não informado");
     formHolding.EmailEmpresa.focus();
     exit();
   
   }

}



function validaHoldingAtualiza(){
 
/*********************************************************************************************/
/*       Validação dos dados da Empresa se campos estiverem em branco gera alerta            */
/*                                                                                           */
/*********************************************************************************************/

    if(formHoldingAtualiza.RazaoSocial.value == ""){
     alert("Razão Social não informada...!!!");
     formHoldingAtualiza.RazaoSocial.focus();
     exit();
     }
     
     
     
     // validação de dígito
     
     if(formHoldingAtualiza.Atividade.value == ""){
        alert("Atividade não informada");
        formHoldingAtualiza.Atividade.focus();
        exit();
      }
    
    
     
     if(formHoldingAtualiza.Cnpj.value == ""){
     alert("Cnpj não informado...!!!");
     formHoldingAtualiza.Cnpj.focus();
     exit();
     }

     
     
      if(formHoldingAtualiza.CepEmpresa.value == ""){
     alert("Cep da empresa não informado...!!!");
     formHoldingAtualiza.CepEmpresa.focus();
     exit();
     }
     
     
     
     
       if (formHoldingAtualiza.EmailEmpresa.value == ""){
     alert("E-mail empresa não informado");
     formHoldingAtualiza.EmailEmpresa.focus();
     exit();
   
   }

}




/*********************************************************************************************/
/*      Validação dos dados do Requerente se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/

function validaRequerente(){
    if(formRequerente.NomeRequerente.value == "") {
     alert("Nome do Requerente não informado...!!!");
     formRequerente.NomeRequerente.focus();
     exit();
     }
     
      if(formRequerente.CepRequerente.value == "")  {
     alert("Cep do Requerente não informado...!!!");
     formRequerente.CepRequerente.focus();
     exit();
     }

        if(formRequerente.EmailRequerente.value == "")  {
     alert("E-mail do Requerente não informado...!!!");
     formRequerente.EmailRequerente.focus();
     exit();
     }
  
}



/*********************************************************************************************/
/*      Validação dos dados do Requerente se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/

function validaRequerenteAtualiza(){
    if(formRequerenteAtualiza.NomeRequerente.value == "") {
     alert("Nome do Requerente não informado...!!!");
     formRequerenteAtualiza.NomeRequerente.focus();
     exit();
     }
     
      if(formRequerenteAtualiza.CepRequerente.value == "")  {
     alert("Cep do Requerente não informado...!!!");
     formRequerenteAtualiza.CepRequerente.focus();
     exit();
     }

        if(formRequerenteAtualiza.EmailRequerente.value == "")  {
     alert("E-mail do Requerente não informado...!!!");
     formRequerenteAtualiza.EmailRequerente.focus();
     exit();
     }
  
}





/*********************************************************************************************/
/*      Validação dos dados da Oportunidade se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/

function validaOportunidade(){
/*    if(formOportunidade.TipoContato.value == "Selecionar") {
     alert("Tipo de Contato não informado...!!!");
     formOportunidade.TipoContato.focus();
     exit();
     }
   
   
    if(formOportunidade.Origem.value == "Selecionar") {
     alert("Origem de Oportunidade não informado...!!!");
     formOportunidade.Origem.focus();
     exit();
     }
     
     
      if(formOportunidade.RazaoSocial.value == "")  {
     alert("Razão Social não informado...!!!");
     formOportunidade.RazaoSocial.focus();
     exit();
     }

     if(formOportunidade.NomeContato.value == "")  {
     alert("Nome do Contato não informado...!!!");
     formOportunidade.NomeContato.focus();
     exit();
     }

     if(formOportunidade.CnpjCpf.value == "")  {
     alert("CNPJ/CPF não informado...!!!");
     formOportunidade.CnpjCpf.focus();
     exit();
     }

     if(formOportunidade.Atividade.value == "")  {
     alert("Atividade do Contato não informado...!!!");
     formOportunidade.Atividade.focus();
     exit();
     }

     if(formOportunidade.Celular.value == "")  {
     alert("Celular do Contato não informado...!!!");
     formOportunidade.Celular.focus();
     exit();
     }

      if(formOportunidade.Telefone.value == "")  {
     alert("Telefone do Contato não informado...!!!");
     formOportunidade.Telefone.focus();
     exit();
     }

      if(formOportunidade.Email.value == "")  {
     alert("E-mail do Contato não informado...!!!");
     formOportunidade.Email.focus();
     exit();
     }

    if(formOportunidade.ServicoSolicitado.value == "")  {
     alert("Serviços solicitados não informado...!!!");
     formOportunidade.ServicoSolicitado.focus();
     exit();
     }

    if(formOportunidade.EnderecoArea.value == "")  {
     alert("Local não informado...!!!");
     formOportunidade.EnderecoArea.focus();
     exit();
     }

     if(formOportunidade.ContribuinteIptu.value == "")  {
     alert("Contribuinte/IPTU não informado...!!!");
     formOportunidade.ContribuinteIptu.focus();
     exit();
     }
    */
     if(formOportunidade.SelectTecnico.value == "Selecionar Técnico")  {
     alert("Técnico não informado...!!!");
     formOportunidade.SelectTecnico.focus();
     exit();
     }

}


/*********************************************************************************************/
/*      Validação dos dados da Categoria da FAQ se campos estiverem em branco gera alerta    */
/*                                                                                           */
/*********************************************************************************************/

function validaCategoria(){
    if(formCategoria.NomeCategoria.value == "") {
     alert("Nome Categoria não informado...!!!");
     formCategoria.NomeCategoria.focus();
     exit();
     }
     if(formCategoria.SubCategoria.value == "") {
     alert("Sub Categoria não informado...!!!");
     formCategoria.NomeCategoria.focus();
     exit();
     }
   
}

/*********************************************************************************************/
/*      Validação dos dados do Casdastro da FAQ se campos estiverem em branco gera alerta    */
/*                                                                                           */
/*********************************************************************************************/

function validaFaq(){
    if(formFaqCadastro.SelectCategoria.value == "Categoria...") {
     alert("Categoria não informado...!!!");
     formFaqCadastro.SelectCategoria.focus();
     exit();
     }

     if(formFaqCadastro.NomeFaq.value == "") {
     alert("Título FAQ não informado...!!!");
     formFaqCadastro.NomeFaq.focus();
     exit();
     }

    /* if(formFaqCadastro.Descricao.value == "Descrição") {
     alert("Descrição não informada...!!!");
     formFaqCadastro.Descricao.focus();
     exit();
     }
   */
} 



/*********************************************************************************************/
/*      Validação dos dados do IMÓVEL se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/

function validaImovel(){

      if(commentForm.SelectHolding.value == "Selecione...")  {
     alert("Holding não informado...!!! \n\n Sessão 1 \n DADOS INICIAIS");
     commentForm.SelectHolding.focus();
     exit();
     }

     if(commentForm.SelectRequerente.value == "Selecionar...")  {
     alert("Requerente não informado...!!! \n\n Sessão 1 \n DADOS INICIAIS");
     commentForm.SelectRequerente.focus();
     exit();
     }

     if(commentForm.NomeExibicao.value == "")  {
     alert("Nome Exibicao não informado...!!! \n\n Sessão 1 \n DADOS INICIAIS");
     commentForm.NomeExibicao.focus();
     exit();
     }

     if(commentForm.MatriculaContribuinte.value == "")  {
     alert("Matrícula Contribuinte não informado...!!! \n\n Sessão 2 \n DADOS CADASTRAIS");
     commentForm.MatriculaContribuinte.focus();
     exit();
     }

      if(commentForm.NomeContribuinte.value == "")  {
     alert("Nome Contribuinte não informado...!!! \n\n Sessão 2 \n DADOS CADASTRAIS");
     commentForm.NomeContribuinte.focus();
     exit();
     }



    if(commentForm.Cep.value == "")  {
     alert("Cep não informado...!!! \n\n Sessão 2 \n DADOS CADASTRAIS");
     commentForm.Cep.focus();
     exit();
     }

     if(commentForm.Codlog.value == "")  {
     alert("Número do endereço não informado...!!! \n\n Sessão 2 \n DADOS CADASTRAIS");
     commentForm.Codlog.focus();
     exit();
     }       
     
}



/*********************************************************************************************/
/*      Validação dos dados do Orçamento A se campos estiverem em branco gera alerta              */
/*                                                                                           */
/*********************************************************************************************/
function validaOrcamentoA(){
    if(formOrcamentoA.SelectRazaoSocial.value == "Selecionar...") {
     alert("Razão Social não informada...!!!");
     formOrcamentoA.SelectRazaoSocial.focus();
     exit();
     }
   
   
    if(formOrcamentoA.SelectNomeContato.value == "Selecionar...") {
     alert("Nome Contato não informado...!!!");
     formOrcamentoA.SelectNomeContato.focus();
     exit();
     }


     if((formOrcamentoA.Valor1.value != 0 ) && (formOrcamentoA.SelectServico1.value == "Selecionar..." )) {
     alert("Serviço 1 não informado...!!!");
     formOrcamentoA.SelectServico1.focus();
     exit();
     }else if((formOrcamentoA.Valor1.value == 0 ) && (formOrcamentoA.SelectServico1.value != "Selecionar..." )) {
     alert("Valor 1 não informado...!!!");
     formOrcamentoA.SelectServico1.focus();
     exit();
     }

     if((formOrcamentoA.Valor2.value != 0 ) && (formOrcamentoA.SelectServico2.value == "Selecionar..." )) {
     alert("Serviço 2 não informada...!!!");
     formOrcamentoA.SelectServico2.focus();
     exit();
     }else if((formOrcamentoA.Valor2.value == 0 ) && (formOrcamentoA.SelectServico2.value != "Selecionar..." )) {
     alert("Valor 2 não informado...!!!");
     formOrcamentoA.SelectServico2.focus();
     exit();
     }

     if((formOrcamentoA.Valor3.value != 0 ) && (formOrcamentoA.SelectServico3.value == "Selecionar..." )) {
     alert("Serviço 3 não informada...!!!");
     formOrcamentoA.SelectServico3.focus();
     exit();
     }else if((formOrcamentoA.Valor3.value == 0 ) && (formOrcamentoA.SelectServico3.value != "Selecionar..." )) {
     alert("Valor 3 não informado...!!!");
     formOrcamentoA.SelectServico3.focus();
     exit();
     }

     if((formOrcamentoA.Valor4.value != 0 ) && (formOrcamentoA.SelectServico4.value == "Selecionar..." )) {
     alert("Serviço 4 não informada...!!!");
     formOrcamentoA.SelectServico4.focus();
     exit();
     }else if((formOrcamentoA.Valor4.value == 0 ) && (formOrcamentoA.SelectServico4.value != "Selecionar..." )) {
     alert("Valor 4 não informado...!!!");
     formOrcamentoA.SelectServico4.focus();
     exit();
     }

     if((formOrcamentoA.FormaDePagamento.value == "" )) {
     alert("Forma De Pagamento não informada...!!!");
     formOrcamentoA.FormaDePagamento.focus();
     exit();
     }

     if((formOrcamentoA.Prazo .value == "" )) {
     alert("Prazo não informada...!!!");
     formOrcamentoA.Prazo .focus();
     exit();
     }

}     

/*********************************************************************************************/
/*        Validação dos dados dos Serviços se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaServicos(){
    if(formServicos.TituloServico.value == "") {
     alert("Título do Serviço não informado...!!!");
     formServicos.TituloServico.focus();
     exit();
     }
   
   
    if(formServicos.Explicacao.value == "Explicação") {
     alert("Explicacão não informada...!!!");
     formServicos.Explicacao.focus();
     exit();
     }

     if(formServicos.Documento .value == "") {
     alert("Documento não informado...!!!");
     formServicos.Documento .focus();
     exit();
     }

}


/*********************************************************************************************/
/*        Validação dos dados dos Serviços se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaServicos2(){
    if(formServicos.TituloServico.value == "") {
     alert("Título do Serviço não informado...!!!");
     formServicos.TituloServico.focus();
     exit();
     }
   
   
    if(formServicos.Explicacao.value == "Explicação") {
     alert("Explicacão não informada...!!!");
     formServicos.Explicacao.focus();
     exit();
     }
}


/*********************************************************************************************/
/*        Validação dos dados dos Processos se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaProcesso(){
    if(formProcesso.SelectHolding.value == "Holding") {
     alert("Holding não informado...!!!");
     formProcesso.SelectHolding.focus();
     exit();
     }
   
   
    if(formProcesso.SelectRequerente.value == "Requerente") {
     alert("Requerente não informada...!!!");
     formProcesso.SelectRequerente.focus();
     exit();
     }

     if(formProcesso.SelectSql .value == "SQL") {
     alert("SQL não informado...!!!");
     formProcesso.SelectSql .focus();
     exit();
     }

     if(formProcesso.NumeroProcesso .value == "") {
     alert("Número Processo não informado...!!!");
     formProcesso.NumeroProcesso .focus();
     exit();
     }

     if(formProcesso.AssuntoProcesso .value == "") {
     alert("Assunto do Processo não informado...!!!");
     formProcesso.AssuntoProcesso .focus();
     exit();
     }     
}




/*********************************************************************************************/
/*        Validação dos dados do Proceso detalhe se campos estiverem em branco gera alerta   */
/*                                                                                           */
/*********************************************************************************************/
function validaProcessoDetalhe(){
 /*   if(formProcessoDetalhe.DataProcessoDetalhe.value == "") {
     alert("Data não informada...!!!");
     formProcessoDetalhe.DataProcessoDetalhe.focus();
     exit();
     }
   
   */   
   /* if(formProcessoDetalhe.UnidadeProcessoDetahe.value == "") {
     alert("Unidade não informada...!!!");
     formProcessoDetalhe.UnidadeProcessoDetahe.focus();
     exit();
     }
    */
    /* if(formProcessoDetalhe.DescricaoProcessoDetahe .value == "") {
     alert("Descrição não informada...!!!");
     formProcessoDetalhe.DescricaoProcessoDetahe .focus();
     exit();
     }
    */
     if(formProcessoDetalhe.DomProcessoDetalhe.checked == true) {
     formProcessoDetalhe.DomProcessoDetalheCheck.value = "checado";
     }else{
        formProcessoDetalhe.DomProcessoDetalheCheck.value = "naochecado";
     }

     if((formProcessoDetalhe.DomProcessoDetalhe.checked == true) && (formProcessoDetalhe.DataDomProcessoDetalhe.value == "")) {
     alert("Data não informada...!!!");
     formProcessoDetalhe.DataDomProcessoDetalhe.focus();
     exit();
     }else if((formProcessoDetalhe.DomProcessoDetalhe.checked == false) && (formProcessoDetalhe.DataDomProcessoDetalhe.value != "")){
     alert("Selecione o DOM...!!!");
     formProcessoDetalhe.DataDomProcessoDetalhe.focus();
     exit();
     }

  /*   if(formProcessoDetalhe.SelectAcoesProcessoDetalhe.value == "Ações") {
     alert("Ação não informada...!!!");
     formProcessoDetalhe.SelectAcoesProcessoDetalhe.focus();
     exit();     
     }
     */
}



/*********************************************************************************************/
/*   Validação dos dados da incorporação cadastro se campos estiverem em branco gera alerta  */
/*                                                                                           */
/*********************************************************************************************/
function validaIncorporacaoCadastro(){
  /*  if(formIncorporacaoCadastro.SiglaIncorporacao.value == "") {
     alert("Sigla não informada...!!!");
     formIncorporacaoCadastro.SiglaIncorporacao.focus();
     exit();
     }
      
    if(formIncorporacaoCadastro.TituloIncorporacao.value == "") {
     alert("Título não informado...!!!");
     formIncorporacaoCadastro.TituloIncorporacao.focus();
     exit();
     }
*/
     if(formIncorporacaoCadastro.CepIncorporacao.value == "") {
     alert("Cep não informado...!!!");
     formIncorporacaoCadastro.CepIncorporacao.focus();
     exit();
     }

 /*    if(formIncorporacaoCadastro.LocalIncorporacao.value == "") {
     alert("Local não informado...!!!");
     formIncorporacaoCadastro.LocalIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.NumeroIncorporacao.value == "") {
     alert("Número não informado...!!!");
     formIncorporacaoCadastro.NumeroIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.EstadoIncorporacao.value == "") {
     alert("Estado não informado...!!!");
     formIncorporacaoCadastro.EstadoIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.CidadeIncorporacao.value == "") {
     alert("Cidade não informada...!!!");
     formIncorporacaoCadastro.CidadeIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.BairroIncorporacao.value == "") {
     alert("Bairro não informado...!!!");
     formIncorporacaoCadastro.BairroIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.MetragemIncorporacao.value == "") {
     alert("Metragem não informada...!!!");
     formIncorporacaoCadastro.MetragemIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.ValorVendaIncorporacao.value == "") {
     alert("Valor de Venda não informado...!!!");
     formIncorporacaoCadastro.ValorVendaIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.AtividadeIncorporacao.value == "") {
     alert("Atividade não informada...!!!");
     formIncorporacaoCadastro.AtividadeIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.ZonemanetoIncorporacao.value == "") {
     alert("Zoneamento não informado...!!!");
     formIncorporacaoCadastro.ZonemanetoIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.CaBasicoIncorporacao.value == "") {
     alert("CA Básico não informado...!!!");
     formIncorporacaoCadastro.CaBasicoIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.CaMaximoIncorporacao.value == "") {
     alert("CA Máximo não informado...!!!");
     formIncorporacaoCadastro.CaMaximoIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.NomeProprietarioIncorporacao.value == "") {
     alert("Nome do Prorietário não informado...!!!");
     formIncorporacaoCadastro.NomeProprietarioIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.TelProprietarioIncorporacao.value == "") {
     alert("Telefone do proprietário não informado...!!!");
     formIncorporacaoCadastro.TelProprietarioIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.EmailProprietarioIncorporacao.value == "") {
     alert("E-mail do proprietário não informado...!!!");
     formIncorporacaoCadastro.EmailProprietarioIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.NomeCorreteorIncorpotacao.value == "") {
     alert("Nome do corretor não informado...!!!");
     formIncorporacaoCadastro.NomeCorreteorIncorpotacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.TelefoneCorretorIncorporacao.value == "") {
     alert("Telefone do corretor não informado...!!!");
     formIncorporacaoCadastro.TelefoneCorretorIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.EmailCorretorIncorporacao.value == "") {
     alert("E-mail do corretor não informado...!!!");
     formIncorporacaoCadastro.EmailCorretorIncorporacao.focus();
     exit();
     }

     if(formIncorporacaoCadastro.ProjetoAprovado.value == "") {
     alert("Projeto Aprovado não informado...!!!");
     formIncorporacaoCadastro.ProjetoAprovado.focus();
     exit();
     }

     if(formIncorporacaoCadastro.DocumentacaoIncorporacao.value == "") {
     alert("Dcumentação não informada...!!!");
     formIncorporacaoCadastro.DocumentacaoIncorporacao.focus();
     exit();
     }
*/
     //imagem 1
     if((formIncorporacaoCadastro.TituloFoto1.value == "") && (formIncorporacaoCadastro.Imagem1.value != "")) {
     alert("Título da Foto 1 não informado...!!!");
     formIncorporacaoCadastro.TituloFoto1.focus();
     exit();
     }
     
     if((formIncorporacaoCadastro.TituloFoto1.value != "") && (formIncorporacaoCadastro.Imagem1.value == "")) {
     alert("Foto do Título 1 não informado...!!!");
     formIncorporacaoCadastro.Imagem1.focus();
     exit();
     }

      //imagem 2
     if((formIncorporacaoCadastro.TituloFoto2.value == "") && (formIncorporacaoCadastro.Imagem2.value != "")) {
     alert("Título da Foto 2 não informado...!!!");
     formIncorporacaoCadastro.TituloFoto2.focus();
     exit();
     }
     
     if((formIncorporacaoCadastro.TituloFoto2.value != "") && (formIncorporacaoCadastro.Imagem2.value == "")) {
     alert("Foto do Título 2 não informado...!!!");
     formIncorporacaoCadastro.Imagem2.focus();
     exit();
     }


      //imagem 3
     if((formIncorporacaoCadastro.TituloFoto3.value == "") && (formIncorporacaoCadastro.Imagem3.value != "")) {
     alert("Título da Foto 3 não informado...!!!");
     formIncorporacaoCadastro.TituloFoto3.focus();
     exit();
     }
     
     if((formIncorporacaoCadastro.TituloFoto3.value != "") && (formIncorporacaoCadastro.Imagem3.value == "")) {
     alert("Foto do Título 3 não informado...!!!");
     formIncorporacaoCadastro.Imagem3.focus();
     exit();
     }


      //imagem 4
     if((formIncorporacaoCadastro.TituloFoto4.value == "") && (formIncorporacaoCadastro.Imagem4.value != "")) {
     alert("Título da Foto 4 não informado...!!!");
     formIncorporacaoCadastro.TituloFoto4.focus();
     exit();
     }
     
     if((formIncorporacaoCadastro.TituloFoto4.value != "") && (formIncorporacaoCadastro.Imagem4.value == "")) {
     alert("Foto do Título 4 não informado...!!!");
     formIncorporacaoCadastro.Imagem4.focus();
     exit();
     }


      //imagem 5
     if((formIncorporacaoCadastro.TituloFoto5.value == "") && (formIncorporacaoCadastro.Imagem5.value != "")) {
     alert("Título da Foto 5 não informado...!!!");
     formIncorporacaoCadastro.TituloFoto5.focus();
     exit();
     }
     
     if((formIncorporacaoCadastro.TituloFoto5.value != "") && (formIncorporacaoCadastro.Imagem5.value == "")) {
     alert("Foto do Título 5 não informado...!!!");
     formIncorporacaoCadastro.Imagem5.focus();
     exit();
     }


      //imagem 6
     if((formIncorporacaoCadastro.TituloFoto6.value == "") && (formIncorporacaoCadastro.Imagem6.value != "")) {
     alert("Título da Foto 6 não informado...!!!");
     formIncorporacaoCadastro.TituloFoto6.focus();
     exit();
     }
     
     if((formIncorporacaoCadastro.TituloFoto6.value != "") && (formIncorporacaoCadastro.Imagem6.value == "")) {
     alert("Foto do Título 6 não informado...!!!");
     formIncorporacaoCadastro.Imagem6.focus();
     exit();
     }
     

}


/*********************************************************************************************/
/*   Validação dos dados da incorporação cadastro se campos estiverem em branco gera alerta  */
/*                                                                                           */
/*********************************************************************************************/
function validaIncorporacaoCadastro2(){
     if(formIncorporacaoCadastro.CepIncorporacao.value == "") {
     alert("Cep não informado...!!!");
     formIncorporacaoCadastro.CepIncorporacao.focus();
     exit();
     }
}


/*********************************************************************************************/
/*        Validação dos dados dos Serviços se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaUsuarioCadstro(){
    if(formCadastroUsuario.Email.value == "") {
     alert("E-mail não informado...!!!");
     formCadastroUsuario.Email.focus();
     exit();
     }
      
    if(formCadastroUsuario.Senha.value == "") {
     alert("Senha não informada...!!!");
     formCadastroUsuario.Senha.focus();
     exit();
     }

     if(formCadastroUsuario.ConfirmaSenha.value == "") {
     alert("Confirmação de Senha não informada...!!!");
     formCadastroUsuario.ConfirmaSenha.focus();
     exit();
     }

     if(formCadastroUsuario.ConfirmaSenha.value != formCadastroUsuario.Senha.value) {
     alert("Senhas devem ser iguais...!!!");
     formCadastroUsuario.ConfirmaSenha.focus();
     exit();
     }

     if(formCadastroUsuario.NomeExibicao.value == "") {
     alert("Nome de Exibição não informado...!!!");
     formCadastroUsuario.NomeExibicao.focus();
     exit();
     }

    if((formCadastroUsuario.Funcionario.checked == true) && (formCadastroUsuario.Entrada.value == "")) {
     alert("Horário de Entrada não informado...!!!");
     formCadastroUsuario.Entrada.focus();
     exit();
     }

     if((formCadastroUsuario.Funcionario.checked == true) && (formCadastroUsuario.Saida.value == "")) {
     alert("Horário de Saída não informado...!!!");
     formCadastroUsuario.Saida.focus();
     exit();
     }

     if((formCadastroUsuario.Funcionario.checked == true) && (formCadastroUsuario.Almoco.value == "")) {
     alert("Horário de Almoço não informado...!!!");
     formCadastroUsuario.Almoco.focus();
     exit();
     }

     if((formCadastroUsuario.Cliente.checked == true) && (formCadastroUsuario.CreditoUsuario.value == "")) {
     alert("Credito do cliente não informado...!!!");
     formCadastroUsuario.CreditoUsuario.focus();
     exit();
     }
     
}
     



/*********************************************************************************************/
/*        Validação dos dados dos Links se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaLinks(){
    if(formLinks.NomeExibicao.value == "") {
     alert("Nome do link não informado...!!!");
     formLinks.NomeExibicao.focus();
     exit();
     }
   
   
    if(formLinks.Url.value == "") {
     alert("Url não informada...!!!");
     formLinks.Url.focus();
     exit();
     }   
}



/*********************************************************************************************/
/*        Validação dos dados das TAREFAS se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaTarefa(){
    if(formTarefas.SelectHolding.value == "Holding") {
     alert("Holding não informado...!!!");
     formTarefas.SelectHolding.focus();
     exit();
     }
   
   
    if(formTarefas.SelectRequerente.value == "Requerente") {
     alert("Requerente não informado...!!!");
     formTarefas.SelectRequerente.focus();
     exit();
     } 

    /* if(formTarefas.SelectSql.value == "SQL") {
     alert("SQL não informado...!!!");
     formTarefas.SelectSql.focus();
     exit();
     }*/

     if(formTarefas.DataInicio.value == "") {
     alert("Data Início não informada...!!!");
     formTarefas.DataInicio.focus();
     exit();
     }

     if(formTarefas.DataEntrega.value == "") {
     alert("Data Entrega não informada...!!!");
     formTarefas.DataEntrega.focus();
     exit();
     }    

     if(formTarefas.NomeProjeto.value == "") {
     alert("Nome do Projeto não informado...!!!");
     formTarefas.NomeProjeto.focus();
     exit();
     }

     if(formTarefas.DescricaoProjeto.value == "") {
     alert("Descrição do Projeto não informada...!!!");
     formTarefas.DescricaoProjeto.focus();
     exit();
     }


}





/*********************************************************************************************/
/*        Validação dos dados das Tarefas se campos estiverem em branco gera alerta         */
/*                                                                                           */
/*********************************************************************************************/
function validaSolicitacaoTarefa(){
    if(formTarefaDetalhe.DocumentosEtapaSolicitacao.value == "") {
     alert("Documentos não informados...!!!");
     formTarefaDetalhe.DocumentosEtapaSolicitacao.focus();
     exit();
     }
   
   
    if(formTarefaDetalhe.SelectEtapaSolicitacao.value == "Selecione uma Tarefa") {
     alert("Etapa não informada...!!!");
     formTarefaDetalhe.SelectEtapaSolicitacao.focus();
     exit();
     }   
}



/*********************************************************************************************/
/*                          Função para soma dos valores do orçamento                        */
/*                                                                                           */
/*********************************************************************************************/
function somarValoresOrcamentoA(){
    if (formOrcamentoA.Taxas.value == "") {
        formOrcamentoA.Taxas.value = 0;
   }
   if (formOrcamentoA.Valor1.value == "") {
        formOrcamentoA.Valor1.value = 0;
   }
   if (formOrcamentoA.Valor2.value == "") {
        formOrcamentoA.Valor2.value = 0;
   }
   if (formOrcamentoA.Valor3.value == "") {
        formOrcamentoA.Valor3.value = 0;
   }
   if (formOrcamentoA.Valor4.value == "") {
        formOrcamentoA.Valor4.value = 0;
   }

var Valor1 = parseFloat( formOrcamentoA.Valor1.value.replace(/\./g, "").replace(",", ".") );
var Valor2 = parseFloat( formOrcamentoA.Valor2.value.replace(/\./g, "").replace(",", ".") );
var Valor3 = parseFloat( formOrcamentoA.Valor3.value.replace(/\./g, "").replace(",", ".") );
var Valor4 = parseFloat( formOrcamentoA.Valor4.value.replace(/\./g, "").replace(",", ".") );
var Taxas = parseFloat( formOrcamentoA.Taxas.value.replace(/\./g, "").replace(",", ".") );
var auxTotal = 0;   
var operacion = '+';

var totalCampos = formOrcamentoA.elements.length;
   if (totalCampos >18) {
       var num = document.getElementsByName("ValorArray[]");  
          for (var i = 0; i < num.length; i++) {
                if ((num[i].value != "") && (num[i].value != 0)){
                    auxTotal += parseFloat(num[i].value.replace(/\./g, "").replace(",", "."));
                }        
             }
    } 

var result = eval(Valor1 + operacion + Valor2 + operacion + Valor3 + operacion + Valor4 + operacion + auxTotal + operacion + Taxas);
formOrcamentoA.TotalOrcamentoA.value = number_format(result,2, ',', '.');             
}




/*********************************************************************************************/
/*                          Função para soma dos valores do orçamento                        */
/*                                                                                           */
/*********************************************************************************************/
function somarValoresOrcamentoB(){
    if (forOrcamentoBCadastro.Taxas.value == "") {
        forOrcamentoBCadastro.Taxas.value = 0;
   }
  
var Taxas = parseFloat( forOrcamentoBCadastro.Taxas.value.replace(/\./g, "").replace(",", ".") );
var auxTotal = 0;   
var operacion = '+';

var totalCampos = forOrcamentoBCadastro.elements.length;
   if (totalCampos >11) {
       var num = document.getElementsByName("ValorArray[]");  
          for (var i = 0; i < num.length; i++) {
                if ((num[i].value != "") && (num[i].value != 0)){
                    auxTotal += parseFloat(num[i].value.replace(/\./g, "").replace(",", "."));
                }        
             }
    } 

var result = eval(auxTotal + operacion + Taxas);
var resultServicos = eval(auxTotal);
forOrcamentoBCadastro.TotalOrcamentoB.value = number_format(result,2, ',', '.'); 
forOrcamentoBCadastro.TotalServicos.value = number_format(resultServicos,2, ',', '.');             
}



/*********************************************************************************************/
/*                          Função para soma dos valores da divida                     */
/*                                                                                           */
/*********************************************************************************************/
function somarValoresDividas(operacion){
var ValorTolalIptu = parseFloat( commentForm.ValorTolalIptu.value.replace(/\./g, "").replace(",", ".") );
var ValorTolalMultas = parseFloat( commentForm.ValorTolalMultas.value.replace(/\./g, "").replace(",", ".") );
var result = eval(ValorTolalIptu + operacion + ValorTolalMultas);
commentForm.TotalExercicios.value = number_format(result,2, ',', '.');             
}



function number_format( number, decimals, dec_point, thousands_sep ) {
var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
var d = dec_point == undefined ? "," : dec_point;
var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}

/*
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
return this.split('').reverse().join(''); 

};
*/

/*********************************************************************************************/
/*            Validação dos campos numéricos, se for inserido qualquer caracter              */
/*             que não seja numérico gera alerta                                             */
/*********************************************************************************************/
function verificaNumeros(){
	 tecla = event.keyCode;
         if ((tecla >= 48 && tecla <= 57)){
             event.returnValue = true;
           }else{
             alert("Somente números são permitidos");
             event.returnValue = false;
            } 
    }

/*********************************************************************************************/
/*            Validação dos campos numéricos, se for inserico qualquer caracter              */
/*             que não seja numérico gera alerta                                             */
/*********************************************************************************************/
function verificaNumerosCalculo(){
	 tecla = event.keyCode;
         if ((tecla >= 48 && tecla <= 57) || (tecla == 46)){
             event.returnValue = true;
           }else{
             alert("Somente números são permitidos");
             event.returnValue = false;
            } 
    }
/*********************************************************************************************/
/*                      Função para preencher o campo de data                                */
/*********************************************************************************************/    
function setDataOportunidadeA(){
   
   data = new Date();
   dia = (data.getDate());
   mes = (data.getMonth()+1);
  
   str_dia = new String (dia); 
   if (str_dia.length == 1) 
         dia = "0" + dia; 

   str_mes = new String (mes); 
   if (str_mes.length == 1) 
         mes = "0" + mes; 

   formOportunidade.DataSolicitacao.value = dia +"/"+ mes +"/" + data.getUTCFullYear(); 
   formOportunidade.DataSolicitacao.focus();
   exit();
     
}


/*********************************************************************************************/
/*                      Função para preencher o campo de data                                */
/*********************************************************************************************/    
function setDataImovel(){
   
   data = new Date();
   dia = (data.getDate());
   mes = (data.getMonth()+1);
  
   str_dia = new String (dia); 
   if (str_dia.length == 1) 
         dia = "0" + dia; 

   str_mes = new String (mes); 
   if (str_mes.length == 1) 
         mes = "0" + mes; 

   commentForm.DataEmissao.value = dia +"/"+ mes +"/" + data.getUTCFullYear(); 
   exit();
     
}




/*********************************************************************************************/
/*           Função para preencher o campo de Links ao selecionar item em lista          */
/*             Preenchimento é feito para atualizar banco ao clicar em botão                 */
/*********************************************************************************************/


function selecionaLinks(item,nome){
    if (nome =='nome') {
        formLinks.NomeExibicao.value = $(item).text();  
        formLinks.NomeExibicaoAux.value = $(item).text();
    }else{
        formLinks.Url.value = $(item).text();  
        formLinks.UrlAux.value = $(item).text();
    }
 
}



/*********************************************************************************************/
/*           Função para preencher o campo de Links ao selecionar item em lista          */
/*             Preenchimento é feito para atualizar banco ao clicar em botão                 */
/*********************************************************************************************/


function selecionaImovel(valor){
        imoveisLista.imovelAux.value = valor;
}




/*********************************************************************************************/
/*                     Função para Enviar FORM  LINKS para pagina php                        */
/*********************************************************************************************/
function enviaFormLinks(acao){
  if (acao == 'um'){
    document.formLinks.action = "includes/php/AtualizaLinks.php";
    document.formLinks.submit();
  } else if (acao == 'dois'){
     document.formLinks.action = "includes/php/DeletaLinks.php";
     document.formLinks.submit();
  }
}



/*********************************************************************************************/
/*                     Função para Enviar FORM  LINKS para pagina php                        */
/*********************************************************************************************/
function enviaHistoricoTarefa(acao){
  if (acao == 'um'){
    document.formTarefaDetalhe.action = "includes/php/CadastraHistoricoTarefa.php";
    document.formTarefaDetalhe.submit();
  } 
}




/*********************************************************************************************/
/*                   Função para MUDAR O PlaceHolder dos campos do Holding                    */
/*********************************************************************************************/

function mudaPlaceHolderHolding(){
	var radio = document.getElementById("PessoaJuridica");
	if (radio.checked == true) {
		document.getElementById("RazaoSocial").placeholder = "Razão Social";
		document.getElementById("NomeFantasia").placeholder = "Nome Fantasia";
		document.getElementById("Cnpj").placeholder = "CNPJ";
        
	}else{
		document.getElementById("RazaoSocial").placeholder = "Nome";
		document.getElementById("NomeFantasia").placeholder = "Sobrenome";
		document.getElementById("Cnpj").placeholder = "CPF";

	}		
	
}


/*********************************************************************************************/
/*                   Função para MUDAR O PlaceHolder dos campos do Requerente                */
/*********************************************************************************************/

function mudaPlaceHolderOportunidade(){
	var selectTipoCaDastro = document.getElementById("TipoCadastro");
	if (selectTipoCaDastro.value == "Pessoa Juridica") {
		document.getElementById("RazaoSocial").placeholder = "Razão Social";
        document.getElementById("CnpjCpf").placeholder = "CNPJ";
        
	}else{
		document.getElementById("RazaoSocial").placeholder = "Nome";
        document.getElementById("CnpjCpf").placeholder = "CPF";
        

	}	
	
}	


/*********************************************************************************************/
/*      Função para esconder as opções quando for selecionado o checbox do cliente            /
/********************************************************************************************/
function escondePermissao() {
    if (formCadastroUsuario.Cliente.checked == true) {            
        document.getElementById("coluna1").style.display = "none"; 
        document.getElementById("coluna2").style.display = "none"; 
        document.getElementById("coluna3").style.display = "none"; 
        document.getElementById("DivPermissaoUsuario").style.display = "block"; 
        document.getElementById("DivEmailCliente").style.display = "block";    
    }else{
        document.getElementById("coluna1").style.display = "block";
        document.getElementById("coluna2").style.display = "block";
        document.getElementById("coluna3").style.display = "block"; 
        document.getElementById("DivPermissaoUsuario").style.display = "none";   
        document.getElementById("DivEmailCliente").style.display = "none";    
    } 
}



/*********************************************************************************************/
/*        Função para esconder as opções quando for selecionado o checbox                    /
/********************************************************************************************/
function escondeIncorporacaoVisualizar() {
    
    if (formIncorporacaoVisualizar.checkLocal.checked == false) {            
        document.getElementById("DivLocal").style.display = "none"; 
        formPdf.ckLocal.value = 0;          
    }else{
        document.getElementById("DivLocal").style.display = "block";  
        formPdf.ckLocal.value = 1;  
    } 

    if (formIncorporacaoVisualizar.checkProjeto.checked == false) {            
        document.getElementById("DivProjeto").style.display = "none";
        formPdf.ckProjeto.value = 0;             
    }else{
        document.getElementById("DivProjeto").style.display = "block";  
        formPdf.ckProjeto.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkMetragem.checked == false) {            
        document.getElementById("DivMetragem").style.display = "none";
        formPdf.ckMetragem.value = 0;             
    }else{
        document.getElementById("DivMetragem").style.display = "block";  
        formPdf.ckMetragem.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkValorVenda.checked == false) {            
        document.getElementById("DivValorVenda").style.display = "none"; 
        formPdf.ckValorVenda.value = 0;            
    }else{
        document.getElementById("DivValorVenda").style.display = "block";  
        formPdf.ckValorVenda.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkZonemaneto.checked == false) {            
        document.getElementById("DivZoneamento").style.display = "none"; 
        formPdf.ckZonemaneto.value = 0;            
    }else{
        document.getElementById("DivZoneamento").style.display = "block";  
        formPdf.ckZonemaneto.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkCaBasico.checked == false) {            
        document.getElementById("DivCaBasico").style.display = "none"; 
        formPdf.ckCaBasico.value = 0;            
    }else{
        document.getElementById("DivCaBasico").style.display = "block";  
        formPdf.ckCaBasico.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkCaMaximo.checked == false) {            
        document.getElementById("DivCaMaximo").style.display = "none";
        formPdf.ckCaMaximo.value = 0;             
    }else{
        document.getElementById("DivCaMaximo").style.display = "block";  
        formPdf.ckCaMaximo.value = 1;  
    }


        if (formIncorporacaoVisualizar.checkZonemaneto2.checked == false) {            
        document.getElementById("DivZoneamento2").style.display = "none"; 
        formPdf.ckZonemaneto2.value = 0;            
    }else{
        document.getElementById("DivZoneamento2").style.display = "block";  
        formPdf.ckZonemaneto2.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkCaBasico2.checked == false) {            
        document.getElementById("DivCaBasico2").style.display = "none"; 
        formPdf.ckCaBasico2.value = 0;            
    }else{
        document.getElementById("DivCaBasico2").style.display = "block";  
        formPdf.ckCaBasico2.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkCaMaximo2.checked == false) {            
        document.getElementById("DivCaMaximo2").style.display = "none";
        formPdf.ckCaMaximo2.value = 0;             
    }else{
        document.getElementById("DivCaMaximo2").style.display = "block";  
        formPdf.ckCaMaximo2.value = 1;  
    }
    

    if (formIncorporacaoVisualizar.checkAtividade.checked == false) {            
        document.getElementById("DivAtividade").style.display = "none"; 
        formPdf.ckAtividade.value = 0;            
    }else{
        document.getElementById("DivAtividade").style.display = "block";  
        formPdf.ckAtividade.value = 1;  
    }    

    if (formIncorporacaoVisualizar.checkRegiao.checked == false) {            
        document.getElementById("DivRegiao").style.display = "none"; 
        formPdf.ckRegiao.value = 0;            
    }else{
        document.getElementById("DivRegiao").style.display = "block";  
        formPdf.ckRegiao.value = 1;  
    }    

    if (formIncorporacaoVisualizar.checkImagem1.checked == false) {            
        document.getElementById("DivImagem1").style.display = "none";
        formPdf.ckImagem1.value = 0;             
    }else{
        document.getElementById("DivImagem1").style.display = "block";  
        formPdf.ckImagem1.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkImagem2.checked == false) {            
        document.getElementById("DivImagem2").style.display = "none"; 
        formPdf.ckImagem2.value = 0;            
    }else{
        document.getElementById("DivImagem2").style.display = "block";  
        formPdf.ckImagem2.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkImagem3.checked == false) {            
        document.getElementById("DivImagem3").style.display = "none";
        formPdf.ckImagem3.value = 0;             
    }else{
        document.getElementById("DivImagem3").style.display = "block";  
        formPdf.ckImagem3.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkImagem4.checked == false) {            
        document.getElementById("DivImagem4").style.display = "none"; 
        formPdf.ckImagem4.value = 0;            
    }else{
        document.getElementById("DivImagem4").style.display = "block";  
        formPdf.ckImagem4.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkImagem5.checked == false) {            
        document.getElementById("DivImagem5").style.display = "none"; 
        formPdf.ckImagem5.value = 0;            
    }else{
        document.getElementById("DivImagem5").style.display = "block";  
        formPdf.ckImagem5.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkImagem6.checked == false) {            
        document.getElementById("DivImagem6").style.display = "none"; 
        formPdf.ckImagem6.value = 0;            
    }else{
        document.getElementById("DivImagem6").style.display = "block";  
        formPdf.ckImagem6.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkDadosAdicionais.checked == false) {            
        document.getElementById("DivDadosAdicionais").style.display = "none";
        formPdf.ckDadosAdicionais.value = 0;             
    }else{
        document.getElementById("DivDadosAdicionais").style.display = "block";
        formPdf.ckDadosAdicionais.value = 1;    
    }

    if (formIncorporacaoVisualizar.checkHistorico.checked == false) {            
        document.getElementById("DivHistorico").style.display = "none";
        formPdf.ckHistorico.value = 0;             
    }else{
        document.getElementById("DivHistorico").style.display = "block";  
        formPdf.ckHistorico.value = 1;  
    }

    if (formIncorporacaoVisualizar.checkMapa.checked == false) {            
        document.getElementById("DivMapa").style.display = "none";
        formPdf.ckMapa.value = 0;             
    }else{
        document.getElementById("DivMapa").style.display = "block";  
        formPdf.ckMapa.value = 1;  
    }
    
    if (formIncorporacaoVisualizar.checkDocumentacao.checked == false) {            
        document.getElementById("DivDocumentacao").style.display = "none";
        formPdf.ckDocumentacao.value = 0;             
    }else{
        document.getElementById("DivDocumentacao").style.display = "block";
        formPdf.ckDocumentacao.value = 1;    
    }
}




/*********************************************************************************************/
/*            Função para esconder as opções quando for selecionado o checbox                 /
/********************************************************************************************/
function escondeImovelFichaTecnica() {
    if (formImovelFichaTecnica.checkRequerente.checked == false) {            
        document.getElementById("DivDadosIniciais").style.display = "none";
        formPdf.ckRequerente.value = 0;           
    }else{
        document.getElementById("DivDadosIniciais").style.display = "block";
        formPdf.ckRequerente.value = 1;    
    } 

    if (formImovelFichaTecnica.checkDadosCadastrais.checked == false) {            
        document.getElementById("DivDadosCadastrais").style.display = "none";
        formPdf.ckDadosCadastrais.value = 0;              
    }else{
        document.getElementById("DivDadosCadastrais").style.display = "block"; 
        formPdf.ckDadosCadastrais.value = 1;    
    }

    if (formImovelFichaTecnica.checkHistorico.checked == false) {            
        document.getElementById("DivHistorico").style.display = "none";
        formPdf.ckHistorico.value = 0;            
    }else{
        document.getElementById("DivHistorico").style.display = "block";
        formPdf.ckHistorico.value = 1;   
    }

    if (formImovelFichaTecnica.checkProcessos.checked == false) {            
        document.getElementById("DivProcessos").style.display = "none"; 
        formPdf.ckProcessos.value = 0;           
    }else{
        document.getElementById("DivProcessos").style.display = "block";
        formPdf.ckProcessos.value = 1;   
    }

    if (formImovelFichaTecnica.checkOutrosSql.checked == false) {            
        document.getElementById("DivOutrosLotes").style.display = "none"; 
        formPdf.ckOutrosSql.value = 0;           
    }else{
        document.getElementById("DivOutrosLotes").style.display = "block";
        formPdf.ckOutrosSql.value = 1;   
    }

    if (formImovelFichaTecnica.checkZoneamento.checked == false) {            
        document.getElementById("DivZoneamento").style.display = "none"; 
        formPdf.ckZoneamento.value = 0;           
    }else{
        document.getElementById("DivZoneamento").style.display = "block"; 
        formPdf.ckZoneamento.value = 1;  
    }

    if (formImovelFichaTecnica.checkZoneamento2.checked == false) {            
        document.getElementById("DivZoneamento2").style.display = "none";
        document.getElementById("Lei16050").style.display = "none"; 
        formPdf.ckZoneamento2.value = 0;           
    }else{
        document.getElementById("DivZoneamento2").style.display = "block"; 
        document.getElementById("Lei16050").style.display = "block"; 
        formPdf.ckZoneamento2.value = 1;  
    }

    if (formImovelFichaTecnica.checkOperacaoUrbana.checked == false) {            
        document.getElementById("DivOperacaoUrbana").style.display = "none"; 
        formPdf.ckOperacaoUrbana.value = 0;           
    }else{
        document.getElementById("DivOperacaoUrbana").style.display = "block"; 
        formPdf.ckOperacaoUrbana.value = 1;  
    }

    if (formImovelFichaTecnica.checkRestricoes.checked == false) {            
        document.getElementById("DivRestricoes").style.display = "none"; 
        formPdf.ckRestricoes.value = 0;           
    }else{
        document.getElementById("DivRestricoes").style.display = "block"; 
        formPdf.ckRestricoes.value = 1;  
    }

    if (formImovelFichaTecnica.checkDividas.checked == false) {            
        document.getElementById("DivDividas").style.display = "none";
        formPdf.ckDividas.value = 0;            
    }else{
        document.getElementById("DivDividas").style.display = "block"; 
        formPdf.ckDividas.value = 1;  
    }

    if (formImovelFichaTecnica.checkQuadraFiscal.checked == false) {            
        document.getElementById("DivQuadraFiscal").style.display = "none"; 
        formPdf.ckQuadraFiscal.value = 0;           
    }else{
        document.getElementById("DivQuadraFiscal").style.display = "block"; 
        formPdf.ckQuadraFiscal.value = 1;  
    }

    if (formImovelFichaTecnica.checkGeomapas.checked == false) {            
        document.getElementById("DivGeomapas").style.display = "none"; 
        formPdf.ckGeomapas.value = 0;           
    }else{
        document.getElementById("DivGeomapas").style.display = "block"; 
        formPdf.ckGeomapas.value = 1;  
    }

    if (formImovelFichaTecnica.checkImagemLocal.checked == false) {            
        document.getElementById("DivImagemLocal").style.display = "none"; 
        formPdf.ckImagemLocal.value = 0;           
    }else{
        document.getElementById("DivImagemLocal").style.display = "block";
        formPdf.ckImagemLocal.value = 1;   
    }
}



/*********************************************************************************************/
/*                         Função para verifição de permição de usuario                       /
/********************************************************************************************/
function verificaPermissao() {  
//Verifica e seta o holding Visualizar e Cadastrar  
    if (formCadastroUsuario.checkHoldingInvisivel.checked == true) {            
           document.getElementById("DivHolding").style.display = "none"; 
           formCadastroUsuario.HoldingInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.HoldingVisualizarAux.value = ""; 
           formCadastroUsuario.HoldingCadastrarAux.value = "";    
    }else{
        document.getElementById("DivHolding").style.display = "block";
        formCadastroUsuario.HoldingInvisivelAux.value = "";

        if (formCadastroUsuario.checkHoldingVisualizar.checked == true) {
            formCadastroUsuario.HoldingVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.HoldingVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkHoldingCadastrar.checked == true) {
            formCadastroUsuario.HoldingCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.HoldingCadastrarAux.value = "";
        }
    }


//Verifica e seta o Requerente Visualizar e Cadastrar  
    if (formCadastroUsuario.checkRequerenteInvisivel.checked == true) {            
           document.getElementById("DivRequerente").style.display = "none"; 
           formCadastroUsuario.RequerenteInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.RequerenteVisualizarAux.value = ""; 
           formCadastroUsuario.RequerenteCadastrarAux.value = "";                
    }else{
        document.getElementById("DivRequerente").style.display = "block";
        formCadastroUsuario.RequerenteInvisivelAux.value = "";

        if (formCadastroUsuario.checkRequerenteVisualizar.checked == true) {
            formCadastroUsuario.RequerenteVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.RequerenteVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkRequerenteCadastrar.checked == true) {
            formCadastroUsuario.RequerenteCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.RequerenteCadastrarAux.value = "";
        }
    }
    

    //Verifica e seta o Imóvel Visualizar e Cadastrar  
    if (formCadastroUsuario.checkImovelInvisivel.checked == true) {            
           document.getElementById("DivImovel").style.display = "none"; 
           formCadastroUsuario.ImovelInvisiveAux.value = "Invisivel"; 
           formCadastroUsuario.ImovelVisualizarAux.value = ""; 
           formCadastroUsuario.ImovelCadastrarAux.value = "";                
    }else{
        document.getElementById("DivImovel").style.display = "block";
        formCadastroUsuario.ImovelInvisiveAux.value = "";

        if (formCadastroUsuario.checkImovelVisualizar.checked == true) {
            formCadastroUsuario.ImovelVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.ImovelVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkImovelCadastrar.checked == true) {
            formCadastroUsuario.ImovelCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.ImovelCadastrarAux.value = "";
        }
    }


     //Verifica e seta a Oportunidade Visualizar e Cadastrar  
    if (formCadastroUsuario.checkOportunidadeInvisivel.checked == true) {            
           document.getElementById("DivOportunidade").style.display = "none"; 
           formCadastroUsuario.OportunidadeInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.OportunidadeVisualizarAux.value = ""; 
           formCadastroUsuario.OportunidadeCadastrarAux.value = "";                
    }else{
        document.getElementById("DivOportunidade").style.display = "block";
        formCadastroUsuario.OportunidadeInvisivelAux.value = "";

        if (formCadastroUsuario.checkOportunidadeVisualizar.checked == true) {
            formCadastroUsuario.OportunidadeVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.OportunidadeVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkOportunidadeCadastrar.checked == true) {
            formCadastroUsuario.OportunidadeCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.OportunidadeCadastrarAux.value = "";
        }
    }



    //Verifica e seta o Orçamento Visualizar e Cadastrar  
    if (formCadastroUsuario.checkOrcamentoInvisivel.checked == true) {            
           document.getElementById("DivOrcamento").style.display = "none"; 
           formCadastroUsuario.OrcamentoInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.OrcamentoVisualizarAux.value = ""; 
           formCadastroUsuario.OrcamentoCadastrarAux.value = "";                
    }else{
        document.getElementById("DivOrcamento").style.display = "block";
        formCadastroUsuario.OrcamentoInvisivelAux.value = "";

        if (formCadastroUsuario.checkOrcamentoVisualizar.checked == true) {
            formCadastroUsuario.OrcamentoVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.OrcamentoVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkOrcamentoCadastrar.checked == true) {
            formCadastroUsuario.OrcamentoCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.OrcamentoCadastrarAux.value = "";
        }
    }

    //Verifica e seta a Faq Visualizar e Cadastrar  
    if (formCadastroUsuario.checkFaqInvisivel.checked == true) {            
           document.getElementById("DivFaq").style.display = "none"; 
           formCadastroUsuario.FaqInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.FaqVisualizarAux.value = ""; 
           formCadastroUsuario.FaqCadastrarAux.value = "";                
    }else{
        document.getElementById("DivFaq").style.display = "block";
        formCadastroUsuario.FaqInvisivelAux.value = "";

        if (formCadastroUsuario.checkFaqVisualizar.checked == true) {
            formCadastroUsuario.FaqVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.FaqVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkFaqCadastrar.checked == true) {
            formCadastroUsuario.FaqCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.FaqCadastrarAux.value = "";
        }
    }


//Verifica e seta od Links Úteis  Visualizar e Cadastrar  
    if (formCadastroUsuario.checkLinksUteisInvisivel.checked == true) {            
           document.getElementById("DivLinksUteis").style.display = "none"; 
           formCadastroUsuario.LinksUteisInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.LinksUteisVisualizarAux.value = ""; 
           formCadastroUsuario.LinksUteisCadastrarAux.value = "";                
    }else{
        document.getElementById("DivLinksUteis").style.display = "block";
        formCadastroUsuario.LinksUteisInvisivelAux.value = "";

        if (formCadastroUsuario.checkLinksUteisVisualizar.checked == true) {
            formCadastroUsuario.LinksUteisVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.LinksUteisVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkLinksUteisCadastrar.checked == true) {
            formCadastroUsuario.LinksUteisCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.LinksUteisCadastrarAux.value = "";
        }
    }



//Verifica e seta os Processos Visualizar e Cadastrar  
    if (formCadastroUsuario.checkProcessosInvisivel.checked == true) {            
           document.getElementById("DivProcessos").style.display = "none"; 
           formCadastroUsuario.ProcessosInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.ProcessosVisualizarAux.value = ""; 
           formCadastroUsuario.ProcessosCadastrarAux.value = "";                
    }else{
        document.getElementById("DivProcessos").style.display = "block";
        formCadastroUsuario.ProcessosInvisivelAux.value = "";

        if (formCadastroUsuario.checkProcessosVisualizar.checked == true) {
            formCadastroUsuario.ProcessosVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.ProcessosVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkProcessosCadastrar.checked == true) {
            formCadastroUsuario.ProcessosCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.ProcessosCadastrarAux.value = "";
        }
    }



    //Verifica e seta os Servicos Visualizar e Cadastrar  
    if (formCadastroUsuario.checkServicosInvisivel.checked == true) {            
           document.getElementById("DivServicos").style.display = "none"; 
           formCadastroUsuario.ServicosInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.ServicosVisualizarAux.value = ""; 
           formCadastroUsuario.ServicosCadastrarAux.value = "";                
    }else{
        document.getElementById("DivServicos").style.display = "block";
        formCadastroUsuario.ServicosInvisivelAux.value = "";

        if (formCadastroUsuario.checkServicosVisualizar.checked == true) {
            formCadastroUsuario.ServicosVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.ServicosVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkServicosCadastrar.checked == true) {
            formCadastroUsuario.ServicosCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.ServicosCadastrarAux.value = "";
        }
    }


//Verifica e seta as Tarefas Visualizar e Cadastrar  
    if (formCadastroUsuario.checkTarefasInvisivel.checked == true) {            
           document.getElementById("DivTarefas").style.display = "none"; 
           formCadastroUsuario.TarefasInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.TarefasVisualizarAux.value = ""; 
           formCadastroUsuario.TarefasCadastrarAux.value = "";                
    }else{
        document.getElementById("DivTarefas").style.display = "block";
        formCadastroUsuario.TarefasInvisivelAux.value = "";

        if (formCadastroUsuario.checkTarefasVisualizar.checked == true) {
            formCadastroUsuario.TarefasVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.TarefasVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkTarefasCadastrar.checked == true) {
            formCadastroUsuario.TarefasCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.TarefasCadastrarAux.value = "";
        }
    }



//Verifica e seta a incorporação Visualizar e Cadastrar  
    if (formCadastroUsuario.checkIncorporacaoInvisivel.checked == true) {            
           document.getElementById("DivIncorporacao").style.display = "none"; 
           formCadastroUsuario.IncorporacaoInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.IncorporacaoVisualizarAux.value = ""; 
           formCadastroUsuario.IncorporacaoCadastrarAux.value = "";                
    }else{
        document.getElementById("DivIncorporacao").style.display = "block";
        formCadastroUsuario.IncorporacaoInvisivelAux.value = "";

        if (formCadastroUsuario.checkIncorporacaoVisualizar.checked == true) {
            formCadastroUsuario.IncorporacaoVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.IncorporacaoVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkIncorporacaoCadastrar.checked == true) {
            formCadastroUsuario.IncorporacaoCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.IncorporacaoCadastrarAux.value = "";
        }
    }



//Verifica e seta do Calendário Visualizar e Cadastrar  
    if (formCadastroUsuario.checkCalendarioInvisivel.checked == true) {            
           document.getElementById("DivCalendario").style.display = "none"; 
           formCadastroUsuario.CalendarioInvisivelAux.value = "Invisivel"; 
           formCadastroUsuario.CalendarioVisualizarAux.value = ""; 
           formCadastroUsuario.CalendarioCadastrarAux.value = "";                
    }else{
        document.getElementById("DivCalendario").style.display = "block";
        formCadastroUsuario.CalendarioInvisivelAux.value = "";

        if (formCadastroUsuario.checkCalendarioVisualizar.checked == true) {
            formCadastroUsuario.CalendarioVisualizarAux.value = "Visualizar"; 
        }else{
            formCadastroUsuario.CalendarioVisualizarAux.value = "";
        }

        if (formCadastroUsuario.checkCalendarioCadastrar.checked == true) {
            formCadastroUsuario.CalendarioCadastrarAux.value = "Cadastrar"; 
        }else{
            formCadastroUsuario.CalendarioCadastrarAux.value = "";
        }
    }

}



function verificaRelatorioHolding(){
    if (formRelatorio.SelectHolding.value != "Todos...") {
        formRelatorio.checkHoldingTodas.checked = false;
        formRelatorio.checkHoldingFisica.checked = false;
        formRelatorio.checkHoldingJuridica.checked = false;
        exit();
    }else {
        formRelatorio.SelectHolding.value = "Todos...";
        formRelatorio.checkHoldingTodas.checked = true;
        formRelatorio.checkHoldingFisica.checked = true;
        formRelatorio.checkHoldingJuridica.checked = true;        
        exit();
    }  
}

function verificaRelatorioRequerente(){
    if (formRelatorio.SelectRequerente.value != "Todos...") {
        formRelatorio.checkRequerenteTodos.checked = false;
        exit();
    }else{
        formRelatorio.checkRequerenteTodos.checked = true; 
        formRelatorio.SelectRequerente.value = "Todos..."
        exit();
    }

}

function verificaRelatorioImovel(){
    if (formRelatorio.SelectImovel.value != "Todos...") {
        formRelatorio.checkImovelTodos.checked = false;
        exit();
    }else{
        formRelatorio.checkImovelTodos.checked = true; 
        formRelatorio.SelectImovel.value = "Todos..."
        exit();
    }

}

function verificaRelatorioTarefa(){
    if (formRelatorio.SelectTarefas.value != "Todos...") {
        formRelatorio.checkTarefasTodas.checked = false;
        formRelatorio.checkTarefasConcluidas.checked = false;
        formRelatorio.checkTarefasPausadas.checked = false;
        formRelatorio.checkTarefasAtrasadas.checked = false;
        formRelatorio.checkTarefasEmAndamento.checked = false;
        formRelatorio.checkTarefasEperaDocumentos.checked = false;
        formRelatorio.checkTarefasDocumentoSolicitado.checked = false;
        formRelatorio.checkTArefasDocumentoRecebido.checked = false;

        
        
        exit();
    }else{
        formRelatorio.SelectTarefas.value = "Todos..."
        formRelatorio.checkTarefasTodas.checked = true;
        formRelatorio.checkTarefasConcluidas.checked = true;
        formRelatorio.checkTarefasPausadas.checked = true;
        formRelatorio.checkTarefasEperaDocumentos.checked = true;
        formRelatorio.checkTarefasDocumentoSolicitado.checked = true;
        formRelatorio.checkTArefasDocumentoRecebido.checked = true;
        formRelatorio.checkTarefasAtrasadas.checked = true;
        formRelatorio.checkTarefasEmAndamento.checked = true;
        exit();
    }

}

function verificaRelatorioIncorporacao(){
    if (formRelatorio.SelectIncorporacao.value != "Todos...") {

        formRelatorio.checkIncorporacaoTodas.checked = false;        
        exit();

    }else{
        formRelatorio.SelectIncorporacao.value = "Todos..."
        formRelatorio.checkIncorporacaoTodas.checked = true;
        exit();
    }

}



/*******************************************************************************************/
//Validação de eventos e forms
/*******************************************************************************************/

// JavaScript Document
//adiciona mascara de cnpj
function MascaraCNPJ(cnpj){
    if(mascaraInteiro(cnpj)==false){
        event.returnValue = false;
    }   
    return formataCampo(cnpj, '00.000.000/0000-00', event);
}

//adiciona mascara de cep
function MascaraCep(cep){
        if(mascaraInteiro(cep)==false){
        event.returnValue = false;
    }   
    return formataCampo(cep, '00.000-000', event);
}

//adiciona mascara de data
function MascaraData(data){
    if(mascaraInteiro(data)==false){
        event.returnValue = false;
    }   
    return formataCampo(data, '00/00/0000', event);
}

//adiciona mascara ao telefone
function MascaraTelefone(tel){  
    if(mascaraInteiro(tel)==false){
        event.returnValue = false;
    }   
    return formataCampo(tel, '(00) 0000-0000', event);
}

//adiciona mascara ao CPF
function MascaraCPF(cpf){
    if(mascaraInteiro(cpf)==false){
        event.returnValue = false;
    }   
    return formataCampo(cpf, '000.000.000-00', event);
}

//valida telefone
function ValidaTelefone(tel){
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if(!exp.test(tel.value))
        alert('Numero de Telefone Invalido!');
}

//valida CEP
function ValidaCep(cep){
    exp = /\d{2}\.\d{3}\-\d{3}/
    if(!exp.test(cep.value))
        alert('Numero de Cep Invalido!');       
}

//valida data
function ValidaData(data){
    exp = /\d{2}\/\d{2}\/\d{4}/
    if(!exp.test(data.value))
        alert('Data Invalida!');            
}

//valida o CPF digitado
function ValidarCPF(Objcpf){
    var cpf = Objcpf.value;
    exp = /\.|\-/g
    cpf = cpf.toString().replace( exp, "" ); 
    var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));
    var soma1=0, soma2=0;
    var vlr =11;
    
    for(i=0;i<9;i++){
        soma1+=eval(cpf.charAt(i)*(vlr-1));
        soma2+=eval(cpf.charAt(i)*vlr);
        vlr--;
    }   
    soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));
    soma2=(((soma2+(2*soma1))*10)%11);
    
    var digitoGerado=(soma1*10)+soma2;
    if(digitoGerado!=digitoDigitado)    
        alert('CPF Invalido!');     
}

//valida numero inteiro com mascara
function mascaraInteiro(){
    if (event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
        return false;
    }
    return true;
}

//valida o CNPJ digitado
function ValidarCNPJ(ObjCnpj){
    var cnpj = ObjCnpj.value;
    var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);
    var dig1= new Number;
    var dig2= new Number;
    
    exp = /\.|\-|\//g
    cnpj = cnpj.toString().replace( exp, "" ); 
    var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));
        
    for(i = 0; i<valida.length; i++){
        dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);  
        dig2 += cnpj.charAt(i)*valida[i];   
    }
    dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));
    dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));
    
    if(((dig1*10)+dig2) != digito)  
        alert('CNPJ Invalido!');
        
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
    var boleanoMascara; 
    
    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
    var posicaoCampo = 0;    
    var NovoValorCampo="";
    var TamanhoMascara = campoSoNumeros.length;; 
    
    if (Digitato != 8) { // backspace 
        for(i=0; i<= TamanhoMascara; i++) { 
            boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                || (Mascara.charAt(i) == "/")) 
            boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
            if (boleanoMascara) { 
                NovoValorCampo += Mascara.charAt(i); 
                  TamanhoMascara++;
            }else { 
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                posicaoCampo++; 
              }      
          }  
        campo.value = NovoValorCampo;
          return true; 
    }else { 
        return true; 
    }
}