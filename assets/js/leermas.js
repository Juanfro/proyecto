$(document).ready(function() {
     
      $('div.expandable p').expander({
      slicePoint: 150, // si eliminamos por defecto es 100 caracteres
      expandText: '[leer más]', // por defecto es 'read more...'
      collapseTimer: 5000, // tiempo de para cerrar la expanción si desea poner 0 para no cerrar
      userCollapseText: '[leer menos]' // por defecto es 'read less...'
    });
  });