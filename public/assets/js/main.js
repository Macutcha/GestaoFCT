 // Carrega a funcao main depois da pagina carregar
 window.addEventListener("load", main)

// Funcoa principal que faz o carregamento de amaioria das funcoes
function main() {
    // Variaveis
    var fechar_menu, mostrar_menu
    var elementoSelecionado = document.getElementById("Selecionado")

    // Funcao que oculta Elementos
    // ocultar() 
// =====================================================
    // Atribuicao de valores nas variavis 
    fechar_menu = document.getElementById("Exit_Bars");
    mostrar_menu = document.getElementById("bars")

// =====================================================
    // Addicao do Evento e a accao
    fechar_menu.addEventListener("click", ocultar_menu)
    mostrar_menu.addEventListener("click", mostrarMenu)
    elementoSelecionado.addEventListener("change", mostrarElementos)
}

// =====================================================
function ocultar_menu() {
    document.getElementById("menu").style.display="none"
}

// =====================================================
    function mostrarMenu() {
        document.getElementById("menu").style.display="block"
    }

// =====================================================
    // funcoa de teste
    function mostrarElementos() {
        console.log(document.getElementById("Selecionado").value)
        var valor = document.getElementById("Selecionado").value
        if (valor =='Central') {
            coultar_elemento(document.getElementById("adicionar_cental"))
        }
        
        if (valor =='PT') {
            coultar_elemento(document.getElementById("adicionar_pt"));
        }

        if (valor == "Subestacao"){
            coultar_elemento(document.getElementById("adicionar_subestacao"));
        }

        if(valor == "Saida") {
            coultar_elemento(document.getElementById("adicionar_saida"));
        }

        if(valor == "Linha") {
            coultar_elemento(document.getElementById("adicionar_linha"));
        }


    }

// =====================================================
// Funcoa Que oculta os elementos
function ocultar() {
    document.getElementById("adicionar_subestacao").hidden = true
    document.getElementById("adicionar_cental").hidden = true
    document.getElementById("adicionar_linha").hidden = true
    document.getElementById("adicionar_saida").hidden = true
}

// =====================================================
// Funcao que ocultas elemntos nao Selecionados
function coultar_elemento(visualizarElemento) {
    document.getElementById("adicionar_subestacao").hidden = true
    document.getElementById("adicionar_cental").hidden = true
    document.getElementById("adicionar_linha").hidden = true
    document.getElementById("adicionar_saida").hidden = true
    document.getElementById("adicionar_pt").hidden = true

    // Verifica se o elemento esta definido para tornar vissivel
    if(visualizarElemento) {
        visualizarElemento.hidden = false
    }
}















//     ocultar_Elementos() // Funcao que oculta todos Elementos

//     let menu = document.getElementById("menu")
//     const sair_menu = document.getElementById("fechar_menu")
//     var adicionar_bairro,adicionar_delegacao, adicionar_subestacao, adicionar_linha
//     var adicionar_saida, adicionar_pt
//     adicionar_bairro= document.getElementById("adicionar_bairro");
//     adicionar_delegacao= document.getElementById("adicionar_delegacao");


//     menu.hidden=true;
//     sair_menu.addEventListener("click",ocultar_menu)
//     bars.addEventListener("click", mostar_menu)

//     adicionar_delegacao.addEventListener("click", visualisar_form_delegacao)
//     adicionar_bairro.addEventListener("click", visualisar_form_bairro)
//     adicionar_subestacao.addEventListener("click", visualisar_form_subestacao)
//     adicionar_linha.addEventListener("click", visualisar_form_linha)
//     adicionar_saida.addEventListener("click", visualisar_form_saida)
//     adicionar_pt.addEventListener("click", visualisar_form_pt)
// }

// // =====================================================
// function ocultar_menu () {
//     const bars = document.getElementById("bars");
//     const sair_menu = document.getElementById("fechar_menu")
//     const menu = document.getElementById("menu")

//     menu.hidden= true;
//     bars.hidden = false
// }

// // =====================================================
// function mostar_menu() {
//     const bars = document.getElementById("bar");
//     const sair_menu = document.getElementById("fechar_menu")
//     const menu = document.getElementById("menu") 

//     menu.hidden=false
//     bars.hidden = true
// }

// // =====================================================
// // Funcaoa que Ocultara o Elementos
// function ocultar_Elementos() {
//     document.getElementById("form_delegacao").hidden = true;
//     document.getElementById("form_delegacao").hidden= true
//     document.getElementById("form_bairro").hidden= true
//     document.getElementById("form_subestacao").hidden= true
//     document.getElementById("form_linha").hidden= true
//     document.getElementById("form_saida").hidden= true
//     // document.getElementById("form_pt").hidden= true
// }

// // =====================================================
// function visualisar_form_delegacao() {
//     document.getElementById("form_delegacao").hidden= false
//     document.getElementById("form_bairro").hidden= true
//     document.getElementById("form_subestacao").hidden= true
//     document.getElementById("form_linha").hidden= true
//     document.getElementById("form_saida").hidden= true
//     document.getElementById("form_pt").hidden= true
// }

// // =====================================================
// function visualisar_form_bairro() {
//     document.getElementById("form_delegacao").hidden= true
//     document.getElementById("form_bairro").hidden= false
//     document.getElementById("form_subestacao").hidden= true
//     document.getElementById("form_linha").hidden= true
//     document.getElementById("form_saida").hidden= true
//     document.getElementById("form_pt").hidden= true
// }

// // =====================================================
// function visualisar_form_subestacao() {
//     document.getElementById("form_delegacao").hidden= true
//     document.getElementById("form_bairro").hidden= true
//     document.getElementById("form_subestacao").hidden= false
//     document.getElementById("form_linha").hidden= true
//     document.getElementById("form_saida").hidden= true
//     document.getElementById("form_pt").hidden= true
//     }
    
// // =====================================================
// function visualisar_form_linha() {
//     document.getElementById("form_delegacao").hidden= true
//     document.getElementById("form_bairro").hidden= true
//     document.getElementById("form_subestacao").hidden= true
//     document.getElementById("form_linha").hidden= false
//     document.getElementById("form_saida").hidden= true
//     document.getElementById("form_pt").hidden= true
// }

// // =====================================================
// function visualisar_form_saida() {
//     document.getElementById("form_delegacao").hidden= true
//     document.getElementById("form_bairro").hidden= true
//     document.getElementById("form_subestacao").hidden= true
//     document.getElementById("form_linha").hidden= true
//     document.getElementById("form_saida").hidden= false
//     document.getElementById("form_pt").hidden= true
// }

// // =====================================================
// function visualisar_form_pt() {

//     document.getElementById("form_delegacao").hidden= true
//     document.getElementById("form_bairro").hidden= true
//     document.getElementById("form_subestacao").hidden= true
//     document.getElementById("form_linha").hidden= true
//     document.getElementById("form_saida").hidden= true
//     document.getElementById("form_pt").hidden= false
// }
// // =====================================================
// 

// // =====================================================
// // =====================================================
// // =====================================================

