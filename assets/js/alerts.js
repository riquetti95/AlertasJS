// Função desenvolvida por ADRIANO RIQUETTI
// Exibe notificação no canto da pagina no top

// Chama a função de construir a notificação
function NovoAlerta(mensagem, titulo) {
    if (titulo === 'Alerta') {
        toastr.warning(mensagem, titulo);
    } else if (titulo === 'Sucesso') {
        toastr.success(mensagem, titulo);
    } else if (titulo === 'Informação') {
        toastr.info(mensagem, titulo);
    } else if (titulo === 'Token de Segurança') {
        toastr.warning(mensagem, titulo);
    } else if (titulo === 'Falha') {
        toastr.error(mensagem, titulo);
    }
} 

// Construindo a notificação na tela
toastr.options = {
  closeButton: true,
  debug: false,
  newestOnTop: true,
  progressBar: true,
  positionClass: "toast-top-right",
  preventDuplicates: true,
  onclick: null,
  showDuration: "300",
  hideDuration: "1000",
  timeOut: "5000",
  extendedTimeOut: "1000",
  showEasing: "swing",
  hideEasing: "linear",
  showMethod: "fadeIn",
  hideMethod: "fadeOut",
  rtl: false,
  escapeHtml: true
};