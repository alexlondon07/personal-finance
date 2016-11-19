/** Modulo que contiene llas funciones y variables necesarias para el modulo clientes
 * @author Alexander Londoño
 * @since 2016-11-18
 */
var Client = {};

/**
 * Funcion que define variables y funciones
 */
(function() {
    /**
     * Metodo que inicializa el modulo
     */
    Client.initialize = function() {
          $('#clients').DataTable();
    };

})();
/** funcion que se ejecuta al terminar el cargar el documento */
$(function() {
    Client.initialize();
});
