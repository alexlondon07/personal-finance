/** Modulo que contiene llas funciones y variables necesarias para el modulo usuarios
 * @author Alexander Londoño
 * @since 2016-10-25
 */
var Product = {};

/**
 * Funcion que define variables y funciones
 */
(function() {
    /**
     * Metodo que inicializa el modulo
     */
    Product.initialize = function() {
          $('#products').DataTable();
    };

})();
/** funcion que se ejecuta al terminar el cargar el documento */
$(function() {
    Product.initialize();
});
