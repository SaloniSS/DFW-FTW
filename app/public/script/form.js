$("#mainForm").on( "submit", function( event ) {
  event.preventDefault();
  console.log( $( this ).serialize() );
});